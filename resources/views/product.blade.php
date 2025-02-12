@extends('templates.main-layout')

@section('title', 'Product')

@section('konten')
<div class="container mt-4 mb-5">
    <h2 class="text-center mb-4">Daftar Produk</h2>

    {{-- Form Pencarian --}}
    <form action="" method="GET" class="mb-4 d-flex justify-content-end">
        <input class="form-control w-25 me-2" type="search" placeholder="Cari produk..." name="nama"
            value="{{ request('nama') }}">
        <button class="btn btn-primary" type="submit">Cari</button>
    </form>

    {{-- Alert jika tidak ada data --}}
    @if ($products->isEmpty())
    <div class="alert alert-warning text-center">
        Tidak ada produk yang ditemukan. dengan nama <strong>{{$nama}}</strong>
    </div>
    @endif

    {{-- Grid Produk --}}
    <div class="row g-4 justify-content-center">
        @foreach ($products as $product)
        <div class="col-md-4 col-lg-3">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h6 class="text-primary fw-bold">#{{ $product->id }}</h6> {{-- Nomor Urut --}}
                    <h5 class="card-title">{{ $product->nama }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Kode: {{ $product->code }}</h6>
                    <p class="card-text">{{ Str::limit($product->description, 50) }}</p>
                    <p class="card-text"><strong>Stok:</strong> {{ $product->qty }}</p>
                    <p class="card-text"><strong>Harga:</strong> Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                    <a href="#" class="btn btn-sm btn-success">Lihat Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {{-- Pagination --}}
    <div class="mt-4 d-flex justify-content-center">
        {{ $products->links() }}
    </div>
</div>
@endsection
