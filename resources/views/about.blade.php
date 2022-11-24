@extends('layouts.main')

@section('container')
        <h1 style="text-align: center">About Wayne Enterprise</h1>
    <br>
    <h4>{{ $nama }}</h4>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $nama }}" width="200px" class="img-thumbnail">
@endsection