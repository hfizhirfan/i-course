<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Logika untuk mendapatkan data profil (misalnya dari database)
        return view('admin.dashboard');
    }

    public function kursus()
    {
        // Logika untuk mendapatkan data profil (misalnya dari database)
        return view('admin.kursus');
    }
}
