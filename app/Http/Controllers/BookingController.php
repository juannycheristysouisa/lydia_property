<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    // Simpan pemesanan dari form
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
            'name' => $request->name,
            'nik' => $request->nik,
            'address' => $request->address,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
            'dewasa' => $request->dewasa,
            'anak' => $request->anak,
            'total_price' => $request->summary_total ?? 0,
        ]);

        return redirect()->back()->with('success', 'Pemesanan berhasil, data terkirim ke admin!');
    }

    // Halaman admin — daftar pemesanan masuk
    public function adminIndex()
    {
        $bookings = Booking::latest()->get();

        return view('admin.pemesanan.index', compact('bookings'));
    }
}