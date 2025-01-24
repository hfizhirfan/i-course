<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminsoalController extends Controller
{
    public function index()
    {

        return view('admin.soal.index');
    }

    public function edit()
    {
        return view('admin.soal.edit');
    }
    public function create()
    {

        return view('admin.soal.create');
    }
    public function settingtambah()
    {

        return view('admin.soal.setting-tambah');
    }
    public function settingedit()
    {

        return view('admin.soal.setting-edit');
    }
}
