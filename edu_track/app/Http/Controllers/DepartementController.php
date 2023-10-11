<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Exception;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    public function show(){
        $departements=Departement::all();
        return view('Admin.departement.liste',['departements'=>$departements]);
    }
    public function create(Request $request){
        try{
            $department =new Departement();
            $department->nom=$request->nom;
            $department->is_active=1;
            $department->save();
            return redirect()->route('departement.liste')->with('Success','departement ajouté');
        } catch (Exception $exception) {
            dd($exception);
        }
    }
    public function statusDepartment(Request $request)
    {
        $this->validate($request, [
            'is_active' => 'required',
        ]);
        $department = Departement::find($request->id);
        $department->is_active = $request->is_active;
        if ($department->update()) {
            if ($request->is_active == 0) {
                $status = 'Pas Active';
            } else {
                $status = 'Active';
            }
            return ['response' => 'success', 'message' => 'Status updated successfully', 'id' => $request->id, 'status' => $status];
        }
    }
}
