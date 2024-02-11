@extends('layouts.public')
@section('content')
    <div class="container mt-5 col-8 mb-5">
        <h1>{{$title}}</h1> 
        @if (!empty($alati[0]))
            @foreach ($alati as $alat)
                @if ($alat->objavljen)
                    <hr>
                    <h4>{{$alat->naziv}} </h4>
                    <p>{{$alat->opis}}</p>
                    <a href="{{$alat->url}}" class="btn btn-primary p-2">Линк ка алату</a>
                @endif
            @endforeach
        @endif
    </div>
@endsection
