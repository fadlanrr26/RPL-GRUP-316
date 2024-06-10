<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EkstrakurikulerStudent extends Model
{
    use HasFactory;

    protected $fillable = ['studentId', 'ekstraId', 'nilai'];

    public function ekstrakurikuler(){
        return $this->belongsTo(Ekstrakurikuler::class, 'ekstraId');
    }

    public function student(){
        return $this->belongsTo(Student::class, 'studentId');
    }
}
