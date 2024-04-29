@extends('layouts.public')
@section('content')
    <div class="container my-5 col-4">
        <h1>{{$title}}</h1>
        <form action="{{ route('font.unesiSubmit') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="naziv" class="form-label">Назив:</label>
                <input type="text" class="form-control" name="naziv" required>
            </div>

            <div class="mb-3">
                <label for="familija">Врста:</label>
                <select id="familija" name="familija" class="form-control">
                    <option disabled selected></option>
                    @foreach ($familije as $familija)
                        <option value="{{$familija->id}}">{{$familija->naziv}}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="mb-3">
                <label for="tezine">Тежине:</label>
                <div style="display: flex;flex-direction:row;flex-wrap:wrap">
                    @foreach ($tezine as $tezina)
                        <div style="display: flex;width:50%;">
                            <option disabled selected></option>
                            <div class="form-group">
                                <input type="checkbox" id="tezine" name="tezine[]" value="{{$tezina->id}}">
                                <label for="tezine">{{ucwords(str_replace("_", " ", $tezina->naziv))}}</label><br>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="mb-3">
                <label for="opis" class="form-label">Опис:</label>
                <textarea class="form-control" name="opis" required></textarea>
            </div>

            <div class="mb-3">
                <label for="link_detaljno" class="form-label">Линк за детаљније:</label>
                <input type="text" class="form-control" name="link_detaljno">
            </div>

            <input type="number" name="resurs_id" value="1" hidden readonly>

            <div class="mb-3">
                <label for="objavljen" class="form-label">Објављен:</label>
                <select class="form-select" name="objavljen">
                    <option value="0" selected>Не</option>
                    <option value="1">Да</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Унеси</button>
            <a href="{{route('font.list')}}" class="col-3 mx-1 btn btn-link" style="border: 1px solid #214252;">Откажи</a>
        </form>
    </div>
@endsection