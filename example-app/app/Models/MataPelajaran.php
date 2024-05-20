<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    use HasFactory;

    public function materi(){
        return $this->hasMany(Materi::class, 'mapel_id');
    }

    public function tugas(){
        return $this->hasMany(Tugas::class, 'mapel_id');
    }

    public function nilai(){
        return $this->hasMany(Nilai::class, 'mata_pelajaran_id');
    }
}
