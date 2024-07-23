@extends('layouts.public')
@section('content')
    <div class="container my-5 col-8">
        <section class="d-flex align-items-center pt-4 breadcrumbs-section">
            {{ Breadcrumbs::render('resursi') }}
        </section>
        <h1>{{ $title }}</h1>
        <br>
        @foreach ($resursi as $resurs)
            <a href="{{ route('resurs.resurs', $resurs->id) }}">
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
