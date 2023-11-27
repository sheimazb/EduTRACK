<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Str;

class Etudiant extends Authenticatable
{
    use HasFactory;

    public $fillable = ['user', 'email', 'nom', 'prenom', 'cin', 'dateN', 'telephone', 'civilite', 'nationnalite', 'gouvernorat', 'password', 'path_image'];
    protected $guard = 'etudiant';
    protected function generatepassword()
    {
        $password = Str::random(10);
        return $password;
    }
}

