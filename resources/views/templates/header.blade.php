<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
      <a class="navbar-brand text-white" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active text-white" href="{{route('my.nama')}}">Nama</a>
          <a class="nav-link text-white" href="{{ route('my.asal_daerah') }}">Asal Daerah</a>
          <a class="nav-link text-white" href="{{route('my.prodi')}}">Prodi</a>
          <a class="nav-link text-white" href="{{route('my.angkatan')}}">Angkatan</a>
          <a class="nav-link text-white" href="{{route('my.teman')}}">teman</a>
        </div>
      </div>
    </div>
  </nav>