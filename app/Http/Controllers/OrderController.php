<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{   
    public function index()
{
    $orders = Order::where('is_history', false)->get();
    return view('backend.orders.index', compact('orders'));
}
    public function history()
{
    $orders = Order::where('is_history', true)->get();
    return view('backend.orders.history', compact('orders'));
}
    public function moveToHistory($id)
{
    $order = Order::findOrFail($id);
    $order->update(['is_history' => true]); // atau flag lain yang Anda gunakan
    
    return redirect()->route('admin.orders.index')
        ->with('success', 'Pesanan berhasil dipindahkan ke history');
}
    public function store(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'telepon' => 'required|string|max:15',
            'alamat' => 'required|string',
            'orders' => 'required|array|min:1',
            'orders.*.layanan' => 'required|string',
            'orders.*.item' => 'required|string',
            'orders.*.quantity' => 'nullable|integer|min:1',
            'orders.*.catatan' => 'nullable|string'
        ]);

        // Format data items untuk disimpan dalam satu kolom text
        $itemsDescription = "";
        foreach ($validated['orders'] as $item) {
            $itemsDescription .= "• " . ($item['quantity'] ?? 1) . "x " . 
                               $item['item'] . " (" . $item['layanan'] . ")";
            
            if (!empty($item['catatan'])) {
                $itemsDescription .= " - Catatan: " . $item['catatan'];
            }
            
            $itemsDescription .= "\n"; // New line untuk item berikutnya
        }

        // Simpan ke database
        $order = Order::create([
            'nama' => $validated['nama'],
            'telepon' => $validated['telepon'],
            'alamat' => $validated['alamat'],
            'layanan' => 'Multiple Items', // Atau bisa diisi dengan jenis layanan pertama
            'item' => $itemsDescription, // Simpan semua item sebagai text
            'quantity' => count($validated['orders']), // Jumlah total item
            'catatan' => 'Lihat detail item', // Catatan umum
            'status' => 'pending'
        ]);

        return redirect()->route('order.success', $order->id)
                        ->with('success', 'Pesanan berhasil dikirim!');
    }

    // Method lainnya tetap sama
    public function success($id)
    {
        $order = Order::findOrFail($id);
        return view('frontend.success', compact('order'));
    }

    public function receipt($id)
    {
        $order = Order::findOrFail($id);
        return view('frontend.receipt', compact('order'));
    }

    public function updateStatus(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->status = $request->status;
        $order->save();

        return redirect()->back()->with('success', 'Status pemesanan berhasil diperbarui.');
    }
}