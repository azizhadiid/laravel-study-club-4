<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //
    function index(Request $request)
    {
        $nama = $request->nama;
        $students = DB::table('students')
            ->where('nama', 'LIKE', '%' . $nama . '%')
            ->simplePaginate(10);
        return view('student', ["students" => $students, 'nama' => $nama]);
    }
}
