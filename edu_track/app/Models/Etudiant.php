<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Etudiant extends Model
{
    use HasFactory;

    public $fillable = ['user', 'email', 'nom', 'prenom', 'cin', 'dateN', 'telephone', 'civilite', 'nationnalite', 'gouvernorat', 'password', 'path_image'];

    protected function generatepassword()
    {
        $password = Str::random(10);
        return $password;
    }
}

