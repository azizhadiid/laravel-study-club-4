@extends('templates.main-layout')

@section('title', 'Student')

@section('konten')
<div class="container mt-4 mb-5">
    <!-- Tombol Tambah Mahasiswa -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Data Mahasiswa</h2>
        <a href="{{url('/students/add')}}" class="btn btn-primary">Tambah Mahasiswa</a>
    </div>

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

    @if (session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('message') }} <strong>{{ $nama }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif


    <!-- Alert Jika Tidak Ada Data -->
    @if ($students->count() === 0)
    <div class="alert alert-danger text-center" role="alert">
        Tidak ada data untuk kata <strong>{{ $nama }}</strong>
    </div>
    @endif

    <!-- Tampilkan Alert Error Jika Ada -->
    @if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
                    <a href="{{url('students/'.$student->id.'/detail')}}"
                        class="btn btn-outline-success btn-sm mx-1">Detail</a>
                    <a href="{{url('students/'.$student->id.'/edit')}}"
                        class="btn btn-outline-primary btn-sm mx-1">Edit</a>
                    <a href="{{url('students/'.$student->id.'/delete')}}"
                        class="btn btn-outline-danger btn-sm mx-1">Hapus</a>
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

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const deleteButtons = document.querySelectorAll(".btn-outline-danger");

        deleteButtons.forEach(button => {
            button.addEventListener("click", function (event) {
                event.preventDefault(); // Mencegah navigasi langsung

                const deleteUrl = this.getAttribute("href");

                Swal.fire({
                    title: "Apakah Anda yakin?",
                    text: "Data mahasiswa akan dihapus secara permanen!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#d33",
                    cancelButtonColor: "#3085d6",
                    confirmButtonText: "Ya, hapus!",
                    cancelButtonText: "Batal"
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href =
                            deleteUrl; // Redirect ke URL hapus jika dikonfirmasi
                    }
                });
            });
        });
    });

</script>
@endsection
