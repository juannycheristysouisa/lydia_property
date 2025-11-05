<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Landing.index');
    }

    // Halaman detail property
    public function detail($id)
{
    return view('Landing.detail', compact('id'));
}
    // Halaman daftar property
    public function property()
    {
        return view('Landing.property'); // nanti buat file property.blade.php
    }

    // Halaman contact
    public function contact()
    {
        return view('Landing.contact'); // nanti buat file contact.blade.php
    }
}