<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;

    public $fillable = ['id', 'nom', 'is_active'];
    public function Classes(){
        return $this->hasMany(Classe::class , 'dep_id','id');
    }
}
