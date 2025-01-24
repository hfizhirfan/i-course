<?php
namespace App\Http\Controllers;

class HomeController extends Controller
{
     public function index()
    {
        return view('home.index'); // Halaman sebelum login
    }

    public function afterLogin()
    {
        return view('home.after-login'); // Halaman setelah login
    }
}
