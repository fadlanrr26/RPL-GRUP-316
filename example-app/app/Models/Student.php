<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'level', 'class', 'entry_date'];

    public function nilai(){
        return $this->hasMany(Nilai::class, 'student_id');
    }
}
