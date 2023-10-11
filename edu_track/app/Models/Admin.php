<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable

{
    public $fillable = ['prenom', 'nom', 'email', 'password', 'path'];
    protected $guard = 'admin';

    use HasFactory;
    protected $guard_name = 'web';

}
