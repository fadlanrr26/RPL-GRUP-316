<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;

    protected $fillable = ['mapel_id', 'kelas', 'judul', 'deskripsi'];

    public function mapel(){
        return $this->belongsTo(MataPelajaran::class, 'mapel_id');
    }
}
