<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use App\Models\Product;
use App\Models\Student;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/', function () {
    return view('welcome');
});

// Latihan
Route::get('/product', [ProductController::class, 'index']);

Route::get("/product/create", function () {
    Product::create([
        "code" => "143",
        "nama" => "Asep",
        "description" => "TI",
        "qty" => 2025,
        "price" => 17155.37
    ]);
});

Route::get("/product/update/{id}", function ($id) {
    Product::find($id)->update([
        "code" => "143 baru",
        "nama" => "Asep",
        "description" => "TI",
        "qty" => 2025,
        "price" => 17155.373
    ]);
});

Route::get("/product/delete/{id}", function ($id) {
    Product::find($id)->delete();
});


// Route::get('/students', function () {
//     $students = Student::all();
//     return view('student', ["students" => $students]);
// });

Route::get("/students/create", function () {
    Student::create([
        "nim" => "143",
        "nama" => "Asep",
        "prodi" => "TI",
        "angkatan" => "2025",
        "alamat" => "Jakarta"
    ]);
});

Route::get("/students/update/{id}", function ($id) {
    Student::find($id)->update([
        "nim" => "143 baru",
        "nama" => "Asep",
        "prodi" => "TI",
        "angkatan" => "2025",
        "alamat" => "Jakarta"
    ]);
});

Route::get("/students/delete/{id}", function ($id) {
    Student::find($id)->delete();
});

// From Me
Route::get('/students', [StudentController::class, 'index']);

// Day 2

// Root from study club
// Route::get('/dashboard', function () {
//     return view('welcome');
// });

Route::get('/tampilan', function () {
    return view('tampilan');
});

// Form Study
// Route::get('/tampilan/{id}', function ($id) {
//     return view('tampilan', ['id' => $id]);
// });

Route::get('/tampilan/{id}-{id2}', function ($id, $id2) {
    return view('tampilan', [
        'id1' => $id,
        'id2' => $id2
    ]);
});

// latihan 2
// Route::get('/tampilan/{nama}/{asal_daerah}/{prodi}/{angkatan}', function ($nama, $asal_daerah, $prodi, $angkatan) {
//     return view('exercise2', [
//         'nama' => $nama,
//         'asal_daerah' => $asal_daerah,
//         'prodi' => $prodi,
//         'angkatan' => $angkatan
//     ]);
// });

// Mengmabil blade template
Route::get('/dashboard', function () {
    return view('latihan2.dashboard');
})->name('dashboard');
Route::get('/daftar', function () {
    return view('latihan2.daftar');
})->name('daftar');

// From Me
Route::get('/tampilan/{id}', function ($id) {
    return View::make('tampilan')->with('id', $id);
});

Route::get('/tampilan/{nama}/{asal_daerah}/{prodi}/{angkatan}', function ($nama, $asal_daerah, $prodi, $angkatan) {
    $data = [
        [
            'nama' => $nama,
            'asal_daerah' => $asal_daerah,
            'prodi' => $prodi,
            'angkatan' => $angkatan
        ]
    ];
    return View::make('exercise2')->with('data', $data);
});

// Ujian day 2
Route::get('/my/nama', function () {
    return view('ujian.nama');
})->name('my.nama');

Route::get('/my/asal-daerah', function () {
    return view('ujian.asal-daerah');
})->name('my.asal_daerah');

Route::get('/my/prodi', function () {
    return view('ujian.prodi');
})->name('my.prodi');

Route::get('/my/angkatan', function () {
    return view('ujian.angkatan');
})->name('my.angkatan');

Route::get('/my/teman', function () {
    $data = ['Hilmy', 'Agus', 'Irfan', 'Bagus', 'Agus', 'Budi'];
    return View::make('ujian.teman')->with('data', $data);
})->name('my.teman');


// Day 1
Route::get('/home', function () {
    $data = ['Aziz', 'Agus', 'Hilmy'];

    return View::make('home')->with('data', $data);
});

Route::get('/exercise', function () {
    $data = [
        [
            'nama' => 'Aziz',
            'asal_daerah' => 'Jambi',
            'prodi' => 'Sistem Informasi',
            'angkatan' => '23',
            'teman' => ['Hilmy', 'Agus', 'Irfan']
        ],
        [
            'nama' => 'hadiid',
            'asal_daerah' => 'Jakarta',
            'prodi' => 'Informatika',
            'angkatan' => '24',
            'teman' => ['Bagus', 'Agus', 'Budi']
        ],
        [
            'nama' => 'Bagas',
            'asal_daerah' => 'Yogyakarta',
            'prodi' => 'Akuntasi',
            'angkatan' => '23',
            'teman' => ['Adam', 'Rizki', 'Frizka']
        ]
    ];
    return View::make('exercise')->with('data', $data);
});
