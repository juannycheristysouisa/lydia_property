<?php
  
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    // Tambahkan method ini untuk menampilkan form booking
    public function create()
    {
        return view('landing.booking');  
    }

    // Method store Anda sudah ada, tapi pastikan validasi lengkap
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nik' => 'required|digits:16',
            'address' => 'required|string',
            'check_in' => 'required|date',
            'check_out' => 'required|date|after:check_in',
            'dewasa' => 'required|integer|min:1',
            'anak' => 'nullable|integer|min:0',
            'summary_total' => 'required|numeric|min:0',
        ]);

        $totalHarga = $request->summary_total;  // Atau hitung server-side jika perlu

        Booking::create([
            'nama_lengkap' => $request->name,
            'nik' => $request->nik,
            'alamat' => $request->address,
            'checkin' => $request->check_in,
            'checkout' => $request->check_out,
            'dewasa' => $request->dewasa,
            'anak' => $request->anak,
            'note' => $request->note,
            'total_harga' => $totalHarga,
        ]);

        return redirect('/booking/success')->with('success', 'Pemesanan berhasil!');
    }

    // Tambahkan method ini untuk admin melihat daftar booking
    public function adminIndex()
    {
        $bookings = Booking::all();
        return view('admin.pemesanan', compact('bookings'));  // Akan kita buat view-nya di bawah
    }
}