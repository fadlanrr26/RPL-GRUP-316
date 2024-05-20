<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;

    protected $fillable = ['mapel_id', 'kelas', 'judul', 'tugas'];

    public function mapel(){
        return $this->belongsTo(MataPelajaran::class, 'mapel_id');
    }
}
