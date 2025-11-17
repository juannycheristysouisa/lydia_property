<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Property;
use App\Models\Order;
use App\Models\User;


class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function loginProcess(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['error' => 'Email atau password salah.']);
    }

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

        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.login')->with('success', 'Akun admin berhasil dibuat!');
    }

  public function logout(Request $request)
{
    Auth::guard('admin')->logout();     // Logout admin

    $request->session()->invalidate();  // Hapus sesi
    $request->session()->regenerateToken(); // Regenerate token

    return redirect()->route('admin.login')->with('success', 'Berhasil logout!');
}

    
    public function dashboard()
    {
    $totalProperty = Property::count();
    $totalOrders = Order::count();
    $activeUsers = User::count();

    return view('admin.dashboard', compact('totalProperty', 'totalOrders', 'activeUsers'));
}

}