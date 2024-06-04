<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'level', 'class', 'entry_date', 'NISN'];

    public function nilai(){
        return $this->hasMany(Nilai::class, 'student_id');
    }

    public function walimurid(){
        return $this->hasOne(WaliMurid::class, 'id_anak');
    }

    public function administrasi(){
        return $this->hasMany(Administrasi::class, 'studentId');
    }

    public function konsultasi(){
        return $this->hasMany(Konsultasi::class, 'studentId');
    }

    public function ekstrakurikuler(){
        return $this->hasMany(Student::class, 'studentId');
    }
}