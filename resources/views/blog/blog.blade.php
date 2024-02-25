@extends('layouts.public')
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2 mb-5">
            <h1 class="text-center mb-4">{{ $blog->naslov }}</h1>
            <hr>
            <div class="text-center">
                <img src="{{ asset('img/' . $blog->slika) }}" class="img-fluid rounded" alt="{{ $blog->naslov }}" style="max-width: 70%;">
            </div>
            <p class="mt-3" style="font-size: 14px">Категорија: {{ $blog->kategorija->naziv }}</p>
            <p style="font-size: 20px">{!! $blog->sadrzaj !!}</p>
        </div>
    </div>
</div>

@endsection
