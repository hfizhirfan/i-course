<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminkursusController extends Controller
{
    public function index()
    {

        return view('admin.kursus.index');
    }

    public function edit()
    {
        return view('admin.kursus.edit');
    }
    public function create()
    {

        return view('admin.kursus.create');
    }
    public function settingedit()
    {

        return view('admin.kursus.setting-edit');
    }
    public function settingtambah()
    {

        return view('admin.kursus.setting-tambah');
    }
    public function createsoal()
    {
        return view('admin.kursus.create-soal');
    }

}
