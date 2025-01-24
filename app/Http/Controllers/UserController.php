<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        // Logika untuk mendapatkan data profil (misalnya dari database)
        return view('user.profile');
    }

    public function courses()
    {
        // Logika untuk kursus
        return view('user.kursus');
    }

    public function notes()
    {
        // Logika untuk catatan
        return view('user.catatan');
    }

    public function achievements()
    {
        // Logika untuk pencapaian
        return view('user.pencapaian');
    }
}

