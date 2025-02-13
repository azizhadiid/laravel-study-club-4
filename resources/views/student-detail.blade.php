@extends('templates.main-layout')

@section('title', 'Detail Mahasiswa')

@section('konten')
<div class="container mt-5 mb-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4>Detail Mahasiswa</h4>
        </div>
        <div class="card-body">
            <h5 class="mb-3"><strong>Nama:</strong> {{ $student->nama }}</h5>
            <p><strong>NIM:</strong> {{ $student->nim }}</p>
            <p><strong>Prodi:</strong> {{ $student->prodi }}</p>
            <p><strong>Angkatan:</strong> {{ $student->angkatan }}</p>
            <p><strong>Alamat:</strong> {{ $student->alamat }}</p>
            <a href="{{ route('students.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
