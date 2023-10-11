<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherClassroom extends Model
{
    use HasFactory;

    public $fillable = ['dep_id', 'class_id', 'ens_id'];
    public function Classroom()
    {
        //For getting classroom name for x student $student->Classroom->nom_class
        return $this->belongsTo(Classe::class,'class_id','id');
    }
    public function Department()
    {
        //For getting classroom name for x student $student->Classroom->nom_class
        return $this->belongsTo(Departement::class,'dep_id','id');
    }
    public function Enseignant()
    {
        //For getting classroom name for x student $student->Classroom->nom_class
        return $this->belongsTo(Enseignant::class,'ens_id','id');
    }
}
