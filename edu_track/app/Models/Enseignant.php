<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Str;

class Enseignant extends Authenticatable
{
    use HasFactory;
    public $fillable = ['nom', 'prenom', 'cin', 'dateN', 'civilite', 'telephone', 'email', 'diplome', 'titre', 'experience', 'dateE', 'password', 'is_active', 'path'];
    protected $guard = 'enseignant';
    protected $guard_name = 'web';
    public static function generatepassword()
    {
        return Str::random(10);
    }

    public function TeacherClassroom()
    {
        return $this->belongsToMany(Classe::class, 'teacher_classrooms', 'ens_id', 'class_id');
    }
}
