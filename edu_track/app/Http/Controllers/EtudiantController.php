<?php

namespace App\Http\Controllers;

use App\Http\Requests\EtudiantRequest;
use App\Models\Classe;
use App\Models\Cours;
use App\Models\Departement;
use App\Models\Etudiant;
use App\Models\StudentClassroom;
use App\Models\VerifyEmail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use JetBrains\PhpStorm\Deprecated;
use RealRashid\SweetAlert\Facades\Alert;

class EtudiantController extends Controller
{
    public function index()
    {
        $admin= Auth::guard('admin')->user();
        $etudiants = Etudiant::where('verified',1)->where('is_accepted',0)->get();
        return view('Admin.etudiant.listeAttente',['etudiants'=>$etudiants, 'admin'=>$admin]);
    }
    public function updateStatus(Request $request)
    {
        $this->validate($request, [
            'is_accepted' => 'required',
        ]);
        $student = Etudiant::find($request->id);
        $student->is_accepted = $request->is_accepted;
        if ($student->update()) {
            if ($request->is_accepted == 0) {
                $status = 'En attente';
            } else {
                $status = 'Accepté';

                if ((is_null($student->password)) && $student->is_accepted == 1) {
                    $this->sendPassword($student);
                }

            }
            return ['response' => 'success', 'message' => 'Status updated successfully', 'id' => $request->id, 'status' => $status];
        }
    }
    public function sendPassword($etudiant)
    {
        $password = Etudiant::generatepassword();
        $student = Etudiant::find($etudiant->id);
        $student->password = Hash::make($password); //crypte password Hash::make($params)
        $student->update();
        // Send the verification email (you may have a separate email sending logic)
        // For simplicity, let's assume you have a Mail::to() method that sends the email
        Mail::send('email.passwordEtudiant', ['password' => $password], function ($message) use ($student) {
            $message->to($student->email);
            $message->subject('Mot de passe');
        });
    }
    public function show()
    {
        $admin= Auth::guard('admin')->user();
        $etudiants = Etudiant::where('is_accepted',1)->get();
        return view('Admin.etudiant.EtudiantAccepte',['etudiants'=>$etudiants, 'admin'=>$admin]);
    }

    public function update($id)
    {
        $etudiant=Etudiant::findOrFail($id);

        return view('Admin.etudiant.modifierEtudiant',['etudiant'=>$etudiant]);
    }

    public function login()
    {
        return view('Auth.LoginEtudiant');
    }

    public function signIN2()
    {
        $departements= Departement::all();
        $classes=Classe::all();
        return view('Auth.register',['departements'=>$departements,'$classes'=>$classes]);
    }

    function verify($token)
    {
        $verifyUser = verifyemail::where('token', $token)->first();
        $message = 'Sorry your email cannot be identified.';
        if (!is_null($verifyUser)) {
            $user = $verifyUser->user;
            if (!$user->verified) {
                $verifyUser->user->verified = 1;
                $verifyUser->user->save();
                $message = "Your e-mail is verified. You can now login.";
            } else {
                $message = "Your e-mail is already verified. You can now login.";
            }
        }
        return redirect()->route('admin.login')->with('message', $message);
    }

    public function create(EtudiantRequest $request)
    {
        try {
            $user = new Etudiant();
            $user->user = $request->user;
            $user->email = $request->email;
            $user->nom = $request->nom;
            $user->prenom = $request->prenom;
            $user->cin = $request->cin;
            $user->telephone = $request->telephone;
            $user->dateN = $request->dateN;
            $user->civilite = $request->civilite;
            $user->nationnalite = $request->nationnalite;
            $user->gouvernorat = $request->gouvernorat;
            $user->save();
            if ($user->save()) {
            if ($request->class_ids) {
                foreach ($request->class_ids as $class_id) {

                    $classroom = Classe::find($class_id);
                    $etudiant_classroom = new StudentClassroom();
                    $etudiant_classroom->class_id = $class_id;
                    $etudiant_classroom->dep_id = $classroom->dep_id;
                    $etudiant_classroom->etudiant_id = $user->id;
                    $etudiant_classroom->save();

                    $this->genrateToken($user->id);
                    return redirect()->route('admin.login');
                }
            }

            }
        } catch (Exception $exception) {
            dd($exception);
        }
    }
    //formulaire de pré-inscription
    public function genrateToken($id)
    {
        $token = VerifyEmail::generateToken();
        $user = Etudiant::find($id);
        // Create a record in the verified_emails table with the generated token and user_id
        $createToken = new VerifyEmail();
        $createToken->user_id = $id;
        $createToken->token = $token;
        $createToken->save();
        Mail::send('email.emailVerificationEmail', ['token' => $token], function ($message) use ($user) {
            $message->to($user->email);
            $message->subject('Email Verification Mail');
        });
        Alert::success('Congrats', 'You\'ve Successfully Registered');
    }

    public function tableau()
    {
        return view('Etudiant.dashboard');
    }
    public function showCours()
    {
        $cours = Cours::all();

        return view('Etudiant.Cours.liste', ['cours' => $cours]);
    }
    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect()->route('admin.login');

    }
}
