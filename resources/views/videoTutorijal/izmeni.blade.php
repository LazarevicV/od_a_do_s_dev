@extends('layouts.public')
@section('content')
    <div class="container mt-5 col-4">
        <h1>{{$title}}</h1>
        <form method="POST" action="{{ route('videoTutorijal.izmeniSubmit', $videoTutorijal->id) }}">
            @csrf
            <div class="mb-3">
                <label for="naziv" class="form-label">Назив (*)</label>
                <input type="text" required name="naziv" class="form-control" value="{{ $videoTutorijal->naziv }}">
            </div>

            <div class="mb-3">
                <label for="opis" class="form-label">Опис:</label>
                <textarea class="form-control" name="opis" required>{{$videoTutorijal->opis}}</textarea>
            </div>

            <div class="mb-3">
                <label for="embed_video" class="form-label">Видео:</label>
                <textarea class="form-control" name="embed_video" required>{{$videoTutorijal->embed_video}}</textarea>
            </div>

            <input type="hidden" name="objavljen" value="{{ $videoTutorijal->objavljen }}" readonly>
            <input type="hidden" name="resurs_id" value="1" readonly>

            <div class="mb-3">
                <div class="row justify-content-center">
                    <button class="col-3 mx-1 btn btn-primary">
                        Сачувај
                    </button>
                    <a href="{{route('videoTutorijal.list')}}" class="col-3 mx-1 btn btn-link" style="border: 1px solid #214252;">Откажи</a>
                </div>
            </div>
        </form>
    </div>
@endsection