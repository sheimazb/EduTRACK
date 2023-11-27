<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Exception;

class AdminController extends Controller
{
    public function show()
    {
        $id = Auth::guard('admin')->user()->id;
        $admin = Admin::findOrFail($id);
        return view('Admin/Dashboard',['admin'=>$admin]);
    }

    public function updateProfile()
    {
        $id = Auth::guard('admin')->user()->id;
        $admin = Admin::findOrFail($id);
        $admins=Admin::all();
        return view('Admin/Profile/Edit',['admin'=>$admin,'admins'=>$admins]);
    }

    public function updateInformationAdmin(Request $request, $id){
        $name = time() . '_' . $request->file('fileUpload')->getClientOriginalName();
        $request->file('fileUpload')->move('images/admin/', $name);

        $admin=Admin::findOrFail($id);
        $admin->nom = $request->nom;
        $admin->email = $request->email;
        $admin->path = "images/admin/" . $name;
        $admin->update();
        return redirect()->route('profile.admin', $id)->with('success', 'data update');
    }

    public function login()
    {
        return view('Auth.LoginEtudiant');
    }

    public function submit(Request $request)
    {
        $check = Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password]);
        $check2 = Auth::guard('enseignant')->attempt(['email' => $request->email, 'password' => $request->password]);
        $check3 = Auth::guard('etudiant')->attempt(['email' => $request->email, 'password' => $request->password]);


        if ($check) {
            return redirect()->route('admin.dashboard');
        } elseif ($check2) {
            return redirect()->route('enseignant.dashboard');
        }elseif ($check3) {
            return redirect()->route('etudiant.dashboard');
        } else {
            return "Invalid email or password!";
        }
    }

    public function changePassword(Request $request)
    {
        $user = Auth::guard('admin')->user();

        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:6|confirmed', // Utilisation de 'confirmed' pour vérifier la correspondance avec 'password_confirmation'
        ]);

        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->route('profile.admin')->withErrors(['current_password' => 'Le mot de passe actuel ne correspond pas']);
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->back()->with('success', 'Mot de passe mis à jour avec succès');
    }

    public function CreateAdmin(Request $request)
    {
        try{
        $admin=new Admin();
        $admin->nom=$request->nom;
        $admin->prenom=$request->prenom;
        $admin->email=$request->email;
        $admin->password=Hash::make($request->password);
        $admin->save();
        }catch(Exception $exception){
            dd($exception);
        }
        return redirect()->route('profile.admin');
    }
    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect()->route('admin.login');

    }


}
