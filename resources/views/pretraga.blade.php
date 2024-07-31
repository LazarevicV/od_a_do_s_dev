@extends('layouts.public')
@section('content')
<div class="container mt-5">
    <div class="row">
        @if (!empty($pretraga_blogovi[0]))
        <h1 class="mt-5">Блогови</h1>
        @endif
        @foreach ($pretraga_blogovi as $blog)
        <div class="col-4 mb-4">
            <div class="card d-flex flex-column p-1">
                <img src="{{ asset('img/' . $blog->slika) }}" class="card-img-top" alt="{{ $blog->naslov }}">
                <div class="card-body d-flex flex-column justify-content-between card-body-custom">
                    <h5 class="card-text">
                        {{ substr($blog->naslov, 0, 50) }}{{ strlen($blog->naslov) > 50 ? '...' : '' }}</h5>
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
        <h1 class="mt-5">Алати</h1>
        @endif
        @foreach ($pretraga_alati as $alat)
        <hr>
        <h4>{{ $alat->naziv }} </h4>
        <p>{{ $alat->opis }}</p>
        <a href="{{ $alat->url }}" class="btn btn-primary p-2">Линк ка алату</a>
        @endforeach
    </div>

    <div>
        @if (!empty($pretraga_fontovi[0]))
        <h1 class="mt-5">Фонтови</h1>
        @endif
        @foreach ($pretraga_fontovi as $font)
        <div class="col-2">
            <div class="font-preview mb-2" style="font-family: '{{ $font->naziv }}';">
                <div class="font-detail">
                    <p class="m-0">{{ $font->naziv }}</p>
                    <a href="/fonts/cirilica/{{ $font->fajlovi[0]->naziv }}">
                        <i class="bi bi-file-earmark-arrow-down download-icon"></i>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div>
        @if (!empty($pretraga_video_tutorijali[0]))
        <h1 class="mt-5">Видео туторијали</h1>
        @endif
        @foreach ($pretraga_video_tutorijali as $vt)
        <hr>
        <br>
        <h4>{{ $vt->naziv }}</h4>
        <p>{{ $vt->opis }}</p>
        <div class="video-container">{!! $vt->embed_video !!}</div>
        <br>
        @endforeach
    </div>

    <div>
        @if(!empty($nemaRezultataPoruka))
        <h1 class="mt-5">{{ $nemaRezultataPoruka }}</h1>
        @endif
    </div>
</div>

<style>
    .card-img-top {
        object-fit: cover;
        height: 200px;
        width: 100%;
    }

    .card-body-custom {
        min-height: 200px;
    }

    .font-preview {
        font-size: 22px;
    }

    .font-detail {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-family: 'OrtoRNIDS-Regular', sans-serif;
        font-size: 15px;
    }

    .download-icon {
        font-size: 22px;
    }

    .video-container {
        text-align: center;
    }
</style>
@endsection