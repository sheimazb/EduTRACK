<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    public $fillable = ['id', 'nom','dep_id','is_active'];

    public function Departement(){
        return $this->belongsTo(Departement::class , 'dep_id','id');
    }
}
