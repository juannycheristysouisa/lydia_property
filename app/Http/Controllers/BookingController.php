<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index()
    {
        // Tampilkan daftar booking (untuk admin nanti)
        $bookings = Booking::all();
        return view('Admin.booking.index', compact('bookings'));
    }

    public function store(Request $request)
    {
        // Validasi input dari form
        $validated = $request->validate([
            'property' => 'required|string',
            'price_per_night' => 'required|numeric',
            'name' => 'required|string|max:255',
            'nik' => 'required|digits:16',
            'address' => 'required|string',
            'check_in' => 'required|date',
            'check_out' => 'required|date|after_or_equal:check_in',
        ]);

        // Simpan data booking ke database
        Booking::create($validated);

        // Redirect ke halaman pembayaran atau tampilkan notifikasi sukses
        return redirect()->route('payment.page')->with('success', 'Booking berhasil disimpan!');
    }
}