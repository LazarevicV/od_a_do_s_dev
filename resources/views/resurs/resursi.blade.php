@extends('layouts.public')
@section('content')
    <div class="container my-5 col-8">
        <section class="d-flex align-items-center pt-4" style="height: 70px">
            {{ Breadcrumbs::render('resursi') }}
        </section>
        <h1>{{$title}}</h1>
        @foreach ($resursi as $resurs)
            <a href="{{route('resurs.resurs', $resurs->id)}}"><h4>{{$resurs->naziv}}</h4></a><br>
            {!! $resurs->opis !!}
            <hr>
        @endforeach
    </div>
@endsection
