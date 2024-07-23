@extends('layouts.public')
@section('content')
    <div class="container mt-5 col-6">
        <h1>{{ $title }}</h1>
        <form method="POST" action="{{ route('alat.izmeniSubmit', $alat->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="naslov" class="form-label">Назив (*)</label>
                <input type="text" required name="naziv" class="form-control" value="{{ $alat->naziv }}">
            </div>

            <div class="mb-3">
                <label for="opis" class="form-label">Опис:</label>
                <textarea id="editor" name="opis" required>{{ $alat->opis }}</textarea>
            </div>

            <input type="hidden" name="objavljen" value="{{ $alat->objavljen }}" readonly>

            <div class="mb-3">
                <label for="ikonica" class="form-label">Иконица:</label>
                <input type="file" class="form-control" name="ikonica" required>
                @if ($alat->ikonica)
                    Тренутна иконица:
                    <img src="{{ asset('img/' . $alat->ikonica) }}" width="100" alt="Trenutna ikonica">
                @endif
            </div>

            <div class="mb-3">
                <label for="naslov" class="form-label">Линк (*)</label>
                <input type="text" required name="url" class="form-control" value="{{ $alat->url }}">
            </div>

            <div class="mb-3">
                <div class="row justify-content-center">
                    <button class="col-2 mx-1 btn btn-primary">
                        Сачувај
                    </button>
                    <a href="{{ route('alat.list') }}" class="col-2 mx-1 btn btn-link otkazi">Откажи</a>
                </div>
            </div>
        </form>
    </div>


@endsection
