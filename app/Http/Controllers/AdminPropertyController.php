<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPropertyController extends Controller
{
    public function index()
    {
        return view('admin.properties.index');
    }

    public function create()
    {
        return view('admin.properties.create');
    }
}