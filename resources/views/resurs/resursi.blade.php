@extends('layouts.public')
@section('content')
    <div class="container mt-5 col-8 mb-5">
        <h1>{{$title}}</h1>
        @foreach ($resursi as $resurs)
            <a href="{{route('resurs.resurs', $resurs->id)}}"><h4>{{$resurs->naziv}}</h4></a><br>
            {!! $resurs->opis !!}
            <hr>
        @endforeach
    </div>
@endsection
