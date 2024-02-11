@extends('layouts.public')
@section('content')
    <div class="container mt-5 col-4">
        <h1>{{$title}}</h1>
        <form method="POST" action="{{ route('font.izmeniSubmit', $font->id) }}">
            @csrf
            <div class="mb-3">
                <label for="naziv" class="form-label">Назив (*)</label>
                <input type="text" required name="naziv" class="form-control" value="{{ $font->naziv }}">
            </div>

            <div class="mb-3">
                <label for="opis" class="form-label">Опис:</label>
                <textarea class="form-control" name="opis" required>{{$font->opis}}</textarea>
            </div>

            <div class="mb-3">
                <label for="link_detaljno" class="form-label">Линк за детаљније:</label>
                <input type="text" class="form-control" name="link_detaljno" value="{{$font->link_detaljno}}">
            </div>

            <input type="hidden" name="objavljen" value="{{ $font->objavljen }}" readonly>
            <input type="hidden" name="resurs_id" value="1" readonly>

            <div class="mb-3">
                <div class="row justify-content-center">
                    <button class="col-3 mx-1 btn btn-primary">
                        Сачувај
                    </button>
                    <a href="{{route('font.list')}}" class="col-3 mx-1 btn btn-link" style="border: 1px solid #214252;">Откажи</a>
                </div>
            </div>
        </form>
    </div>
@endsection