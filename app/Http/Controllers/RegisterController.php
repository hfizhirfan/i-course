<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function __invoke(Request $request)
    {

        return view('register');
    }
}
