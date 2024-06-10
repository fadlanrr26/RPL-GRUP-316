<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Nilai;
use App\Models\Tugas;
use App\Models\Materi;
use App\Models\Student;
use App\Models\Feedback;
use App\Models\WaliMurid;
use App\Models\Konsultasi;
use Illuminate\Http\Request;
use App\Models\MataPelajaran;
use App\Models\Ekstrakurikuler;
use Illuminate\Support\Facades\Auth;
use App\Models\EkstrakurikulerStudent;

class GuruController extends Controller
{
    public function index(){
        $students = Student::where('level', auth()->user()->guru->tingkatan_sekolah)->get();
        
        $kelasI = array_fill(0, 12, 0);
        $kelasII = array_fill(0, 12, 0);
        $kelasIII = array_fill(0, 12, 0);
        $kelasIV = array_fill(0, 12, 0);
        $kelasV = array_fill(0, 12, 0);
        $kelasVI = array_fill(0, 12, 0);
        $kelasVII = array_fill(0, 12, 0);
        $kelasVIII = array_fill(0, 12, 0);
        $kelasIX = array_fill(0, 12, 0);
        $kelasX = array_fill(0, 12, 0); 
        $kelasXI = array_fill(0, 12, 0);
        $kelasXII = array_fill(0, 12, 0);
        
        $nilaiX1 = 0; 
        $nilaiX2 = 0; 
        $countKelasX = Student::where('level', "SMA")->where('class', 'X')->count();
        $nilaiXI1 = 0;
        $nilaiXI2 = 0;
        $countKelasXI = Student::where('level', "SMA")->where('class', 'XI')->count();
        $nilaiXII1 = 0;
        $nilaiXII2 = 0;
        $countKelasXII = Student::where('level', "SMA")->where('class', 'XII')->count();

        $nilaiVII1 = 0; 
        $nilaiVII2 = 0; 
        $countKelasVII = Student::where('level', "SMP")->where('class', 'VII')->count();
        $nilaiVIII1 = 0;
        $nilaiVIII2 = 0;
        $countKelasVIII = Student::where('level', "SMP")->where('class', 'VIII')->count();
        $nilaiIX1 = 0;
        $nilaiIX2 = 0;
        $countKelasIX = Student::where('level', "SMP")->where('class', 'IX')->count();

        $nilaiI1 = 0; 
        $nilaiI2 = 0; 
        $countKelasI = Student::where('level', "SD")->where('class', 'I')->count();
        $nilaiII1 = 0;
        $nilaiII2 = 0;
        $countKelasII = Student::where('level', "SD")->where('class', 'II')->count();
        $nilaiIII1 = 0;
        $nilaiIII2 = 0;
        $countKelasIII = Student::where('level', "SD")->where('class', 'III')->count();
        $nilaiIV1 = 0; 
        $nilaiIV2 = 0; 
        $countKelasIV = Student::where('level', "SD")->where('class', 'IV')->count();
        $nilaiV1 = 0;
        $nilaiV2 = 0;
        $countKelasV = Student::where('level', "SD")->where('class', 'V')->count();
        $nilaiVI1 = 0;
        $nilaiVI2 = 0;
        $countKelasVI = Student::where('level', "SD")->where('class', 'VI')->count();


        foreach ($students as $data) {
            foreach ($data->konsultasi as $konsultasi) {
                if(auth()->user()->guru->tingkatan_sekolah == "SD"){
                    if($konsultasi->guruId == auth()->user()->guru->id){
                        $month = (int) date('m', strtotime($konsultasi->date));
                        $index = $month - 1;
                        if ($data->class == "I") {
                            $kelasI[$index]++;
                        } elseif ($data->class == "II") {
                            $kelasII[$index]++;
                        } elseif ($data->class == "III") {
                            $kelasIII[$index]++;
                        } elseif ($data->class == "IV") {
                            $kelasIV[$index]++;
                        } elseif ($data->class == "V") {
                            $kelasV[$index]++;
                        }elseif ($data->class == "VI") {
                            $kelasVI[$index]++;
                        }
                    }
                }
                if(auth()->user()->guru->tingkatan_sekolah == "SMP"){
                    if($konsultasi->guruId == auth()->user()->guru->id){
                        $month = (int) date('m', strtotime($konsultasi->date));
                        $index = $month - 1;
                        if ($data->class == "VII") {
                            $kelasVII[$index]++;
                        } elseif ($data->class == "VIII") {
                            $kelasVIII[$index]++;
                        } elseif ($data->class == "IX") {
                            $kelasIX[$index]++;
                        }
                    }
                }
                if(auth()->user()->guru->tingkatan_sekolah == "SMA"){
                    if($konsultasi->guruId == auth()->user()->guru->id){
                        $month = (int) date('m', strtotime($konsultasi->date));
                        $index = $month - 1;
                        if ($data->class == "X") {
                            $kelasX[$index]++;
                        } elseif ($data->class == "XI") {
                            $kelasXI[$index]++;
                        } elseif ($data->class == "XII") {
                            $kelasXII[$index]++;
                        }
                    }
                }
            }
            $nilai1 = 0;
            $nilai2 = 0;
            $nilai1 = intval(Nilai::where("student_id", $data->id)->where('semester', '1')->sum('nilai'));
            $nilai2 = intval(Nilai::where("student_id", $data->id)->where('semester', '2')->sum('nilai'));
            $nilai1 = $nilai1 / 9;
            $nilai2 = $nilai2 / 9;
            if($data->class == "X"){
                $nilaiX1 += $nilai1;
                $nilaiX2 += $nilai2;
            } elseif($data->class == "XI"){
                $nilaiXI1 += $nilai1;
                $nilaiXI2 += $nilai2;
            } elseif($data->class == "XII"){
                $nilaiXII1 += $nilai1;
                $nilaiXII2 += $nilai2;
            }
            if($data->class == "VII"){
                $nilaiVII1 += $nilai1;
                $nilaiVII2 += $nilai2;
            } elseif($data->class == "VIII"){
                $nilaiVIII1 += $nilai1;
                $nilaiVIII2 += $nilai2;
            } elseif($data->class == "IX"){
                $nilaiIX1 += $nilai1;
                $nilaiIX2 += $nilai2;
            }
            if($data->class == "I"){
                $nilaiI1 += $nilai1;
                $nilaiI2 += $nilai2;
            } elseif($data->class == "II"){
                $nilaiII1 += $nilai1;
                $nilaiII2 += $nilai2;
            } elseif($data->class == "III"){
                $nilaiIII1 += $nilai1;
                $nilaiIII2 += $nilai2;
            }
            if($data->class == "IV"){
                $nilaiIV1 += $nilai1;
                $nilaiIV2 += $nilai2;
            } elseif($data->class == "V"){
                $nilaiV1 += $nilai1;
                $nilaiV2 += $nilai2;
            } elseif($data->class == "VI"){
                $nilaiVI1 += $nilai1;
                $nilaiVI2 += $nilai2;
            }
        }

        if(auth()->user()->guru->tingkatan_sekolah == "SMA"){
            $nilaiX1 = intval($nilaiX1 / $countKelasX);
            $nilaiX2 = intval($nilaiX2 / $countKelasX);
            $nilaiXI1 = intval($nilaiXI1 / $countKelasXI);
            $nilaiXI2 = intval($nilaiXI2 / $countKelasXI);
            $nilaiXII1 = intval($nilaiXII1 / $countKelasXII);
            $nilaiXII2 = intval($nilaiXII2 / $countKelasXII);
            $semester1 = [
                "Semester 1 (Kelas X)" => $nilaiX1,
                "Semester 1 (Kelas XI)" => $nilaiXI1,
                "Semester 1 (Kelas XII)" => $nilaiXII1,
            ];
            $semester2 = [
                "Semester 2 (Kelas X)" => $nilaiX2,
                "Semester 2 (Kelas XI)" => $nilaiXI2,
                "Semester 2 (Kelas XII)" => $nilaiXII2,
            ];

            $semester1Data = [];
            foreach ($semester1 as $key => $value) {
                $semester1Data[] = ['x' => $key, 'y' => $value];
            }

            $semester2Data = [];
            foreach ($semester2 as $key => $value) {
                $semester2Data[] = ['x' => $key, 'y' => $value];
            }

            $semester1Json = json_encode($semester1Data);
            $semester2Json = json_encode($semester2Data);


            $kelasX = json_encode($kelasX);
            $kelasXI = json_encode($kelasXI);
            $kelasXII = json_encode($kelasXII);
            return view('dashboard', compact('kelasX', 'kelasXI', 'kelasXII', 'semester1Json', 'semester2Json'));
        } elseif(auth()->user()->guru->tingkatan_sekolah == "SMP"){
            $nilaiVII1 = intval($nilaiVII1 / $countKelasVII);
            $nilaiVII2 = intval($nilaiVII2 / $countKelasVII);
            $nilaiVIII1 = intval($nilaiVIII1 / $countKelasVIII);
            $nilaiVIII2 = intval($nilaiVIII2 / $countKelasVIII);
            $nilaiIX1 = intval($nilaiIX1 / $countKelasIX);
            $nilaiIX2 = intval($nilaiIX2 / $countKelasIX);
            $semester1 = [
                "Semester 1 (Kelas VII)" => $nilaiVII1,
                "Semester 1 (Kelas VIII)" => $nilaiVIII1,
                "Semester 1 (Kelas IX)" => $nilaiIX1,
            ];
            $semester2 = [
                "Semester 2 (Kelas VII)" => $nilaiVII2,
                "Semester 2 (Kelas VIII)" => $nilaiVIII2,
                "Semester 2 (Kelas IX)" => $nilaiIX2,
            ];
             $semester1Data = [];
            foreach ($semester1 as $key => $value) {
                $semester1Data[] = ['x' => $key, 'y' => $value];
            }

            $semester2Data = [];
            foreach ($semester2 as $key => $value) {
                $semester2Data[] = ['x' => $key, 'y' => $value];
            }

            $semester1Json = json_encode($semester1Data);
            $semester2Json = json_encode($semester2Data);
            $kelasVII = json_encode($kelasVII);
            $kelasVIII = json_encode($kelasVIII);
            $kelasIX = json_encode($kelasIX);
            return view('dashboard', compact('kelasVII', 'kelasVIII', 'kelasIX', 'semester1Json', 'semester2Json'));
        } elseif(auth()->user()->guru->tingkatan_sekolah == "SD"){
            $nilaiI1 = intval($nilaiI1 / $countKelasI);
            $nilaiI2 = intval($nilaiI2 / $countKelasI);
            $nilaiII1 = intval($nilaiII1 / $countKelasII);
            $nilaiII2 = intval($nilaiII2 / $countKelasII);
            $nilaiIII1 = intval($nilaiIII1 / $countKelasIII);
            $nilaiIII2 = intval($nilaiIII2 / $countKelasIII);
            $nilaiIV1 = intval($nilaiIV1 / $countKelasIV);
            $nilaiIV2 = intval($nilaiIV2 / $countKelasIV);
            $nilaiV1 = intval($nilaiV1 / $countKelasV);
            $nilaiV2 = intval($nilaiV2 / $countKelasV);
            $nilaiVI1 = intval($nilaiVI1 / $countKelasVI);
            $nilaiVI2 = intval($nilaiVI2 / $countKelasVI);
            $semester1 = [
                "Semester 1 (Kelas I)" => $nilaiI1,
                "Semester 1 (Kelas II)" => $nilaiII1,
                "Semester 1 (Kelas III)" => $nilaiIII1,
                "Semester 1 (Kelas IV)" => $nilaiIV1,
                "Semester 1 (Kelas V)" => $nilaiV1,
                "Semester 1 (Kelas VI)" => $nilaiVI1,
            ];
            $semester2 = [
                "Semester 2 (Kelas I)" => $nilaiI2,
                "Semester 2 (Kelas II)" => $nilaiII2,
                "Semester 2 (Kelas III)" => $nilaiIII2,
                "Semester 2 (Kelas IV)" => $nilaiIV2,
                "Semester 2 (Kelas V)" => $nilaiV2,
                "Semester 2 (Kelas VI)" => $nilaiVII2,
            ];
            $semester1Data = [];
            foreach ($semester1 as $key => $value) {
                $semester1Data[] = ['x' => $key, 'y' => $value];
            }

            $semester2Data = [];
            foreach ($semester2 as $key => $value) {
                $semester2Data[] = ['x' => $key, 'y' => $value];
            }

            $semester1Json = json_encode($semester1Data);
            $semester2Json = json_encode($semester2Data);
            $kelasI = json_encode($kelasI);
            $kelasII = json_encode($kelasII);
            $kelasIII = json_encode($kelasIII);
            $kelasIV = json_encode($kelasIV);
            $kelasV = json_encode($kelasV);
            $kelasVI = json_encode($kelasVI);
            return view('dashboard', compact('kelasI', 'kelasII', 'kelasIII', 'kelasIV', 'kelasV', 'kelasVI', 'semester1Json', 'semester2Json'));
        }
    }
    
    public function inputNilai(Request $request) {
        $guru = auth()->user()->guru;
        $studentFormated = [];
        $filter = $request->query('filter');
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
            $nilai2 = [
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
            if($filter == "2024/2025"){
                foreach ($student->nilai as $data) {
                    if($data->semester == 1){
                        $subject = $data->mapel->mata_pelajaran;
                        if (array_key_exists($subject, $nilai)) {
                            $nilai[$subject] = $data->nilai; 
                        }
                    }elseif($data->semester == 2){
                        $subject = $data->mapel->mata_pelajaran;
                        if (array_key_exists($subject, $nilai2)) {
                            $nilai2[$subject] = $data->nilai; 
                        }
                    }
                }
            }elseif($filter == '2024/2025-1'){
                foreach ($student->nilai as $data) {
                    if($data->semester == 1){
                        $subject = $data->mapel->mata_pelajaran;
                        if (array_key_exists($subject, $nilai)) {
                            $nilai[$subject] = $data->nilai; 
                        }    
                    }
                }
            } elseif($filter == '2024/2025-2'){
                foreach ($student->nilai as $data) {
                    if($data->semester == 2){
                        $subject = $data->mapel->mata_pelajaran;
                        if (array_key_exists($subject, $nilai2)) {
                        $nilai2[$subject] = $data->nilai; 
                        }
                    }
                }
            }
            $studentFormated[] = [
                'name' => $student->name,
                'level' => $student->level,
                'class' => $student->class,
                'nilaiSemester1' => $nilai,
                'nilaiSemester2' => $nilai2,
            ];
        }
        $mataPelajaran = MataPelajaran::where('class', 'I')->get();

        return view('guru.inputNilai', compact('studentFormated', 'students', 'mataPelajaran', 'filter'));
    }

    public function storeNilai(Request $request) {
        try{
            $request->validate([
                "studentId" => 'required',
                "mataPelajaran" => 'required',
                "nilai" => 'required',
                "semester" => 'required'
            ]);
            $student = Student::where('id', $request->studentId)->first();
            $mapel = MataPelajaran::where('mata_pelajaran', $request->mataPelajaran)->where('class', $student->class)->first();
            $cekNilai = Nilai::where('student_id', $request->studentId)->where('mata_pelajaran_id', $mapel->id)->where('semester', $request->semester)->first();

            if($cekNilai){
                $cekNilai->update(['nilai' => $request->nilai]);
            }else{
                Nilai::create([
                    "student_id" => $request->studentId,
                    "mata_pelajaran_id" => $mapel->id,
                    "semester" => $request->semester,
                    'tahunAjaran' => '2024/2025',
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
        $konsultasi = Konsultasi::where('guruId', auth()->user()->guru->id)->get();
        foreach($konsultasi as $data){
            $wali = WaliMurid::find($data->waliMuridId);
            $data->waliMuridName = $wali->user->name;
        }

        return view('guru.konsultasi.jadwal', compact('konsultasi'));

    }

    public function feedbackKonsultasi(){
        $feedback = Feedback::where('guruId', auth()->user()->guru->id)->get();
        foreach($feedback as $data){
            $wali = WaliMurid::find($data->waliMuridId);
            $data->waliMuridName = $wali->user->name;
        }
        return view('guru.konsultasi.feedback', compact('feedback'));
    }

    public function ekstrakurikuler(){
        $ekstra = Ekstrakurikuler::where('tingkatan', auth()->user()->guru->tingkatan_sekolah)->get();
        $students = Student::where('level', auth()->user()->guru->tingkatan_sekolah)->get();
        $studentsId = Student::where('level', auth()->user()->guru->tingkatan_sekolah)->pluck('id')->toArray();
        $ekstraStudent = EkstrakurikulerStudent::whereIn('studentId', $studentsId)->get();

        return view('guru.ekstrakurikuler', compact('ekstra', 'ekstraStudent'));
    }

    public function administrasi(){
        $guru = auth()->user()->guru;
        $students = Student::with('administrasi')->where('level', '=', $guru->tingkatan_sekolah)->get();
        
        return view('guru.administrasi.index', compact('students'));
    }
}
