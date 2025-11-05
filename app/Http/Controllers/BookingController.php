<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    // Tampilkan halaman form booking
    public function create()
    {
        return view('Landing.booking');
    }

    // Simpan data booking
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'nik' => 'required|digits:16',
            'address' => 'required|string',
            'check_in' => 'required|date',
            'check_out' => 'required|date|after:check_in',
        ]);

        // Sementara kita hanya tampilkan hasil input
        // Nanti bisa diganti untuk disimpan ke database
        return back()->with('success', 'Pemesanan berhasil dikirim!');
    }
}