<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return view('course.index'); // Pembelajaran sebelum login
    }

    public function afterLogin()
    {
        return view('course.after-login'); // Pembelajaran setelah login (bisa sama)
    }
}

