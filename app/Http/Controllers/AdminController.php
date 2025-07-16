<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('layouts.admin');
    }

    public function dashboard()
    {
        return view('admin_pages.index');
    }

    public function profile()
    {
        return view('admin_pages.profile');
    }
    public function login()
    {
        return view('admin_pages.admin-login');
    }

    public function logout()
    {
        // Logic for logging out the admin user
        return redirect()->route('admin.login');
    }

    public function settings()
    {
        return view('admin_pages.settings');
    }

    public function recoverpassword()
    {
        return view('admin_pages.auth-recover-pw');
    }

    public function resetpassword()
    {
        return view('admin_pages.auth-reset-password');
    }

    public function generalsettings()
    {
        return view('admin_pages.general_settings.index');
    }
}
