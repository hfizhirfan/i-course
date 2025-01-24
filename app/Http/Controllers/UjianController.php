<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UjianController extends Controller
{
    public function kuis()
    {
        return view('ujian.kuis');
    }

    public function hasilkuis()
    {
        return view('ujian.hasilkuis');
    }
}
