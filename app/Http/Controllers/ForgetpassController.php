<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgetpassController extends Controller
{
    // Menampilkan form lupa password
    public function showForgotPasswordForm()
    {
        return view('forgot-password');
    }

    // Proses mengirim email simulasi
    public function sendResetLink(Request $request)
    {
        // Simulasi pengiriman email tanpa validasi
        return redirect('/forgot-password-confirmation');
    }

    // Menampilkan form reset password
    public function showResetForm()
    {
        return view('reset-password');  // Pastikan view reset-password.blade.php ada
    }

    // Proses reset password
    public function resetPassword(Request $request)
    {
        // Anda bisa menambahkan logika seperti validasi password di sini, jika diperlukan.

        // Setelah itu, redirect ke halaman login
        return redirect('/login');
    }



}
