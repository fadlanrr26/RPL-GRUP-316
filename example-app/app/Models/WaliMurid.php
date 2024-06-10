<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaliMurid extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'id_anak'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function students(){
        return $this->belongsTo(Student::class, 'id_anak');
    }

     public function administrasi(){
        return $this->hasMany(Administrasi::class, 'waliMuridId');
    }

    public function konsultasi(){
        return $this->hasMany(Konsultasi::class, 'waliMuridId');
    }

    public function feedback(){
        return $this->hasMany(Feedback::class, 'waliMuridId');
    }
}
