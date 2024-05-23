@extends('layouts.public')
@section('content')
    <section>
        <div class="hero">
            {{-- <svg width="100%" viewBox="0 0 1920 747" fill="none" xmlns="http://www.w3.org/2000/svg" class="hero-svg">
                <path d="M1920 583.133C1920 583.133 1437.17 747 949.36 747C411.06 747 0 583.133 0 583.133V0H1920V583.133Z"
                    fill="#EFEBDC" />
            </svg> --}}
            <div class="hero-section container d-flex justify-center align-items-start">
                <div class="hero-left col-7 black">
                    <p>Шта све има на ћирилици?</p>
                    <p>Садржаји сајтова, дизајнерска решења, линкови, домени...</p>
                    <p>Ако вам недостају ресурси, савети или идеје како да креирате дигитална решења и дигиталне производе
                        користећи ћириличко писмо овај сајт вам може помоћи – да пронађете ресурсе и размените знања
                        потребна да разноврстан свет ћириличког писма представите у дигиталном свету.</p>
                </div>
                <div class="hero-right col-5">
                    <img src="{{ asset('img/dzivdzan.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="gif-section container d-flex justify-content-between align-items-center gap-4">
            <div class="col-6 gif-left black">
                <p>За веб-дивелопере и програмере</p>
                <p>Како правити линкове на ћирилици, како програмирати на ћирилици, како пресловљавати? Која готова решења
                    постоје за лакшу израду веб-сајтова на ћирилици?</p>
                <p>Пронађите алате и упутства у секцији <span class="underline">Развој.</span></p>
            </div>
            <div class="col-6 gif-right">
                <img src="{{ asset('img/gugl-razume-cirilicu-gif.gif') }}" alt="">
            </div>
        </div>
    </section>

    <section>
        <div class="azbuka-section container d-flex justify-content-between align-items-center">
            <div class="col-6 azbuka-left">
                <img src="{{ asset('img/azbuka.png') }}" alt="">
            </div>
            <div class="col-6 azbuka-right">
                <p>За дизајнере и веб-дизајнере</p>
                <p>Пронађите савршене фонтове за ваш уметнички и комерцијални пројекат. Тестирајте приказе и пронађите
                    додатне ресурсе за оригиналне дизајнерске подухвате. </p>
            </div>
        </div>
    </section>

    <section>
        <div class="blog-section container d-flex flex-column justify-content-evenly retro-layout-alt mb-5 p-0">
            <div>
                <p>Истакнути чланци</p>
            </div>
            <div class="blog-row d-flex flex-row justify-content-between">
                <a href="{{ route('blog.blog', $istaknuti_blogovi[2]->id) }}" class="hentry img-2 v-height my-3 gradient"
                    style="width: 66%;">
                    <div class="featured-img"
                        style="background-image: url({{ asset('img/' . $istaknuti_blogovi[2]->slika) }});"></div>
                    <div class="text">
                        <span>{{ $istaknuti_blogovi[2]->kategorija->naziv }}</span>
                        <h2>{{ $istaknuti_blogovi[2]->naslov }}</h2>
                    </div>
                </a>
                <a href="{{ route('blog.blog', $istaknuti_blogovi[1]->id) }}" class="hentry img-2 v-height my-3 gradient"
                    style="width: 32%;">
                    <div class="featured-img"
                        style="background-image: url({{ asset('img/' . $istaknuti_blogovi[1]->slika) }});"></div>
                    <div class="text">
                        <span>{{ $istaknuti_blogovi[1]->kategorija->naziv }}</span>
                        <h2>{{ $istaknuti_blogovi[1]->naslov }}</h2>
                    </div>
                </a>
            </div>

            <div class="blog-row d-flex flex-row justify-content-between">
                <a href="{{ route('blog.blog', $istaknuti_blogovi[0]->id) }}" class="hentry img-2 v-height my-3 gradient"
                    style="width: 32%;">
                    <div class="featured-img"
                        style="background-image: url({{ asset('img/' . $istaknuti_blogovi[0]->slika) }});"></div>
                    <div class="text">
                        <span>{{ $istaknuti_blogovi[0]->kategorija->naziv }}</span>
                        <h2>{{ $istaknuti_blogovi[0]->naslov }}</h2>
                    </div>
                </a>
                <a href="{{ route('blog.blog', $istaknuti_blogovi[3]->id) }}" class="hentry img-2 v-height my-3 gradient"
                    style="width: 32%;">
                    <div class="featured-img"
                        style="background-image: url({{ asset('img/' . $istaknuti_blogovi[3]->slika) }});"></div>
                    <div class="text">
                        <span>{{ $istaknuti_blogovi[3]->kategorija->naziv }}</span>
                        <h2>{{ $istaknuti_blogovi[3]->naslov }}</h2>
                    </div>
                </a>
                <a href="{{ route('blog.blog', $istaknuti_blogovi[4]->id) }}" class="hentry img-2 v-height my-3 gradient"
                    style="width: 32%;">
                    <div class="featured-img"
                        style="background-image: url({{ asset('img/' . $istaknuti_blogovi[4]->slika) }});"></div>
                    <div class="text">
                        <span>{{ $istaknuti_blogovi[4]->kategorija->naziv }}</span>
                        <h2>{{ $istaknuti_blogovi[4]->naslov }}</h2>
                    </div>
                </a>
            </div>

            <div class="blog-row d-flex flex-row justify-content-between">
                <a href="{{ route('blog.blog', $istaknuti_blogovi[5]->id) }}" class="hentry img-2 v-height my-3 gradient"
                    style="width: 32%;">
                    <div class="featured-img"
                        style="background-image: url({{ asset('img/' . $istaknuti_blogovi[5]->slika) }});"></div>
                    <div class="text">
                        <span>{{ $istaknuti_blogovi[5]->kategorija->naziv }}</span>
                        <h2>{{ $istaknuti_blogovi[5]->naslov }}</h2>
                    </div>
                </a>
                <a href="{{ route('blog.blog', $istaknuti_blogovi[6]->id) }}" class="hentry img-2 v-height my-3 gradient"
                    style="width: 66%;">
                    <div class="featured-img"
                        style="background-image: url({{ asset('img/' . $istaknuti_blogovi[6]->slika) }});"></div>
                    <div class="text">
                        <span>{{ $istaknuti_blogovi[6]->kategorija->naziv }}</span>
                        <h2>{{ $istaknuti_blogovi[6]->naslov }}</h2>
                    </div>
                </a>
            </div>
        </div>
    </section>






    <style>
        .hero {
        width: 100%;
        height: auto;
        min-height: 770px; /* Fixed height */
        background-image: url('data:image/svg+xml;utf8,<svg width="2560" height="770" viewBox="0 0 2560 997" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2560 777.511C2560 777.511 1917.56 997 1265.81 997C548.08 997 0 777.511 0 777.511V0H2560V777.511Z" fill="%23EFEBDC"/></svg>');
        background-size: 2560px 770px; /* Fixed size */
        background-repeat: no-repeat;
        background-position: center top;
        }

        .hero-section {
            padding-top: 100px;
        }

        .hero-left {
            /* padding-right: 70px; */
        }

        .hero-left p:first-child {
            font-size: 77px;
            color: #000E75;
            line-height: 1.3;
        }

        .hero-left p {
            font-size: 22px;
        }

        .hero-right img {
            width: 100%;
        }

        .gif-section,
        .azbuka-section {
            margin-top: 30px;
        }

        .gif-section .col-6 p:first-child {
            font-size: 42px;
            color: #000E75;
        }

        .gif-section .col-6 p {
            font-size: 22px;
        }

        .gif-section .col-6 img {
            width: 80%;
        }

        .azbuka-section .col-6 img {
            width: 80%;
        }

        .azbuka-section .col-6 p:first-child {
            font-size: 42px;
            color: #000E75;
        }

        .azbuka-section .col-6 p {
            font-size: 22px;
        }


        .hero-svg {
            position: absolute;
            z-index: 1;
            width: 100%;
        }

        .hero-section {
            height: auto;
            position: relative;
            z-index: 2;
            display: flex;
        }

        .gif-section {
            height: auto;

        }

        .blog-section {
            height: auto;
            margin-top: 80px;
        }

        .blog-row {
            height: 430px;
        }

        .site-footer {
            color: #ffffff;
        }

        .blog-section>div>p {
            font-size: 42px;
            color: #000E75;
            line-height: 1.3;
        }
    </style>
@endsection
