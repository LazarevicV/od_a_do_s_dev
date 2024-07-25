@extends('layouts.public')
@section('content')
    <div class="container my-5 col-8">
        <section class="d-flex align-items-center pt-4 breadcrumbs-section">
            {{ Breadcrumbs::render('resursi') }}
        </section>
        <h1>{{ $title }}</h1>
        <br>
        @foreach ($resursi as $resurs)
            @if($resurs->id == 1)
                <a href="{{ route('resurs.baza-fontova') }}">
            @elseif($resurs->id == 2)
                <a href="{{ route('resurs.video-tutorijali') }}">
            @else
                <a href="#">
            @endif
                <h3>{{ $resurs->naziv }}</h3>
            </a>
            <p>{!! $resurs->opis !!}</p>
            <hr>
        @endforeach
    
    
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
