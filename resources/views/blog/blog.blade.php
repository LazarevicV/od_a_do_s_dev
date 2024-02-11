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
            <p class="mt-3" style="font-size: 14px">Категорија: {{ $blog->kategorija }}</p>
            <p style="font-size: 20px">{!! $blog->sadrzaj !!}</p>
            <br>
            <hr>
            <br>
            <h3>Коментари:</h3>

            @if (Auth::check())
                <form action="{{ route('komentar.dodajSubmit', ['blog_id' => $blog->id]) }}" method="post" class="mb-3">
                    @csrf
                    <div class="row align-items-center">
                        <label for="sadrzaj" class="form-label">Додај коментар:</label>
                        <div class="col-9" style="height: 40px">
                            <input type="text" class="form-control m-0" name="sadrzaj" required style="height: 40px">
                        </div>
                        <div class="col-3" style="height: 40px">
                            <button type="submit" class="btn btn-primary w-100 p-0" style="height: 40px">Објави коментар</button>
                        </div>
                    </div>
                </form>
            @else
                <p>Морате бити улоговани да бисте коментарисали <a style="margin-left: 30px;" class="btn btn-primary p-2" href="{{route('login')}}">Улогујте се</a></p>
            @endif                        

            @if($blog->komentari->where('objavljen', 1)->count() > 0)
                <div class="list-group mt-3">
                    @foreach($blog->komentari->where('objavljen', 1) as $komentar)
                        <div class="list-group-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-row">
                                    <h5 class="mr-2 d-flex align-items-center">
                                        {{ $komentar->user->ime_prezime }}
                                        <span class="ml-2">&nbsp;|&nbsp;</span>
                                        <span style="font-size: 12px;"> {{ $komentar->created_at}}</span>
                                    </h5>
                                </div>
                                
                                <div>
                                    @if (Auth::check() && Auth::user()->ime_prezime === $komentar->user->ime_prezime)
                                        <a href="{{route('komentar.unpublishKorisnik', $komentar->id)}}" class="btn btn-danger p-1" style="font-size: 12px;">Обриши</a>
                                    @endif
                                </div>
                            </div>
                            <p class="my-2">{{ $komentar->sadrzaj }}</p>
                        </div>
                        <div style="height:5px"></div>
                    @endforeach
                </div>
            @else
                <div class="list-group mt-3">
                        <div class="list-group-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-row">
                                    <h5 class="mr-2 d-flex align-items-center">
                                        Нема коментара на овој објави
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div style="height:5px"></div>
                </div>
            @endif
        

        </div>
    </div>
</div>

@endsection
