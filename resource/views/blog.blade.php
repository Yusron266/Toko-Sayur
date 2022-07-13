@extends('layouts.template')

@section('container')
<link rel="stylesheet" href="background/1.css">
  <h1>Uncle C</h1>
  <h3>{{ $name }}</h3>
  <p>{{ $email }}</p>
  <img src="img/{{ $img }}" alt="{{ $name }}" width="200px" class="img-thumbnail rounded-circle">
@endsection