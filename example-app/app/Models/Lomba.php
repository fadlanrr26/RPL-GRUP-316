<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lomba extends Model
{
    use HasFactory;

    protected $fillable = ['judulLomba', 'deskripsiLomba', 'tingkatan'];

    public function LombaStudent(){
        return $this->hasMany(LombaStudent::class, 'lombaId');
    }
}