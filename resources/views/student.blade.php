@extends('templates.main-layout')

@section('title', 'Student')

@section('konten')
<div class="container mt-4 mb-5">
    <!-- Form Pencarian -->
    <div class="row mb-4">
        <div class="col-md-6 mx-auto">
            <form action="" method="GET" class="d-flex">
                <input type="search" class="form-control me-2" placeholder="Cari mahasiswa..." aria-label="Cari"
                    name="nama" value="{{ $nama }}">
                <button class="btn btn-success" type="submit">Cari</button>
            </form>
        </div>
    </div>

    <!-- Alert Jika Tidak Ada Data -->
    @if ($students->count() === 0)
    <div class="alert alert-danger text-center" role="alert">
        Tidak ada data untuk kata <strong>{{ $nama }}</strong>
    </div>
    @endif

    <!-- Data Mahasiswa -->
    <div class="row g-3 justify-content-center">
        @foreach ($students as $index => $student)
        <div class="col-md-4 col-lg-3">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h6 class="text-primary fw-bold">#{{ $student->id }}</h6> {{-- Nomor Urut --}}
                    <h5 class="card-title">{{ $student->nama }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $student->nim }}</h6>
                    <p class="card-text"><strong>Prodi:</strong> {{ $student->prodi }}</p>
                    <p class="card-text"><strong>Alamat:</strong> {{ $student->alamat }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>    

    <!-- Pagination -->
    <div class="mt-5 d-flex justify-content-center">
        {{ $students->links() }}
    </div>
</div>
@endsection
