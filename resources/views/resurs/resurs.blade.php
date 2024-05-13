@extends('layouts.public')
@section('content')

<div class="container my-5">
    <section class="d-flex align-items-center pt-4 breadcrumbs-section">
        @if ($id == 1)
        {{ Breadcrumbs::render('baza-fontova') }}
        @else
        {{ Breadcrumbs::render('video-tutorijali') }}
        @endif
    </section>
    @if (!empty($resurs->fontovi[0]))
        <div class="d-flex resource-section">
            <div class="col-7">
                <h1 class="resource-title">База фонтова</h1>
                <p class="resource-description">
                    Фонтови играју кључну улогу у дизајну пружајући визуелни идентитет, тон и побољшавајући читљивост.
                </p>
                <p class="resource-description">
                    За дизајнере који стварају садржај на српском, доступност различитих ћириличних фонтова је од суштинског значаја, омогућавајући им усаглашавање са културним нијансама и постизање хармоничне комбинације естетског привлачења и језичке аутентичности у њиховим дизајнима.                </p>      
                    <a href="{{route('fontovi')}}" class="btn btn-primary resource-button">Тестирајте приказе</a>
                </div>
            <div class="col-5 d-flex justify-content-center">
                <img src="{{ asset('img/baza-fontova.png') }}" alt="" class="resource-image">
            </div>
        </div>
        <div class="d-flex flex-wrap gap-3">
            @foreach ($resurs->fontovi as $font)
            <div class="font-card p-4 d-flex flex-column justify-content-between">
                @if ($font->objavljen)
                    <div>
                        <h4 class="mb-4 font-name"><a href="{{ route('font.font', $font->id) }}">{{ $font->naziv }}</a> </h4>
                        <p class="font-description">{{$font->opis}}</p>
                        @if (!empty($font->link_detaljno))
                            <a href="{{$font->link_detaljno}}" target="_blank" class="font-detail-link">Детаљније о фонту.</a>
                        @endif
                    </div>
                    @if ($font->downloadable)
                        <p class="downloads">
                            @foreach ($font->fajlovi as $file)
                                <br>
                                <a href="/fonts/cirilica/{{$file->naziv}}" download> <i class="bi bi-download download-icon"> </i>{{$file->naziv}}</a>
                            @endforeach
                        </p>
                    @endif
                @endif
                </div>
            @endforeach
        </div>
    @endif
    @if (!empty($resurs->videoTutorijali[0]))
    <div class="d-flex resource-section">
        <div class="col-7">
            <h1 class="mb-5 resource-title">Видео туторијали</h1>
            <p class="tutorial-description">
                Видео туториjали представљају неизоставан извор образовања за широк спектар интересовања, укључујући
                области као што су SEO оптимизација и употреба ћирилице.
            </p>
            <p class="tutorial-description">
                Ови туториали обезбеђују визуелно и лако разумљиво учење, што је посебно битно за брзо усвајање и
                примену комплексних концепата. Независно од области примене, видео туториали су кључни за унапређење
                разумевања и успешну примену различитих вештина и техника.
            </p>
        </div>
        <div class="col-5">
            <img src="{{ asset('img/video-tutorijali.png') }}" alt="" class="tutorial-image">
        </div>
    </div>
    @foreach ($resurs->videoTutorijali as $vt)
    {{-- @if ($vt->objavljen) --}}
    <div class="p-5 mb-5 video-background">
        <h4 class="video-title">{{$vt->naziv}}</h4>
        <p class="mb-5" class="video-description">{{$vt->opis}}</p>
        <div class="video-embed">{!! $vt->embed_video !!}</div>
    </div>
    {{-- @endif --}}
    @endforeach
    @endif
</div>

<style>
    .breadcrumbs-section { height: 70px; }
    .resource-section { height: 500px; }
    .resource-title { font-size: 80px; color: #000E75; }
    .resource-description, .tutorial-description, .downloads { font-size: 22px; }
    .font-description, .video-description, .font-detail-link { font-size: 18px; }
    .resource-button { font-size: 16px; }
    .resource-image { width: 50%; }
    .tutorial-image { width: 100%; }
    .font-card { width: 49%; background-color: #EFEBDC; }
    .font-name { font-size: 42px; }
    .download-icon { color: red; }
    .tutorial-section, .video-tutorial { height: 500px; }
    .tutorial-title, .video-title { font-size: 42px; }
    .video-embed { text-align: center; }
    .video-background{ background-color: #EFEBDC }
</style>
@endsection