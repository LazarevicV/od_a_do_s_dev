@extends('layouts.public')
@section('content')
    <div class="container mt-5 col-6">
        <h1>{{ $title }}</h1>
        <form method="POST" action="{{ route('config.izmeniSubmit', $parametar->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="parametar_value" class="form-label">Текст (*)</label>
                <textarea id="editor" name="parametar_value" required>{{ $parametar->parametar_value }}</textarea>
            </div>

            <div class="mb-3">
                <div class="row justify-content-center">
                    <button class="col-2 mx-1 btn btn-primary">
                        Сачувај
                    </button>
                </div>
            </div>
        </form>
    </div>


@endsection
