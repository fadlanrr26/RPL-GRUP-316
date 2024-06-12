<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    use HasFactory;
<<<<<<< HEAD
=======

    protected $guarded = ['id'];

    public function guru(){
        return $this->belongsTo(Guru::class, 'guruId');
    }

    public function walimurid(){
        return $this->belongsTo(WaliMurid::class, 'waliMuridId');
    }

    public function student(){
        return $this->belongsTo(Student::class, 'studentId');
    }
>>>>>>> origin/Damario
}
