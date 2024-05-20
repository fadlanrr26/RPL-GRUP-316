<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Nilai;
use App\Models\Tugas;
use App\Models\Materi;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\MataPelajaran;
use Illuminate\Support\Facades\Auth;

class GuruController extends Controller
{
    public function inputNilai() {
        $guru = auth()->user()->guru;
        $studentFormated = [];
        $students = Student::with(['nilai.mapel'])->where('level', '=', $guru->tingkatan_sekolah)->get();
        foreach($students as $student){
             $nilai = [
                'IPA' => '-',
                'IPS' => '-',
                'MATEMATIKA' => '-',
                'BAHASA INDONESIA' => '-',
                'SEJARAH' => '-',
                'BAHASA INGGRIS' => '-',
                'PENJAS' => '-',
                'BAHASA JEPANG' => '-',
                'BIMBINGAN KONSELING' => '-',
            ];
                    foreach ($student->nilai as $data) {
                $subject = $data->mapel->mata_pelajaran; // Get the subject name
                if (array_key_exists($subject, $nilai)) {
                    $nilai[$subject] = $data->nilai; // Assign the nilai to the correct subject
                }
            }
            $studentFormated[] = [
                'name' => $student->name,
                'level' => $student->level,
                'class' => $student->class,
                'nilaiMapel' => $nilai,
            ];
        }
        // dd($studentFormated);
        $mataPelajaran = MataPelajaran::where('class', 'I')->get();

        return view('guru.inputNilai', compact('studentFormated', 'students', 'mataPelajaran'));
    }

    public function storeNilai(Request $request) {
        try{
            $request->validate([
                "studentId" => 'required',
                "mataPelajaran" => 'required',
                "nilai" => 'required'
            ]);
            $student = Student::where('id', $request->studentId)->first();
            $mapel = MataPelajaran::where('mata_pelajaran', $request->mataPelajaran)->where('class', $student->class)->first();
            $cekNilai = Nilai::where('student_id', $request->studentId)->where('mata_pelajaran_id', $mapel->id)->first();
            if($cekNilai){
                $cekNilai->update(['nilai' => $request->nilai]);
            }else{
                Nilai::create([
                    "student_id" => $request->studentId,
                    "mata_pelajaran_id" => $mapel->id,
                    "nilai" => $request->nilai,
                ]);
            }
            
            return redirect()->back()->with('message', 'Berhasil menginput nilai');
        } catch(\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function inputMateri(){
        $mataPelajaran = MataPelajaran::where('class', 'I')->get();

        if(auth()->user()->guru->tingkatan_sekolah == "SD"){
            $materi = Materi::whereIn('kelas', ['I', 'II', 'III', 'IV', 'V', 'VI'])->get();
        } elseif(auth()->user()->guru->tingkatan_sekolah == "SMP"){
            $materi = Materi::whereIn('kelas', ['VII', 'VIII', 'IX'])->get();
        } elseif(auth()->user()->guru->tingkatan_sekolah == "SMA"){
            $materi = Materi::whereIn('kelas', ['X', 'XI', 'XII'])->get();
        }

        return view('guru.inputMateri', compact('mataPelajaran', 'materi'));
    }

    public function storeMateri(Request $request){
        try{
            $request->validate([
                'class' => 'required|string',
                'mataPelajaran' => 'required|string',
                'judul' => 'required|string',
                'deskripsi' => 'required|string',
            ]);

            $mapel = MataPelajaran::where('mata_pelajaran', $request->mataPelajaran)->where('class', $request->class)->first();
            Materi::create([
                'mapel_id' => $mapel->id,
                'kelas' => $request->class,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
            ]);

            return redirect()->back()->with('message', 'Berhasil menginput materi');
        }catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updateMateri(Request $request, string $id){
        try{
            $materi = Materi::find($id);

            $request->validate([
                'class' => 'required|string',
                'mataPelajaran' => 'required|string',
                'judul' => 'required|string',
                'deskripsi' => 'required|string',
            ]);
            
            $mapel = MataPelajaran::where('mata_pelajaran', $request->mataPelajaran)->where('class', $request->class)->first();
            $materi->update([
                'mapel_id' => $mapel->id,
                'kelas' => $request->class,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
            ]);

            return redirect()->back()->with('message',"Materi berhasil diubah");
        }catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function deleteMateri(string $id){
        try{
            $materi = Materi::find($id);
            $materi->delete();

            return redirect()->back()->with('message', 'Berhasil menghapus materi');
        } catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    
    public function inputTugas(){
        $mataPelajaran = MataPelajaran::where('class', 'I')->get();

        if(auth()->user()->guru->tingkatan_sekolah == "SD"){
            $tugas = Tugas::whereIn('kelas', ['I', 'II', 'III', 'IV', 'V', 'VI'])->get();
        } elseif(auth()->user()->guru->tingkatan_sekolah == "SMP"){
            $tugas = Tugas::whereIn('kelas', ['VII', 'VIII', 'IX'])->get();
        } elseif(auth()->user()->guru->tingkatan_sekolah == "SMA"){
            $tugas = Tugas::whereIn('kelas', ['X', 'XI', 'XII'])->get();
        }
        return view('guru.inputTugas', compact('mataPelajaran', 'tugas'));
    }

    public function storeTugas(Request $request){
         try{
            $request->validate([
                'class' => 'required|string',
                'mataPelajaran' => 'required|string',
                'judul' => 'required|string',
                'tugas' => 'required|string',
            ]);

            $mapel = MataPelajaran::where('mata_pelajaran', $request->mataPelajaran)->where('class', $request->class)->first();
            Tugas::create([
                'mapel_id' => $mapel->id,
                'kelas' => $request->class,
                'judul' => $request->judul,
                'tugas' => $request->tugas,
            ]);

            return redirect()->back()->with('message', 'Berhasil menginput tugas');
        }catch(\Exception $e){
            dd($e->getMessage());
            return redirect()->back()->with('error', 'e');
        }
    }

    public function updateTugas(Request $request, string $id){
         try{
            $tugas = Tugas::find($id);

            $request->validate([
                'class' => 'required|string',
                'mataPelajaran' => 'required|string',
                'judul' => 'required|string',
                'tugas' => 'required|string',
            ]);
            
            $mapel = MataPelajaran::where('mata_pelajaran', $request->mataPelajaran)->where('class', $request->class)->first();
            $tugas->update([
                'mapel_id' => $mapel->id,
                'kelas' => $request->class,
                'judul' => $request->judul,
                'tugas' => $request->tugas,
            ]);

            return redirect()->back()->with('message',"Tugas berhasil diubah");
        }catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function deleteTugas(string $id){
        try{
            $tugas = Tugas::find($id);
            $tugas->delete();

            return redirect()->back()->with('message', 'Berhasil menghapus tugas');
        } catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function jadwalKonsultasi(){
        return view('guru.konsultasi.jadwal');

    }

    public function feedbackKonsultasi(){
        return view('guru.konsultasi.feedback');
    }

    public function ekstrakurikuler(){
        return view('guru.ekstrakurikuler');
    }

    public function administrasi(){
        return view('guru.administrasi.index');
    }
}
