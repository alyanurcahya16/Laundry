<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'telepon' => 'required|string|max:15',
            'alamat' => 'required|string',
            'layanan' => 'required|string',
            'item' => 'required|string',
            'quantity' => 'nullable|integer',
            'catatan' => 'nullable|string'
        ]);

        $order = Order::create($validated); // Tambahin ini

return redirect()->route('order.success', $order->id)->with('success', 'Pesanan berhasil dikirim!');

    }

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