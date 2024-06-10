<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = ['waliMuridId', 'guruId', 'judulFeedback' , 'feedback'];

    public function guru(){
        return $this->belongsTo(Guru::class, 'guruId');
    }

    public function walimurid(){
        return $this->belongsTo(WaliMurid::class, 'waliMuridId');
    }

    public function student(){
        return $this->belongsTo(Student::class, 'studentId');
    }
}
