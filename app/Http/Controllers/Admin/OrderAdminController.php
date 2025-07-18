<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderAdminController extends Controller
{
    public function index(Request $request)
    {
        $query = Order::query();

        // Kalau ada pencarian
        if ($request->has('q')) {
            $keyword = $request->q;
            $query->where(function($q) use ($keyword) {
                $q->where('nama', 'like', "%{$keyword}%")
                  ->orWhere('telepon', 'like', "%{$keyword}%")
                  ->orWhere('alamat', 'like', "%{$keyword}%")
                  ->orWhere('layanan', 'like', "%{$keyword}%")
                  ->orWhere('item', 'like', "%{$keyword}%");
            });
        }

        $orders = $query->latest()->paginate(20);

        return view('backend.orders.index', compact('orders'));
    }
}
