<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = ['user_id', 'tingkatan_sekolah'];
=======
    protected $fillable = ['user_id', 'tingkatan_sekolah', 'nip'];
>>>>>>> origin/Damario

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
<<<<<<< HEAD
=======

    public function konsultasi(){
        return $this->hasMany(Konsultasi::class, 'guruId');
    }

    public function feedback(){
        return $this->hasMany(Feedback::class, 'guruId');
    }
>>>>>>> origin/Damario
}
