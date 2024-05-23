@extends('layouts.public')
@section('content')
    <div class="container my-5 col-6">
        <h1>{{ $title }}</h1>
        <form action="{{ route('font.unesifileSubmit', $font->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label class="form-label" for="images">Фајл:</label>
                <input type="file" class="form-control" id="fajl" name="fajl">
            </div>

            <div class="mb-3">
                <label for="font_id" class="form-label">Фонт:</label>
                <input type="text" class="form-control" name="font_naziv" readonly value="{{ $font->naziv }}">
                <input type="text" class="form-control" name="font_id" hidden value="{{ $font->id }}" readonly>
            </div>

            <div class="row justify-content-center">
                <button type="submit" class="col-2 mx-1 btn btn-primary">Унеси</button>
                <a href="{{ route('font.list') }}" class="col-2 mx-1 btn btn-link otkazi">Откажи</a>
            </div>

        </form>
    </div>
@endsection
