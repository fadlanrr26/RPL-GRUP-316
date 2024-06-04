<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrasi extends Model
{
    use HasFactory;

    protected $guraded = ['id'];

    public function student(){
        return $this->belongsTo(Student::class, 'studentId');
    }
}
