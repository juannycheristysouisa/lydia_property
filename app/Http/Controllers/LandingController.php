<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('Landing.index');
    }

    public function detail($id)
    {
        return view('Landing.detail', compact('id'));
    }

    public function property()
    {
        return view('Landing.property');
    }

    public function contact()
    {
        return view('Landing.contact');
    }
}