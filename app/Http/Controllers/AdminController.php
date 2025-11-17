<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminController extends Controller
{
    public function register()
{
    return view('admin.register');
}

public function registerProcess(Request $request)
{
    $request->validate([
        'name' => 'required|min:3',
        'email' => 'required|email|unique:admins,email',
        'password' => 'required|min:6'
    ]);

    // Simpan admin baru dengan HASH password
    Admin::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password), // ← penting
    ]);

    return redirect()->route('admin.login')->with('success', 'Akun admin berhasil dibuat!');
}
}