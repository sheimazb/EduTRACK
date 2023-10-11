<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function show()
    {
        return view('Admin/Dashboard');
    }

    public function updateProfile()
    {
        $id = Auth::guard('admin')->user()->id;
        $admin = Admin::findOrFail($id);
        return view('Admin/Profile/Edit',['admin'=>$admin]);
    }

    public function login()
    {
        return view('Auth.LoginEtudiant');
    }

    public function submit(Request $request)
    {
        $check = Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password]);
        $check2 = Auth::guard('enseignant')->attempt(['email' => $request->email, 'password' => $request->password]);

        if ($check) {
            return redirect()->route('admin.dashboard');
        } elseif ($check2) {

            return redirect()->route('enseignant.dashboard');
        } else {
            return "Invalid email or password!";
        }
    }

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect()->route('admin.login');

    }

}
