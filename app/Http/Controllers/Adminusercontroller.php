<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminuserController extends Controller
{
    public function index()
    {

        return view('admin.user.index');
    }

    public function showBudiono()
    {

        return view('admin.user.show-budiono');
    }
    public function showSiti()
    {

        return view('admin.user.show-siti');
    }
}
