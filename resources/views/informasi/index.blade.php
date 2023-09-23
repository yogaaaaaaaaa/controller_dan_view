@extends('component.app')

@section('content')

<main>
    <div class="content">

    <div class="container mt-5">
        <h1>{{ $frist }}</h1>
        <p><a href="https://id.m.wikipedia.org/wiki/Perguruan_Tinggi_Raharja_Tangerang">Universitas</a> {{ $article }}</p>
        <p><a href="https://raharja.ac.id/program-studi/">Untuk</a> {{ $article1 }} Berikut adalah Fakultas dan Program Studi yang ada:
        <h5>Fakultas Ekonomi dan Bisnis</h5>
        <ul>
            <li>S1 - Akuntansi</li>
            <li>S1 - Bisnis Digital</li>
            <li>S1 - Kewirausahaan</li>
            <li>S1 - Manajemen Retail</li>
        </ul>
        <h5>Fakultas Sains dan Teknologi</h5>
        <ul>
            <li>S2 - Magister Teknik Informatika</li>
            <li>S1 - Pendidikan Informatika</li>
            <li>S1 - Sais Data</li>
            <li>S1 - Sistem Informasi</li>
            <li>S1 - Sistem Komputer</li>
            <li>S1 - Teknik Informatika</li>
            <li>D3 - Manajemen Informatika</li>
        </ul>
        </p>
        
        <a href="{{ url('/landing/profile') }}"><button type="button" class="btn btn-success">Profil Pembuat</button></a>
    </div>
    
    <div class="img">
        <img src="{{ asset('img/info.png') }}" alt="Info">
    </div>

</div>
</main>
@endsection

