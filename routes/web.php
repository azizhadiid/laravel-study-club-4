<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/', function () {
    return view('welcome');
});

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
