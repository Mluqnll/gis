<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return View('login');
    }

    public function loginProcess()
    {
        $userid = request('userid');
        $field = $this->determineField($userid);

        $credential = [
            $field => $userid,
            'password' => request('password')
        ];

        // return $credential;
        if (auth()->attempt($credential)) {
            // return $credential;
            $pengelola = auth()->user();

            return redirect('/admin')->with('success', 'Login berhasil');
        } else {
            return redirect()->route('login')->with('error', 'Login gagal. Pastikan akun Anda benar.');
        }
    }

    private function determineField($userid)
    {
        if (Str::contains($userid, '@')) {
            return 'email';
        } else {
            $userid = str_replace(" ", "", $userid);
            $strlen = Str::length($userid);

            if ($strlen == 10) {
                return 'nim';
            } else {
                return 'username';
            }
        }
    }


    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
