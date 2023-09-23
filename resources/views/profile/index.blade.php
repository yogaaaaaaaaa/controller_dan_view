    
    @extends('component.app')
    
    @section('content')

    <main>
        <div class="content">

    <div class="container mt-5">
        <h1>{{ $frist }}</h1>
        <p>{{ $name }}</p>

        <a href="{{ url('/landing') }}"><button type="button" class="btn btn-success">Kembali</button></a>
    </div>

    <div class="img" >
     <img src="{{ asset('img/profil.png') }}" alt="Profil" >
    </div>

        </div>
</main>
    @endsection
    
