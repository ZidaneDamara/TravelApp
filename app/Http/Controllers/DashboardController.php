<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PackageBooking;

class DashboardController extends Controller
{
    //
    public function my_bookings(){
        return view ('dashboard.my_bookings');
    }

    public function booking_details(PackageBooking $packageBooking){
        return view ('dashboard.booking_details', compact('packageBooking'));
    }

}