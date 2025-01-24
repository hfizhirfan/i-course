<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category.index'); // Kategori sebelum login
    }

    public function afterLogin()
    {
        return view('category.after-login'); // Mengarahkan ke `after-login.blade.php`
    }

    public function showPemrogramanJavaBef()
    {
        return view('category.detail.before-pemrograman-java-pemula');
    }

    public function showPemrogramanJava()
    {
        return view('category.detail.pemrograman-java-pemula');
    }

    public function showVueJs()
    {
        return view('category.detail.vuejs-pemula');
    }

}
