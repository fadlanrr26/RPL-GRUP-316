<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\User;
use App\Models\Student;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\WaliMurid;
use App\Models\MataPelajaran;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
=======
use DateTime;
use App\Models\Guru;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Lomba;
use App\Models\Nilai;
use App\Models\Student;
use App\Models\Kehadiran;
use App\Models\WaliMurid;
use Faker\Factory as Faker;
use App\Models\Administrasi;
use App\Models\LombaStudent;
use App\Models\MataPelajaran;
use App\Models\Ekstrakurikuler;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Models\EkstrakurikulerStudent;
>>>>>>> origin/Damario

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

<<<<<<< HEAD
        Student::factory()->count(50)->create();
=======
        $faker = Faker::create('id_ID');
        $levels = [
            'SD' => ['I', 'II', 'III', 'IV', 'V', 'VI'],
            'SMP' => ['VII', 'VIII', 'IX'],
            'SMA' => ['X', 'XI', 'XII'],
        ];
        
        $students = [];

        // Ensure each class has at least one student
        foreach ($levels as $level => $classes) {
            foreach ($classes as $class) {
                $prefix = "13";
                $randomNumber = $prefix . str_pad(mt_rand(0, 99999999), 8, '0', STR_PAD_LEFT);
                $students[] = [
                    'name' => $faker->name,
                    'level' => $level,
                    'class' => $class,
                    'entry_date' => $faker->dateTimeBetween('-5 years', 'now')->format('Y-m-d'),
                    'NISN' => $randomNumber,
                ];
            }
        }

        // Generate additional random students
        for ($i = count($students); $i < 50; $i++) {
            $level = $faker->randomElement(array_keys($levels));
            $class = $faker->randomElement($levels[$level]);
            $prefix = "13";
            $randomNumber = $prefix . str_pad(mt_rand(0, 99999999), 8, '0', STR_PAD_LEFT);
            $students[] = [
                'name' => $faker->name,
                'level' => $level,
                'class' => $class,
                'entry_date' => $faker->dateTimeBetween('-5 years', 'now')->format('Y-m-d'),
                'NISN' => $randomNumber,
            ];
        }

        // Insert students into the database
        Student::insert($students);
>>>>>>> origin/Damario
        $mataPelajaran = [
            'IPA', 
            'IPS', 
            'MATEMATIKA', 
            'BAHASA INDONESIA', 
            'SEJARAH', 
            'BAHASA INGGRIS', 
            'PENJAS', 
            'BAHASA JEPANG', 
            'BIMBINGAN KONSELING'
        ];

        $levels = [
            'SD' => ['I', 'II', 'III', 'IV', 'V', 'VI'],
            'SMP' => ['VII', 'VIII', 'IX'],
            'SMA' => ['X', 'XI', 'XII']
        ];

        foreach ($levels as $level => $classes) {
            foreach ($classes as $class) {
                foreach ($mataPelajaran as $subject) {
                    MataPelajaran::create([
                        'level' => $level,
                        'class' => $class,
                        'mata_pelajaran' => $subject,
                    ]);
                }
            }
        }

        Role::create(['name' => 'guru']);
        Role::create(['name' => 'wali murid']);

<<<<<<< HEAD
         $user = User::create([
                'username' => "jokowidodo",
                'no_telepon' => "081281559023",
                'name' => "Jokowi Dodo",
                'email' => "jokowi@gmail.com",
                'password' => Hash::make('password'),
            ])->assignRole('wali murid');
            WaliMurid::create([
                "id_anak" => 1,
                "user_id" => $user->id
        ]);
=======
        
        $students = Student::all();
        $levels = ['SD', 'SMP', 'SMA'];
        foreach($levels as $data){
            Ekstrakurikuler::create([
                'judulEkstra' => 'Futsal',
                'deskripsiEkstra' => 'Ekstrakurikuler futsal adalah kegiatan tambahan di luar jam pelajaran yang difokuskan pada olahraga futsal. Kegiatan ini bertujuan untuk mengembangkan keterampilan bermain futsal, meningkatkan kebugaran fisik, dan menanamkan nilai-nilai sportivitas serta kerjasama tim',
                'tingkatan' => $data,
            ]);
            Ekstrakurikuler::create([
                'judulEkstra' => 'Basket',
                'deskripsiEkstra' => 'Ekstrakurikuler basket adalah kegiatan tambahan di luar jam pelajaran yang berfokus pada olahraga bola basket. Tujuan dari ekstrakurikuler ini adalah untuk mengembangkan keterampilan bermain basket, meningkatkan kebugaran fisik, dan menanamkan nilai-nilai sportivitas serta kerjasama tim',
                'tingkatan' => $data,
            ]);
            Ekstrakurikuler::create([
                'judulEkstra' => 'Musik',
                'deskripsiEkstra' => 'Ekstrakurikuler musik adalah kegiatan tambahan di luar jam pelajaran yang difokuskan pada pengembangan bakat dan minat siswa dalam bidang musik. Kegiatan ini mencakup berbagai aspek, seperti pembelajaran teori musik, latihan bermain alat musik, vokal, serta penampilan ansambel atau paduan suara',
                'tingkatan' => $data,
            ]);
            Ekstrakurikuler::create([
                'judulEkstra' => 'Taekwondo',
                'deskripsiEkstra' => 'Ekstrakurikuler taekwondo adalah kegiatan tambahan di luar jam pelajaran yang berfokus pada seni bela diri taekwondo. Tujuan dari kegiatan ini adalah untuk mengembangkan keterampilan bela diri, meningkatkan kebugaran fisik, dan menanamkan nilai-nilai disiplin, rasa hormat, serta kepercayaan diri',
                'tingkatan' => $data,
            ]);
            Lomba::create([
                'judulLomba' => 'Lomba Cerdas Cermat Matematika',
                'deskripsiLomba' => 'Siswa berkompetisi dalam menjawab soal-soal matematika yang menantang dalam format kuis tim',
                'tingkatan' => $data,
            ]);
            Lomba::create([
                'judulLomba' => 'Lomba Karya Tulis Ilmiah Remaja (LKIR)',
                'deskripsiLomba' => 'Siswa melakukan penelitian di bidang tertentu dan menulis laporan ilmiah berdasarkan hasil penelitian tersebut.',
                'tingkatan' => $data,
            ]);
            Lomba::create([
                'judulLomba' => 'Olimpiade Sains Nasional (OSN)',
                'deskripsiLomba' => 'Kompetisi tahunan yang diadakan untuk siswa SD, SMP, dan SMA di berbagai bidang sains seperti matematika, fisika, kimia, biologi, komputer, dan geografi.',
                'tingkatan' => $data,
            ]);
            Lomba::create([
                'judulLomba' => 'Festival dan Lomba Seni Siswa Nasional (FLS2N)',
                'deskripsiLomba' => 'Kompetisi seni yang mencakup berbagai kategori seperti tari tradisional, vokal solo, teater, film pendek, dan seni rupa.',
                'tingkatan' => $data,
            ]);
            Lomba::create([
                'judulLomba' => 'Kompetisi Olahraga Antar Sekolah (KOS)',
                'deskripsiLomba' => 'Kompetisi di berbagai cabang olahraga seperti sepak bola, bola basket, bulu tangkis, atletik, dan renang. Siswa berkompetisi untuk memenangkan medali dan trofi, serta mengembangkan kemampuan atletik dan sportivitas.',
                'tingkatan' => $data,
            ]);
            for ($i = 0; $i < 10; $i++) {
                $prefix = "11";
                $randomNumber = $prefix . str_pad(mt_rand(0, 99999999), 8, '0', STR_PAD_LEFT);
                $username = $faker->userName;
                $noTelepon = $faker->phoneNumber;
                $name = $faker->name;
                $email = $faker->unique()->safeEmail;
                $password = Hash::make('password');

                $user = User::create([
                    'username' => $username,
                    'no_telepon' => $noTelepon,
                    'name' => $name,
                    'email' => $email,
                    'password' => $password,
                ])->assignRole('guru');
                Guru::create([
                    'user_id' => $user->id,
                    'nip' => $randomNumber,
                    "tingkatan_sekolah" => $data
                ]);
            }
        }

        foreach($students as $data){
            $username = $faker->userName;
            $noTelepon = $faker->phoneNumber;
            $name = $faker->name;
            $email = $faker->unique()->safeEmail;
            $password = Hash::make('password');

            $user = User::create([
                'username' => $username,
                'no_telepon' => $noTelepon,
                'name' => $name,
                'email' => $email,
                'password' => $password,
            ])->assignRole('wali murid');
            WaliMurid::create([
                "id_anak" => $data->id,
                "user_id" => $user->id
            ]);
            $mapels = MataPelajaran::where('class', $data->class)->get();
            foreach($mapels as $mapel){
                Nilai::create([
                    "student_id" => $data->id,
                    "mata_pelajaran_id" => $mapel->id,
                    "nilai" => rand(60, 100),
                    "tahunAjaran" => "2024/2025",
                    "semester" => "1"
                ]);
            }
            if($data->level == "SD"){
                Administrasi::create([
                    'studentId' => $data->id,
                    'waliMuridId' => $data->walimurid->id,
                    'tahunAjaran' => '2024/2025',
                    'semester' => '1',
                    'SPP' => 700000,
                    'batasWaktu' => "2024-05-15",
                    'mangkir' => 700000,
                    'totalTagihan' => 700000,
                    'status' => 'Belum Lunas'
                ]);
                Administrasi::create([
                    'studentId' => $data->id,
                    'waliMuridId' => $data->walimurid->id,
                    'tahunAjaran' => '2024/2025',
                    'semester' => '2',
                    'SPP' => 700000,
                    'batasWaktu' => "2024-06-15",
                    'totalTagihan' => 700000,
                    'status' => 'Belum Lunas'
                ]);
            } elseif($data->level == "SMP"){
                Administrasi::create([
                    'studentId' => $data->id,
                    'waliMuridId' => $data->walimurid->id,
                    'tahunAjaran' => '2024/2025',
                    'semester' => '1',
                    'SPP' => 800000,
                    'batasWaktu' => "2024-05-15",
                    'mangkir' => 800000,
                    'totalTagihan' => 800000,
                    'status' => 'Belum Lunas'
                ]);
                Administrasi::create([
                    'studentId' => $data->id,
                    'waliMuridId' => $data->walimurid->id,
                    'tahunAjaran' => '2024/2025',
                    'semester' => '2',
                    'SPP' => 800000,
                    'batasWaktu' => "2024-06-15",
                    'totalTagihan' => 800000,
                    'status' => 'Belum Lunas'
                ]);
            }elseif($data->level == "SMA"){
                Administrasi::create([
                    'studentId' => $data->id,
                    'waliMuridId' => $data->walimurid->id,
                    'tahunAjaran' => '2024/2025',
                    'semester' => '1',
                    'SPP' => 900000,
                    'batasWaktu' => "2024-05-15",
                    'mangkir' => 900000,
                    'totalTagihan' => 900000,
                    'status' => 'Belum Lunas'
                ]);
                Administrasi::create([
                    'studentId' => $data->id,
                    'waliMuridId' => $data->walimurid->id,
                    'tahunAjaran' => '2024/2025',
                    'semester' => '2',
                    'SPP' => 900000,
                    'batasWaktu' => "2024-06-15",
                    'totalTagihan' => 900000,
                    'status' => 'Belum Lunas'
                ]);
            }

            $hasil = ["Berlangsung", "Kalah", "Juara 1", "Juara 2", "Juara 3", "Juara Harapan"];


            $ekstraArray = [];
            $numEkstra = 2;
            if ($data->level == "SD") {
                $ekstraArray = Ekstrakurikuler::where('tingkatan', 'SD')->pluck('id')->toArray();
            } elseif ($data->level == "SMP") {
                $ekstraArray = Ekstrakurikuler::where('tingkatan', 'SMP')->pluck('id')->toArray();
            } elseif ($data->level == "SMA") {
                $ekstraArray = Ekstrakurikuler::where('tingkatan', 'SMA')->pluck('id')->toArray();
            }

            shuffle($ekstraArray); // shuffle the array to get random ekstrakurikuler
            $selectedEkstra = array_slice($ekstraArray, 0, $numEkstra);

            foreach ($selectedEkstra as $ekstraId) {
                EkstrakurikulerStudent::create([
                    "studentId" => $data->id,
                    "ekstraId" => $ekstraId,
                    "nilai" => rand(70, 100),
                ]);
            }
                    $lombaArray = [];
            $numLomba = 2;
            if ($data->level == "SD") {
                $lombaArray = Lomba::where('tingkatan', 'SD')->pluck('id')->toArray();
            } elseif ($data->level == "SMP") {
                $lombaArray = Lomba::where('tingkatan', 'SMP')->pluck('id')->toArray();
            } elseif ($data->level == "SMA") {
                $lombaArray = Lomba::where('tingkatan', 'SMA')->pluck('id')->toArray();
            }

            shuffle($lombaArray); // shuffle the array to get random lomba
            $selectedLomba = array_slice($lombaArray, 0, $numLomba);

            foreach ($selectedLomba as $lombaId) {
                LombaStudent::create([
                    "studentId" => $data->id,
                    "lombaId" => $lombaId,
                    "hasil" => $hasil[array_rand($hasil)],
                ]);
            }

            $date = new DateTime();
            $date->modify('-15 days');
            for($i = 0; $i <= 15; $i ++){
                Kehadiran::create([
                    "studentId" => $data->id,
                    "tanggal" => $date,
                ]);
                $date->modify('+1 day');
            }
        }
>>>>>>> origin/Damario
    }
}