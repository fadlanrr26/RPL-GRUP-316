<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LombaStudent extends Model
{
    use HasFactory;

    protected $fillable = ['studentId', 'lombaId', 'hasil'];

    public function lomba(){
        return $this->belongsTo(Lomba::class, 'lombaId');
    }
}
