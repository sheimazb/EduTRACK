<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class VerifyEmail extends Model
{

    use HasFactory;
    protected $table = "verify_emails";
    public $fillable = [
        'user_id',
        'token'
    ];
    // protected $guarded = [];
    //Relationship with the user model
    public function user()
    {
        return $this->belongsTo(Etudiant::class, 'user_id');
    }

    public static function generateToken(){
        return Str::random(40);
    }

}
