@extends('layouts.public')
@section('content')
    <div class="container my-5 col-6">
        <h1>{{$title}}</h1>
        <form action="{{ route('font.unesiSubmit') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="naziv" class="form-label">Назив:</label>
                <input type="text" class="form-control" name="naziv" required>
            </div>

            <div class="mb-3">
                <label for="familija" class="form-label">Врста:</label>
                <select id="familija" name="familija" class="form-control">
                    <option disabled selected></option>
                    @foreach ($familije as $familija)
                        <option value="{{$familija->id}}">{{$familija->naziv}}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="mb-3">
                <label for="tezine" class="form-label">Тежине:</label>
                <div class="tezine">
                    @foreach ($tezine as $tezina)
                        <div class="tezina">
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


            <div class="mb-3">
                <div class="row justify-content-center">
                    <button type="submit" class="col-2 btn btn-primary">Унеси</button>
                    <a href="{{route('font.list')}}" class="col-2 mx-1 btn btn-link otkazi">Откажи</a>
                </div>
            </div>
        </form>
    </div>


@endsection