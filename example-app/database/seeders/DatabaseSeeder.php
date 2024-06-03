<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Student;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\WaliMurid;
use App\Models\MataPelajaran;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Student::factory()->count(50)->create();
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
    }
}