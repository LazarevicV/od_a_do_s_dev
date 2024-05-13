@extends('layouts.public')
@section('content')
    <div class="container mt-5 col-6">
        <h1>{{$title}}</h1>
        <form method="POST" action="{{ route('font.izmeniSubmit', $font->id) }}">
            @csrf
            <div class="mb-3">
                <label for="naziv" class="form-label">Назив (*)</label>
                <input type="text" required name="naziv" class="form-control" value="{{ $font->naziv }}">
            </div>

            <div class="mb-3">
                <label for="familija" class="form-label">Врста:</label>
                <select id="familija" name="familija" class="form-control">
                    <option disabled selected></option>
                    @foreach ($familije as $familija)
                        @if ($font->familija_id==$familija->id)
                            <option value="{{$familija->id}}" selected>{{$familija->naziv}}</option>
                        @else
                            <option value="{{$familija->id}}">{{$familija->naziv}}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="tezine" class="form-label"">Тежине:</label>
                <div class="tezine">
                    @foreach ($tezine as $tezina)
                        <div class="tezina">
                            <div class="form-group">
                                <input type="checkbox" id="tezine{{ $tezina->id }}" name="tezine[]" value="{{ $tezina->id }}" {{ $font->tezine->contains('id', $tezina->id) ? 'checked' : '' }}>
                                <label for="tezine{{ $tezina->id }}">{{ ucwords(str_replace("_", " ", $tezina->naziv)) }}</label><br>
                            </div>
                        </div>
                    @endforeach
                </div>
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
                    <button class="col-2 mx-1 btn btn-primary">
                        Сачувај
                    </button>
                    <a href="{{route('font.list')}}" class="col-2 mx-1 btn btn-link otkazi">Откажи</a>
                </div>
            </div>
        </form>
    </div>

@endsection