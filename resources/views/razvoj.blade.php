@extends('layouts.public')
@section('content')
    <div class="container my-5 col-8">
        <section class="d-flex align-items-center pt-4 breadcrumbs-section">
            {{ Breadcrumbs::render('razvoj') }}
        </section>
        <h1>{{ $parametri[0]->parametar_value }}</h1>
        <br>
        <a href="{{ route('alat.alati') }}">
            <h3>{{ $parametri[1]->parametar_value }}</h3>
        </a>
        {!! $parametri[2]->parametar_value !!}
        <hr>
        <a href="{{ route('uputstva') }}">
            <h3>{{ $parametri[3]->parametar_value }}</h3>
        </a>
        {!! $parametri[4]->parametar_value !!}
        <hr>
    </div>
    
    <style>
        .breadcrumbs-section {
            height: 70px;
        }
        p{
            font-size: 17px;
        }
    </style>
@endsection