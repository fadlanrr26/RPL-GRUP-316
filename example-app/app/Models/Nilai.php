<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = ['student_id', 'mata_pelajaran_id', 'nilai'];
=======
    protected $fillable = ['student_id', 'mata_pelajaran_id', 'nilai', 'semester', 'tahunAjaran'];
>>>>>>> origin/Damario

    public function student(){
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function mapel(){
        return $this->belongsTo(MataPelajaran::class, 'mata_pelajaran_id');
    }
}
