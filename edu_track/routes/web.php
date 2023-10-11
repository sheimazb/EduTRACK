<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',                                 [AdminController::class,'login'])->name('admin.login');
//login Admin
Route::prefix('Administration')->middleware(['guest:admin'])->group(function () {
    Route::post('/submit-form',                 [AdminController::class,'submit'])->name('submit-Form');
});
Route::prefix('Administration')->middleware('auth:admin')->group(function (){
    Route::post('/status/update',               [EtudiantController::class, 'updateStatus'])->name('update.status');
    Route::get('/Dashboard-admin',              [AdminController::class, 'show'])->name('admin.dashboard');
//edit profil admin
    Route::get('/Edit-profile',                 [AdminController::class, 'updateProfile'])->name('profile.admin');
//admin.etudiant
    Route::get('/liste-attente-etudiant',       [EtudiantController::class, 'index'])->name('liste-attente-etudiant');
    Route::get('/etudiant-accepte',             [EtudiantController::class, 'show'])->name('etudiant.accepte');
    Route::get('/etudiant-modifier/{id}',       [EtudiantController::class, 'update'])->name('etudiant.modifie');
//admin.enseignant
    Route::get('/ajout-enseignant',             [EnseignantController::class, 'index'])->name('enseignant.ajoute');
    Route::get('/show-enseignant/{id}',         [EnseignantController::class, 'detail'])->name('enseignant.show');
    Route::post('/ajout-enseignant',            [EnseignantController::class, 'store'])->name('enseignant.store');
    Route::get('/liste-enseignant',             [EnseignantController::class, 'show'])->name('enseignant.liste');
    Route::post('/status/update/enseignant',    [EnseignantController::class, 'updateStatus'])->name('update.status.enseignant');
//admin.departement
    Route::get('/liste-departement',            [DepartementController::class, 'show'])->name('departement.liste');
    Route::post('/ajout-departement',           [DepartementController::class,'create'])->name('departement.ajout');
    Route::post('/statut-departement',          [DepartementController::class, 'statusDepartment'])->name('statut.departement');
//admin.classe
    Route::get('/liste-classes',                [ClasseController::class, 'index'])->name('classes.liste');
    Route::post('/ajout-classe',                [ClasseController::class,'store'])->name('classe.ajout');
//admin.logout
    Route::get('/logout',                       [AdminController::class, 'logout'])->name('admin.logout');
});

//Tableau de bord enseignant
Route::prefix('Enseignant')->middleware(['guest:enseignant'])->group(function () {
    Route::post('/submit-form',                  [AdminController::class,'submit'])->name('submit-Form');
});
Route::prefix('Enseignant')->middleware('auth:enseignant')->group(function (){
    Route::get('/Dashboard-enseignant',             [EnseignantController::class,'showDashboard'])->name('enseignant.dashboard');
    Route::get('/liste-cours',                      [EnseignantController::class,'showCours'])->name('enseignant.cours');
    Route::get('/ajout-cours',                      [EnseignantController::class,'uploadCours'])->name('enseignant.ajout.cours');
    Route::get('/liste-etudiants',                  [EnseignantController::class,'showEtudiant'])->name('enseignant.liste.etudiant');
    Route::get('/liste-classe',                     [EnseignantController::class,'showClasses'])->name('enseignant.liste.classes');
    Route::post('/upload/cours',                    [EnseignantController::class,'uploadCourss'])->name('upload.cours');
    Route::get('/cour/{id}',                        [EnseignantController::class,'showCour'])->name('enseignant.cour');
    Route::get('/logout',                           [EnseignantController::class, 'logout'])->name('enseignant.logout');

});
//Tableau de bord Etudiant
Route::post('/inscrit',                         [EtudiantController::class,'create'])->name('etudiant.inscrit');
Route::get('/formulaire-préInscription',        [EtudiantController::class,'signIN2'])->name('etudiant.signIN');
//user verification mail
Route::get('/user-verify/{token}',              [EtudiantController::class, 'verify'])->name('user.verify');
//tocken
Route::get('token',                             [EtudiantController::class,'genrateTock'])->name('Token');
Route::get('/Dashboard-etudiant',               [EtudiantController::class,'tableau'])->name('etudiant.dashboard');
