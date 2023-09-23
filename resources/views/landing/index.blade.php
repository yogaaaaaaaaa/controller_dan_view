@extends('component.app')

@section('content')
<main>
  <div class="content">

  <div class="container" >
    <h1 class="titel" >{{ $frist }}</h1>
    <p><a href="https://id.m.wikipedia.org/wiki/Perguruan_Tinggi_Raharja_Tangerang">Universitas</a> {{ $article }}</p>

    <a href="{{ url('/landing/informasi') }}"><button type="button" class="btn btn-success">Lebih Lanjut</button></a>
  </div>

  <div class="img " >
    <img src="{{ asset('img/logo.png') }}" alt="Home" >
  </div>

  </div>
</main>
@endsection