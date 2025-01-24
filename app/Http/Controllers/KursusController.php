<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KursusController extends Controller
{
    public function pemrogramanJavaPemula(Request $request)
    {
        $showContent = $request->query('show', '');
        return view('category.kursus.pemrograman-javapemula', compact('showContent'));
    }

}
