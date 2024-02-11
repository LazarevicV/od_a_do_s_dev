@extends('layouts.public')
@section('content')
<div class="container mt-5 col-4">
    <h1>{{$title}}</h1>
    <form method="POST" action="{{ route('korisnici.izmeniSubmit', $user->id) }}">
        @csrf
        <div class="mb-3">
            <label for="ime_prezime" class="form-label">Име и презиме (*)</label>
            <input type="text" required name="ime_prezime" class="form-control" value="{{ $user->ime_prezime }}">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Е-маил:</label>
            <input type="email" class="form-control" name="email" required value="{{ $user->email }}" />
        </div>

        <div class="mb-3">
            <label for="naslov" class="form-label">Нова шифра (*)</label>
            <input type="password" name="sifra" name="url" class="form-control">
        </div>

        <div class="mb-3">
            <label for="embed_video" class="form-label">Улога:</label>
            <select class="form-select" name="access_level">
                @if ($user->access_level == 'user')
                <option value="user" selected>Усер</option>
                <option value="admin">Админ</option>
                @else
                <option value="admin" selected>Админ</option>
                <option value="user">Усер</option>
                @endif
            </select>
        </div>

        <div class="mb-3">
            <label for="embed_video" class="form-label">Датум креирања:</label>
            <textarea readonly class="form-control" name="datum_kreiranja" required>{{$user->created_at}}</textarea>
        </div>

        <input type="hidden" name="objavljen" value="{{ $user->objavljen }}" readonly>
        <input type="hidden" name="resurs_id" value="1" readonly>

        <div class="mb-3">
            <div class="row justify-content-center">
                <button class="col-3 mx-1 btn btn-primary">
                    Сачувај
                </button>
                <a href="{{route('korisnici.list')}}" class="col-3 mx-1 btn btn-link"
                    style="border: 1px solid #214252;">Откажи</a>
            </div>
        </div>
    </form>
</div>
@endsection
