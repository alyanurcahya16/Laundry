<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Setting;
use App\Models\Appointment;
use App\Models\Testimoni;
use App\Models\RegistrasiHotel;

class DashboardController extends Controller
{
    public function index()
    {
        $totalRegistrasiHotel = RegistrasiHotel::count();
        return view('admin.dashboard.index', [
            'totalUsers' => User::count(),
            'totalSettings' => Setting::count(),
            'totalAppointments' => Appointment::count(),
            'averageRating' => number_format(Testimoni::avg('rate') ?? 0, 1),
            'totalTestimoni' => Testimoni::count(),
            'totalRegistrasiHotel' => $totalRegistrasiHotel
        ]);
    }
}
