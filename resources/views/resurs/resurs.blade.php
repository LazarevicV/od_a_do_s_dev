@extends('layouts.public')

@section('content')

<section style="height: 60px">

</section>
<div class="container my-5">
    @if (!empty($resurs->fontovi[0]))
        <div style="height: 500px;" class="d-flex ">
            <div class="col-7">
                <h1 class="mb-5" style="font-size: 80px; color: #000E75;">База фонтова</h1>
                <p style="font-size: 22px">
                    Видео туториjали представљају неизоставан извор образовања за широк спектар интересовања, укључујући области као што су SEO оптимизација и употреба ћирилице.
                </p>
                <p style="font-size: 22px">
                    Ови туториали обезбеђују визуелно и лако разумљиво учење, што је посебно битно за брзо усвајање и примену комплексних концепата. Независно од области примене, видео туториали су кључни за унапређење разумевања и успешну примену различитих вештина и техника.
                </p>      
                <a href="{{route('fontovi')}}" class="btn btn-primary p-3" style="font-size: 16px">Тестирајте приказе</a>
            </div>
            <div class="col-5 d-flex justify-content-center">
                <img src="{{ asset('img/baza-fontova.png') }}" alt="" style="width: 50%">
            </div>
        </div>
        <div class="d-flex flex-wrap gap-3">
            @foreach ($resurs->fontovi as $font)
                <div class="p-4 d-flex flex-column justify-content-between" style="width: 49%; background-color:#EFEBDC;">
                    @if ($font->objavljen)
                    <div>
                        <h4 class="mb-4" style="font-size: 42px">{{$font->naziv}} </h4>
                        <p style="font-size: 18px">{{$font->opis}}</p>
                        @if (!empty($font->link_detaljno))
                            <a href="{{$font->link_detaljno}}" target="_blank" style="font-size: 18px">Детаљније о фонту.</a>
                        @endif
                    </div>
                    <p style="font-size: 22px;">
                        @foreach ($font->fajlovi as $file)
                            <br>
                            <a href="/fonts/cirilica/{{$file->naziv}}" download> <i class="bi bi-download" style="color: red;"> </i>{{$file->naziv}}</a>
                        @endforeach
                    </p>
                @endif
                </div>
            @endforeach
        </div>
    @endif
    @if (!empty($resurs->videoTutorijali[0]))
        <div style="height: 500px;" class="d-flex ">
            <div class="col-7">
                <h1 class="mb-5" style="font-size: 80px; color: #000E75;">Видео туторијали</h1>
                <p style="font-size: 22px">
                    Видео туториjали представљају неизоставан извор образовања за широк спектар интересовања, укључујући области као што су SEO оптимизација и употреба ћирилице.
                </p>
                <p style="font-size: 22px">
                    Ови туториали обезбеђују визуелно и лако разумљиво учење, што је посебно битно за брзо усвајање и примену комплексних концепата. Независно од области примене, видео туториали су кључни за унапређење разумевања и успешну примену различитих вештина и техника.
                </p>            
            </div>
            <div class="col-5">
                <img src="{{ asset('img/video-tutorijali.png') }}" alt="" style="width: 100%">
            </div>
        </div>
        @foreach ($resurs->videoTutorijali as $vt)
            {{-- @if ($vt->objavljen) --}}
            <div class="p-5 mb-5" style="background-color: #EFEBDC">
                <h4 class="mb-5 mt-3" style="font-size: 42px">{{$vt->naziv}}</h4>
                <p class="mb-5" style="font-size: 18px">{{$vt->opis}}</p>
                <div style="text-align: center;">{!! $vt->embed_video !!}</div>
            </div>
            {{-- @endif --}}
        @endforeach
    @endif
</div>
@endsection
