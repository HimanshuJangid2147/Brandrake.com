<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $sessions = \App\Models\Session::where('user_id', Auth::guard('admin')->id())->get();
        return view('admin_pages.index', compact('sessions'));
    }

    public function showLoginForm()
    {
        return view('admin_pages.admin-login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->username, 'password' => $request->password], $request->remember)) {
            return redirect()->route('admin.index');
        }

        return back()->withErrors(['username' => 'Invalid credentials']);
    }

    public function showRecoverForm()
    {
        return view('admin_pages.auth-recover-pw');
    }

    public function recover(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::broker('admins')->sendResetLink(['email' => $request->email]);

        return $status === Password::RESET_LINK_SENT
            ? back()->with('success', __($status))
            : back()->withErrors(['email' => __($status)]);
    }

    public function showResetForm($token, Request $request)
    {
        return view('admin_pages.auth-reset-password', ['token' => $token, 'email' => $request->email]);
    }

    public function reset(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        $status = Password::broker('admins')->reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->password = Hash::make($password);
                $user->save();
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('admin.login.form')->with('success', __($status))
            : back()->withErrors(['email' => __($status)]);
    }

    public function profile()
    {
        return view('admin_pages.profile');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:admins,username,' . Auth::guard('admin')->id(),
            'email' => 'required|email|max:255|unique:admins,email,' . Auth::guard('admin')->id(),
        ]);

        Auth::guard('admin')->user()->update($request->only('name', 'username', 'email'));

        return back()->with('success', 'Profile updated successfully');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);

        $admin = Auth::guard('admin')->user();
        if (!Hash::check($request->current_password, $admin->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect']);
        }

        $admin->update(['password' => Hash::make($request->password)]);

        return back()->with('success', 'Password updated successfully');
    }

    public function updateSecurity(Request $request)
    {
        $request->validate(['two_factor_enabled' => 'boolean']);

        Auth::guard('admin')->user()->update(['two_factor_enabled' => $request->two_factor_enabled]);

        return response()->json(['status' => 'success']);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login.form');
    }
}
