<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Cours;
use App\Models\Departement;
use App\Models\Enseignant;
use App\Models\Etudiant;
use App\Models\TeacherClassroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class EnseignantController extends Controller
{
    public function index()
    {
        $admin= Auth::guard('admin')->user();
        $departements = Departement::all();
        $classes = Classe::all();
        return view('Admin.enseignant.ajout', ['departements' => $departements, 'classes' => $classes,'admin'=>$admin]);
    }

    public function show()
    {
        $admin= Auth::guard('admin')->user();
        $enseignants = Enseignant::all();
        return view('Admin.enseignant.consulter', ['enseignants' => $enseignants,'admin'=>$admin]);
    }

    public function detail($id)
    {
        $departements = Departement::all();
        $classes = Classe::all();
        $enseignant = Enseignant::find($id);
        return view('Admin.enseignant.ajout', ['departements' => $departements, 'classes' => $classes, 'enseignant' => $enseignant]);

    }

    public function showDashboard()
    {
        $id = Auth::guard('enseignant')->user()->id;
        $enseignants = Enseignant::findOrFail($id);

        return view('Enseignant.Dashboard', ['enseignants' => $enseignants]);
    }

    public function showCours()
    {
        $id = Auth::guard('enseignant')->user()->id;
        $enseignants = Auth::guard('enseignant')->user();
        $cours = Cours::where('ens_id', $id)->get();
        return view('Enseignant.cours.liste', ['cours' => $cours,'enseignants'=>$enseignants]);
    }

    public function showCour($id)
    {
        $cour = Cours::find($id);
        $file = public_path() . '/' . $cour->path;
        $ext = $cour->extension;
        switch ($ext) {
            case ('docx'):
                return response()->file($file, ['Content-Type' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document']);
                break;
            case 'pdf':
                return response()->file($file, ['Content-Type' => 'application/pdf']);
                break;
            case 'png':
            case 'PNG':
                return response()->file($file, ['Content-Type' => 'image/png']);
                break;
            case 'jpeg':
            case 'JPG':
            case 'JPEG':
            case 'jpg':
                return response()->file($file, ['Content-Type' => 'image/jpg']);
                break;
            default:
                $cours = Cours::all();
                return view('Enseignant.cours.liste', ['cours' => $cours]);
        }

    }

    public function uploadCours()
    {
        $enseignants = Auth::guard('enseignant')->user();
        $departements = Departement::all();
        $classes = Classe::all();
        return view('Enseignant.cours.ajout', ['departements' => $departements, 'classes' => $classes,'enseignants'=>$enseignants]);
    }

    public function showEtudiant()
    {
        $nombreEtudiants = Etudiant::where('is_accepted', 1)->count();
        $id = Auth::guard('enseignant')->user()->id;
        $enseignants = Enseignant::findOrFail($id);
        $etudiants = Etudiant::all();
        return view('Enseignant.etudiant.liste', ['enseignants' => $enseignants, 'etudiants' => $etudiants, 'nombreEtudiants' => $nombreEtudiants]);
    }

    public function showClasses()
    {
        $id = Auth::guard('enseignant')->user()->id;
        $enseignants = Enseignant::findOrFail($id);
        $etudiants = Etudiant::all();
        return view('Enseignant.classes.liste', ['enseignants' => $enseignants, 'etudiants' => $etudiants]);
    }

    public function uploadCourss(Request $request)
    {
        try {
            $enseignant = Auth::guard('enseignant')->user();
            $path = $enseignant->nom;
            $originalName = $request->file('fileUpload')->getClientOriginalName();
            $extension = $request->file('fileUpload')->getClientOriginalExtension();
            $data = $this->createFolders($request->class_id, $path);
            $name = time() . '_' . $request->file('fileUpload')->getClientOriginalName();
            $request->file('fileUpload')->move(public_path() . '/' . $data, $name);
            $cours = new Cours();
            $cours->path = $data . '/' . $name;
            $cours->nom = $originalName;
            $cours->extension = $extension;
            $cours->ens_id = $enseignant->id;
            $cours->classe_id = $request->class_id;
            $cours->save();

            event(new \App\Events\TestNotification('This is testing data'));
            return redirect()->route('enseignant.cours');
        } catch (Exception $exception) {
            dd($exception);
        }
    }

    public function store(Request $request)
    {
        $name = time() . '_' . $request->file('fileUpload')->getClientOriginalName();
        $request->file('fileUpload')->move('images/enseignant/', $name);
        if ($request->enseignant_id == '-1') {
            $enseignant = new Enseignant();
        } else {
            $enseignant = Enseignant::findOrFail($request->enseignant_id);
        }
        $enseignant->path = "images/enseignant/" . $name;
        $enseignant->nom = $request->nom;
        $enseignant->prenom = $request->prenom;
        $enseignant->cin = $request->cin;
        $enseignant->dateN = $request->dateN;
        $enseignant->telephone = $request->telephone;
        $enseignant->civilite = $request->civilite;
        $enseignant->email = $request->email;
        $enseignant->experience = $request->experiance;
        $enseignant->diplome = $request->diplome;
        $enseignant->titre = $request->titre;
        $enseignant->dateE = $request->dateE;
        if ($enseignant->save()) {
            if ($request->class_ids) {
                foreach ($request->class_ids as $class_id) {
                    $classroom = Classe::find($class_id);
                    $teacher_classroom = new TeacherClassroom();
                    $teacher_classroom->class_id = $class_id;
                    $teacher_classroom->dep_id = $classroom->dep_id;
                    $teacher_classroom->ens_id = $enseignant->id;
                    $teacher_classroom->save();
                }
            }
            Alert::success('Congrats', 'You\'ve Successfully Registered');
            return redirect()->route('enseignant.liste');
        } else {
            Alert::error('Erreur', 'Error Message');
            return redirect()->route('enseignant.ajoute');
        }
    }

    public function updateStatus(Request $request)
    {
        $this->validate($request, ['is_active' => 'required',]);
        $enseignant = Enseignant::find($request->id);
        $password = Enseignant::generatepassword();
        $enseignant->is_active = $request->is_active;
        $enseignant->password = Hash::make($password);
        if ($enseignant->update()) {
            if ($request->is_active == 0) {
                $status = 'Pas Active';
            } else {
                $status = 'Active';
                if ((!is_null($enseignant->password)) && $enseignant->is_active == 1) {
                    Mail::send('email.passwordEnseignant', ['password' => $password], function ($message) use ($enseignant) {
                        $message->to($enseignant->email);
                        $message->subject('Mot de passe');
                    });
                }
            }
            return ['response' => 'success', 'message' => 'Status updated successfully', 'id' => $request->id, 'status' => $status];
        }
    }

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect()->route('admin.login');

    }

    protected function createFolders($class_id, $path)
    {
        if (!file_exists(public_path() . "/files")) {
            mkdir(public_path() . "/files");
        }
        $departements = Departement::all();
        foreach ($departements as $dep) {
            if (!file_exists(public_path() . "/files/{$dep->nom}")) {
                mkdir(public_path() . "/files/{$dep->nom}");
                foreach ($dep->Classes as $class) {
                    if (!file_exists(public_path() . "/files/{$dep->nom}/{$class->nom}")) {
                        mkdir(public_path() . "/files/{$dep->nom}/{$class->nom}");
                    }
                }
            }
        }
        $myClass = Classe::find($class_id);
        $myDep = $myClass->Departement->nom;
        if (!file_exists(public_path() . "/files/{$myDep}/{$myClass->nom}/{$path}")) {
            $data = "files/{$myDep}/{$myClass->nom}/{$path}";
            mkdir(public_path() . "/files/{$myDep}/{$myClass->nom}/{$path}");
        } else {
            $data = "files/{$myDep}/{$myClass->nom}/{$path}";

        }
        return $data;
    }
}
