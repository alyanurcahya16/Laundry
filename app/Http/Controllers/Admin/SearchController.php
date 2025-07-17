<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Setting;
// Tambahin model lain kalau perlu

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('q');

        $orders = Order::where('nama', 'like', "%{$keyword}%")
            ->orWhere('telepon', 'like', "%{$keyword}%")
            ->orWhere('alamat', 'like', "%{$keyword}%")
            ->orWhere('item', 'like', "%{$keyword}%")
            ->get();

        $settings = Setting::where('company_name', 'like', "%{$keyword}%")
            ->orWhere('email', 'like', "%{$keyword}%")
            ->get();

        // Bisa ditambah banners, services, dll

        return view('backend.search.results', compact('orders', 'settings', 'keyword'));
    }
}
