@extends('layouts.public')
@section('content')
    <div class="container my-5 col-6">
        <h1>{{ $title }}</h1>
        <form action="{{ route('familija.unesiSubmit') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="naslov" class="form-label">Назив:</label>
                <input type="text" class="form-control" name="naziv" required>
            </div>
            <div class="mb-3">
                <label for="objavljen" class="form-label">Објављен:</label>
                <select class="form-select" name="objavljen">
                    <option value="0">Не</option>
                    <option value="1">Да</option>
                </select>
            </div>

            <div class="mb-3">
                <div class="row justify-content-center">
                    <button type="submit" class="col-2 mx-1 btn btn-primary">Унеси</button>
                    <a href="{{ route('familija.list') }}" class="col-2 mx-1 btn btn-link"
                        style="border: 1px solid #214252;">Откажи</a>
                </div>
            </div>
        </form>
    </div>

    <style>
        .otkazi {
            border: 1px solid #214252;
        }
    </style>
@endsection
