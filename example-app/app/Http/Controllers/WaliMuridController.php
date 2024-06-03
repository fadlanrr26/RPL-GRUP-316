<?php

namespace App\Http\Controllers;

use PDO;
use Carbon\Carbon;
use App\Models\Guru;
use App\Models\User;
use App\Models\Lomba;
use App\Models\Tugas;
use App\Models\Materi;
use App\Models\Student;
use App\Models\Feedback;
use App\Models\Kehadiran;
use App\Models\WaliMurid;
use App\Models\Konsultasi;
use App\Models\Administrasi;
use App\Models\LombaStudent;
use Illuminate\Http\Request;
use App\Models\Ekstrakurikuler;
use App\Models\EkstrakurikulerStudent;

class WaliMuridController extends Controller
{
    public function index(){
        $student = Student::find(auth()->user()->walimurid->id_anak);
        $lombaStudent = LombaStudent::where("studentId", $student->id)->get();
        $ekstraStudent = EkstrakurikulerStudent::where("studentId", $student->id)->get();
        $nilai = [
            'IPA' => 0,
            'IPS' => 0,
            'MATEMATIKA' => 0,
            'BAHASA INDONESIA' => 0,
            'SEJARAH' => 0,
            'BAHASA INGGRIS' => 0,
            'PENJAS' => 0,
            'BAHASA JEPANG' => 0,
            'BIMBINGAN KONSELING' => 0,
        ];
        $nilai2 = [
            'IPA' => 0,
            'IPS' => 0,
            'MATEMATIKA' => 0,
            'BAHASA INDONESIA' => 0,
            'SEJARAH' => 0,
            'BAHASA INGGRIS' => 0,
            'PENJAS' => 0,
            'BAHASA JEPANG' => 0,
            'BIMBINGAN KONSELING' => 0,
        ];
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
        $nilaiData = [];
        foreach ($nilai as $key => $value) {
            $nilaiData[] = ['x' => $key, 'y' => $value];
        }

        $nilai2Data = [];
        foreach ($nilai2 as $key => $value) {
            $nilai2Data[] = ['x' => $key, 'y' => $value];
        }

        $nilaiJson = json_encode($nilaiData);
        $nilai2Json = json_encode($nilai2Data);

        return view('dashboardWaliMurid', compact('student', 'lombaStudent', 'ekstraStudent', 'nilaiJson', 'nilai2Json'));
    }

    public function rataNilai(Request $request){
        $student = Student::find(auth()->user()->walimurid->id_anak);
        $filter = $request->query('filter');
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
        
        return view('walimurid.rataNilai', compact('student', 'nilai', 'nilai2', 'filter'));
    }

    public function daftarKonsultasi(){
        $wali = WaliMurid::with('students')->where('user_id', auth()->user()->id)->first();
        $level = $wali->students->level;
        $gurus = Guru::with('user')->where('tingkatan_sekolah', $wali->students->level)->get();

        return view('walimurid.konsultasi.daftar', compact('gurus', 'level'));
    }

    public function formKonsultasi(string $id){
        $guruId = $id;
        $student = Student::find(auth()->user()->walimurid->id_anak);

        return view('walimurid.konsultasi.form', compact('guruId', 'student'));
    }

    public function storeKonsultasi(Request $request){
        $request->validate([
            'guruId' => 'required',
            'waliMuridId' => 'required',
            'studentId' => 'required',
            'date' => 'required',
            'topik' => 'required',
        ]);
        $konsultasiguru = Konsultasi::where('date', $request->date)->count();
        if($konsultasiguru <= 3){
            Konsultasi::create($request->all());
            return redirect()->route('daftarKonsultasi')->with('message', 'Berhasil daftar konsultasi');
        }else{
            return redirect()->back()->with('error', 'Jadwal guru sudah penuh');
        }

    }

    public function riwayatKonsultasi(){
        $konsultasis = Konsultasi::where('waliMuridId', auth()->user()->walimurid->id)->get();
        foreach ($konsultasis as $data){
            $user = User::find($data->guru->user_id);
            $data->guru = $user->name;
        }

        return view('walimurid.konsultasi.history', compact('konsultasis'));
    }

    public function feedback(){
        $wali = WaliMurid::with('students')->where('user_id', auth()->user()->id)->first();
        $level = $wali->students->level;
        $gurus = Guru::where('tingkatan_sekolah', $wali->students->level)->get();
        $feedback = Feedback::where('waliMuridId', auth()->user()->walimurid->id)->get();
        foreach($feedback as $data){
            $user = User::find($data->guru->user_id);
            $data->namaGuru = $user->name;
        }
        return view('walimurid.konsultasi.feedback', compact('gurus', 'level', 'feedback'));
    }

    public function storeFeedback(Request $request){
        $request->validate([
            'judulFeedback' => 'required',
            'guruId' => 'required',
            'feedback' => 'required',
        ]);
        
        Feedback::create([
            'waliMuridId' => auth()->user()->walimurid->id,
            'guruId' => $request->guruId,
            'judulFeedback' => $request->judulFeedback,
            'feedback' => $request->feedback,
        ]);

        return redirect()->back()->with('message', 'Berhasil submit feedback');
    }

    public function akademik(){
        $student = Student::find(auth()->user()->walimurid->id_anak);
        $materi = Materi::where('kelas', $student->class)->get();
        $tugas = Tugas::where('kelas', $student->class)->get();
        $ekstra = EkstrakurikulerStudent::where('studentId', $student->id)->get();
        
        return view('walimurid.akademik', compact('student', 'materi', 'tugas', 'ekstra'));
    }

    public function kehadiran(){
        $student = Student::find(auth()->user()->walimurid->id_anak);
        $kehadiran = Kehadiran::where('studentId', $student->id)->get();

        return view('walimurid.kehadiran', compact('student', 'kehadiran'));
    }
    
    public function lomba(){
        $student = Student::find(auth()->user()->walimurid->id_anak);
        $lombaAll = Lomba::where('tingkatan', $student->level)->get();
        $lomba = LombaStudent::where('studentId', $student->id)->get();    

        return view('walimurid.lomba', compact('lomba', 'lombaAll', 'student'));
    }

    public function administrasiDetail(){
        $student = Student::find(auth()->user()->walimurid->id_anak);
        $administrasi = Administrasi::where('waliMuridId', auth()->user()->id)->get();

        $administrasiMangkir1 = Administrasi::where('waliMuridId', auth()->user()->id)->where('batasWaktu', '<', Carbon::now())->where('semester', "1")->get();
        $administrasiMangkir2 = Administrasi::where('waliMuridId', auth()->user()->id)->where('batasWaktu', '<', Carbon::now())->where('semester', "2")->get();
        
        if(count($administrasiMangkir1) > 0 && count($administrasiMangkir2) > 0){
            session()->flash("warning", "Saudara". auth()->user()->name. " belum membayar SPP Semester Ganjil dan Genap Tahun Ajaran 2024/2025");
        }elseif(count($administrasiMangkir1) > 0){
            session()->flash("warning", "Saudara". auth()->user()->name. " belum membayar SPP Semester Ganjil Tahun Ajaran 2024/2025");
        }else{
            session()->flash("warning", "Saudara". auth()->user()->name. " belum membayar SPP Semester Genap Tahun Ajaran 2024/2025");
        }
        return view('walimurid.administrasi', compact('administrasi', 'student'));
    }

    public function mangkir(){
        $administrasiMangkir = Administrasi::where('waliMuridId', auth()->user()->id)->where('batasWaktu', '<', Carbon::now())->get();

        return view('walimurid.mangkir', compact('administrasiMangkir'));
    }
}
