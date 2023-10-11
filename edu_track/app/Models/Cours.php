<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    protected $table='courss';
    use HasFactory;

    public $fillable = ['nom','extension','path','ens_id','classe_id'];
    public function Enseignant(){
        return $this->belongsTo(Enseignant::class , 'ens_id','id');
    }
    public function classe(){
        return $this->belongsTo(Classe::class , 'classe_id','id');
    }
}
