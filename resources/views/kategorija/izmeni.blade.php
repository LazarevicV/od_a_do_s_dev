@extends('layouts.public')
@section('content')
    <div class="container mt-5 col-6">
        <h1>{{ $title }}</h1>
        <form method="POST" action="{{ route('kategorija.izmeniSubmit', $kategorija->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="naziv" class="form-label">Назив (*)</label>
                <input type="text" required name="naziv" class="form-control" value="{{ $kategorija->naziv }}">
            </div>

            <input type="hidden" name="objavljen" value="{{ $kategorija->objavljen }}" readonly>

            <div class="mb-3">
                <div class="row justify-content-center">
                    <button class="col-2 mx-1 btn btn-primary">
                        Сачувај
                    </button>
                    <a href="{{ route('kategorija.list') }}" class="col-2 mx-1 btn btn-link otkazi">Откажи</a>
                </div>
            </div>
        </form>
    </div>
@endsection
