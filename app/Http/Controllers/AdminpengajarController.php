<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminpengajarController extends Controller
{
    public function index()
    {

        return view('admin.pengajar.index');
    }

    public function editRina()
    {
        return view('admin.pengajar.edit-rina');
    }
    public function editBudi()
    {
        return view('admin.pengajar.edit-budi');
    }
    public function create()
    {

        return view('admin.pengajar.create');
    }
    public function showRina()
    {
        return view('admin.pengajar.show-rina', ['namaPengajar' => 'Rina Wijaya']);
    }

    public function showBudi()
    {
        return view('admin.pengajar.show-budi', ['namaPengajar' => 'Budi Setiawan']);
    }


}
