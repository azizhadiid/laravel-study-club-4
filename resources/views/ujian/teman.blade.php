@extends('templates.main-layout')

@section('title', 'Teman')

@section('konten')
    <div class="container">
        <ul class="list-group mt-3 mb-2">
            <li class="list-group-item active" aria-current="true">Teman</li>
            @foreach ($data as $item)
            <li class="list-group-item">{{$item}}</li>
            @endforeach
          </ul>
    </div>
@endsection

