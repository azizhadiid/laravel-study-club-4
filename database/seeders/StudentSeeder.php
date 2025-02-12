<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str; // Tambahkan ini di bagian atas

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // From Me
        DB::table('students')->truncate();
        Student::factory()
            ->count(100)
            ->create();


        // DB::table('students')->insert([
        //     'nim' => 'F1E123024',
        //     'nama' => 'Aziz Alhadiid',
        //     'prodi' => 'Sistem Informasi',
        //     'angkatan' => '2023',
        //     'alamat' => 'Jambi'
        // ]);

        // From Study
        // for ($i = 0; $i < 100; $i++) {
        //     Student::create([
        //         "nim" => Str::random(8),   // Perbaikan: Str dengan huruf besar
        //         "nama" => Str::random(20), // Perbaikan: "name" -> "nama"
        //         "prodi" => Str::random(15),
        //         "angkatan" => rand(2000, 2024),
        //         "alamat" => Str::random(50),
        //     ]);
        // }
    }
}
