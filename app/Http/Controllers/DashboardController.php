<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Setting;
use App\Models\Appointment;
use App\Models\Testimoni;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index', [
            'totalUsers' => User::count(),
            'totalSettings' => Setting::count(),
            'totalAppointments' => Appointment::count(),
            'averageRating' => number_format(Testimoni::avg('rate') ?? 0, 1),
            'totalTestimoni' => Testimoni::count(),
        ]);
    }
}
