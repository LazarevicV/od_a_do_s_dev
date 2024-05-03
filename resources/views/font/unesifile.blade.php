@extends('layouts.public')
@section('content')
    <div class="container my-5 col-4">
        <h1>{{$title}}</h1>
        <form action="{{ route('font.unesifileSubmit', $font->id) }}" method="POST"  enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label class="control-label col-sm-2" for="images">Фајл:</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="fajl" name="fajl">
                </div>
            </div>

            <div class="mb-3">
                <label for="font_id" class="form-label">Фонт:</label>
                <input type="text" class="form-control" name="font_naziv" readonly value="{{$font->naziv}}">
                <input type="text" class="form-control" name="font_id" hidden value="{{$font->id}}" readonly>
            </div>

            <button type="submit" class="btn btn-primary">Унеси</button>
            <a href="{{route('font.list')}}" class="col-3 mx-1 btn btn-link" style="border: 1px solid #214252;">Откажи</a>
        </form>
    </div>
@endsection