<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'nik' => 'required|digits:16',
        'address' => 'required',
        'check_in' => 'required|date',
        'check_out' => 'required|date',
    ]);

    Booking::create([
        'nama_lengkap' => $request->name,
        'nik' => $request->nik,
        'alamat' => $request->address,
        'checkin' => $request->check_in,
        'checkout' => $request->check_out,
        'dewasa' => $request->dewasa,
        'anak' => $request->anak,
        'total_harga' => $request->summary_total ?? 0,
    ]);

    return redirect()->back()->with('success', 'Pemesanan berhasil!');
}

public function create()
{
    return view('booking.create');
}


}