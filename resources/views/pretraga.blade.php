@extends('layouts.public')
@section('content')

<div class="container mt-5">
    <div class="row">
        @if (!empty($pretraga_blogovi[0]))
            <h1>Блогови</h1>
        @endif
        @foreach ($pretraga_blogovi as $blog)
            <div class="col-4 mb-4">
                <div class="card d-flex flex-column p-1">
                    <img src="{{ asset('img/' . $blog->slika) }}" class="card-img-top" alt="{{ $blog->naslov }}">
                    <div class="card-body d-flex flex-column justify-content-between" style="min-height: 200px;">
                        <h5 class="card-text">{{ substr($blog->naslov, 0, 50) }}{{ strlen($blog->naslov) > 50 ? '...' : '' }}</h5>
                        <p class="card-text">
                            {!! substr(strip_tags($blog->sadrzaj), 0, 140) !!}
                            {!! strlen(strip_tags($blog->sadrzaj)) > 140 ? '...' : '' !!}
                        </p>
                        
                        <p class="card-text"><small class="text-muted">{{ $blog->kategorija->naziv }}</small></p>
                        <a href="{{ route('blog.blog', $blog->id) }}" class="btn btn-primary p-2">Прочитај више</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div>
        @if (!empty($pretraga_alati[0]))
            <h1>Алати</h1>
        @endif
        @foreach ($pretraga_alati as $alat)
            <hr>
            <h4>{{$alat->naziv}} </h4>
            <p>{{$alat->opis}}</p>
            <a href="{{$alat->url}}" class="btn btn-primary p-2">Линк ка алату</a>
        @endforeach
    </div>

    <div>
        @if (!empty($pretraga_fontovi[0]))
            <h1>Фонтови</h1>
        @endif
        @foreach ($pretraga_fontovi as $font)
            <div class="col-12 mb-2">
                <div class="font-preview" style="font-family: '{{ $font->naziv }}'; font-size: 22px;">
                    <p style="display: flex; justify-content: space-between; font-family: 'OrtoRNIDS-Regular', sans-serif; font-size: 15px;">
                        <span>{{ $font->naziv }}</span>
                        <a href="/fonts/cirilica/{{$font->fajlovi[0]->naziv}}">
                            <i class="bi bi-file-earmark-arrow-down" style="font-size: 22px"></i>
                        </a>
                    </p>
                </div>
            </div>
        @endforeach
    </div>

    <div>
        @if (!empty($pretraga_video_tutorijali[0]))
            <h1>Видео туторијали</h1>
        @endif
        @foreach ($pretraga_video_tutorijali as $vt)
            <hr> 
            <br>
            <h4>{{$vt->naziv}}</h4>
            <p>{{$vt->opis}}</p>
            <div style="text-align: center;">{!! $vt->embed_video !!}</div>
            <br>
        @endforeach
    </div>
</div>
<style>
    .card-img-top {
        object-fit: cover;
        height: 200px; /* Set your desired fixed height */
        width: 100%; /* Adjust this if needed based on your design */
    }
</style>
@endsection