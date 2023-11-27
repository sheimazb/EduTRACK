<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Departement;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClasseController extends Controller
{
    public function index()
    {
        $departement = Departement::all();
        $classes = Classe::all();
        $admin= Auth::guard('admin')->user();
        return view('Admin.Classe.liste', compact('departement', 'classes','admin'));
    }

    public function store(Request $request)
    {
        try {
            $classe = new Classe();
            $classe->nom = $request->nom;
            $classe->dep_id = $request->dep_id;
            $classe->save();
            return redirect()->route('classes.liste')->with('success', 'class bien ajouté');
        } catch (Exception $exception) {
            dd($exception);
        }
    }

}
