<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    // function index
    function index(Request $request)
    {
        $nama = $request->nama;
        $students = DB::table('students')
            ->where('nama', 'LIKE', '%' . $nama . '%')
            ->simplePaginate(10);
        return view('student', ["students" => $students, 'nama' => $nama]);
    }

    // Function untuk menampilkan halaman tambah
    function add()
    {
        return view('student-add');
    }

    // function menyimpan
    function store(Request $request)
    {
        DB::table('students')->insert([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'prodi' => $request->prodi,
            'angkatan' => $request->angkatan,
            'alamat' => $request->alamat
        ]);
        // Perbaiki key flash message
        Session::flash('message', 'Mahasiswa telah ditambahkan');
        return redirect()->route('students.index');
    }

    // function menampilkan
    function show($id)
    {
        $student = Student::find($id); // Menggunakan model Student untuk mencari data

        if (!$student) {
            return redirect()->route('students.index')->with('error', 'Mahasiswa tidak ditemukan');
        }

        return view('student-detail', ['student' => $student]);
    }

    // Function edit
    function edit($id)
    {
        $student = Student::find($id);

        if (!$student) {
            abort(404);
        }

        return view('student-edit', ['student' => $student]);
    }

    // function update
    function update(Request $request, $id)
    {
        $student = Student::find($id);

        $student->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'prodi' => $request->prodi,
            'angkatan' => $request->angkatan,
            'alamat' => $request->alamat
        ]);

        Session::flash('message', 'Mahasiswa telah diedit');
        return redirect()->route('students.index');
    }

    // function delete
    function delete(Request $request, $id)
    {
        $student = Student::find($id);
        $nama = $request->nama;

        $student->delete();

        Session::flash('message', 'Data mahasiswa telah dihapus');
        return redirect()->route('students.index', ['nama' => $nama]);
    }
}
