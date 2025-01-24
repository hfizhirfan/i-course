<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeloginController extends Controller
{
    public function __invoke(Request $request)
    {

        return view('index-login');
    }
}
