@extends('layouts.public')
@section('content')



<section>
    <div class="hero">
        <svg width="100%" viewBox="0 0 1920 747" fill="none" xmlns="http://www.w3.org/2000/svg" class="hero-svg">
            <path d="M1920 583.133C1920 583.133 1437.17 747 949.36 747C411.06 747 0 583.133 0 583.133V0H1920V583.133Z" fill="#EFEBDC"/>
        </svg>
        <div class="hero-content container d-flex justify-center align-items-start" style="padding-top: 100px;">
            <div class="hero-left col-7 black" style="padding-right: 70px">
                <p style="font-size: 80px; color: #000E75; line-height: 1.3;">Шта све има на ћирилици?</p>
                <p style="font-size: 22px">Садржаји сајтова, дизајнерска решења, линкови, домени...</p>
                <p style="font-size: 22px">Ако вам недостају ресурси, савети или идеје како да креирате дигитална решења и дигиталне производе користећи ћириличко писмо овај сајт вам може помоћи – да пронађете ресурсе и размените знања потребна да разноврстан свет ћириличког писма представите у дигиталном свету.</p>
            </div>
            <div class="hero-right col-5">
                <img src="{{ asset('img/dzivdzan.png') }}" alt="" style="width: 100%">
            </div>
        </div>
    </div>
</section>

<section>
    <div class="gif-section container d-flex justify-content-between align-items-center">
        <div class=" col-6 black" style="padding-right: 90px">
            <p style="font-size: 42px; color: #000E75;">За веб-дивелопере и програме</p>
            <p style="font-size: 22px">Како правити линкове на ћирилици, како програмирати на ћирилици, како пресловљавати? Која готова решења постоје за лакшу израду веб-сајтова на ћирилици?</p>
            <p style="font-size: 22px">Пронађите алате и упутства у секцији <span class="underline">Развој.</span></p>
        </div>
        <div class=" col-5 justift-content-left">
            <img src="{{ asset('img/gugl-razume-cirilicu-gif.gif') }}" alt="" style="width: 80%">
        </div>
    </div>
</section>

<section>
    <div class="azbuka-section container d-flex justify-content-between align-items-center">
        <div class="col-6"">
            <img src="{{ asset('img/azbuka.png') }}" alt="" style="width: 100%">
        </div>
        <div class=" col-5 justift-content-left ">
            <p style="font-size: 42px; color: #000E75;">За дизајнере и веб-дизајнере</p>
            <p style="font-size: 22px">Пронађите савршене фонтове за ваш уметнички и комерцијални пројекат. Тестирајте приказе и пронађите додатне ресурсе за оригиналне дизајнерске подухвате. </p>
        </div>
    </div>
</section>

<section>
    <div class="blog-section container d-flex flex-column justify-content-evenly retro-layout-alt mb-5 p-0">
        <div>
            <p class="" style="font-size: 42px; color: #000E75; line-height: 1.3;">Истакнути чланци</p>
        </div>
        <div class="blog-row d-flex flex-row justify-content-between">
            <a href="{{ route('blog.blog', $istaknuti_blogovi[2]->id) }}" class="hentry img-2 v-height my-3 gradient" style="width: 66%;">
                <div class="featured-img" style="background-image: url({{asset('img/' . $istaknuti_blogovi[2]->slika)}});"></div>
                <div class="text">
                    <span>{{$istaknuti_blogovi[2]->kategorija->naziv}}</span>
                    <h2>{{$istaknuti_blogovi[2]->naslov}}</h2>
                </div>
            </a>
            <a href="{{ route('blog.blog', $istaknuti_blogovi[1]->id) }}" class="hentry img-2 v-height my-3 gradient" style="width: 32%;">
                <div class="featured-img" style="background-image: url({{asset('img/' . $istaknuti_blogovi[1]->slika)}});"></div>
                <div class="text">
                    <span>{{$istaknuti_blogovi[1]->kategorija->naziv}}</span>
                    <h2>{{$istaknuti_blogovi[1]->naslov}}</h2>
                </div>
            </a>
        </div>

        <div class="blog-row d-flex flex-row justify-content-between">
            <a href="{{ route('blog.blog', $istaknuti_blogovi[0]->id) }}" class="hentry img-2 v-height my-3 gradient" style="width: 32%;">
                <div class="featured-img" style="background-image: url({{asset('img/' . $istaknuti_blogovi[0]->slika)}});"></div>
                <div class="text">
                    <span>{{$istaknuti_blogovi[0]->kategorija->naziv}}</span>
                    <h2>{{$istaknuti_blogovi[0]->naslov}}</h2>
                </div>
            </a>
            <a href="{{ route('blog.blog', $istaknuti_blogovi[3]->id) }}" class="hentry img-2 v-height my-3 gradient" style="width: 32%;">
                <div class="featured-img" style="background-image: url({{asset('img/' . $istaknuti_blogovi[3]->slika)}});"></div>
                <div class="text">
                    <span>{{$istaknuti_blogovi[3]->kategorija->naziv}}</span>
                    <h2>{{$istaknuti_blogovi[3]->naslov}}</h2>
                </div>
            </a>
            <a href="{{ route('blog.blog', $istaknuti_blogovi[4]->id) }}" class="hentry img-2 v-height my-3 gradient" style="width: 32%;">
                <div class="featured-img" style="background-image: url({{asset('img/' . $istaknuti_blogovi[4]->slika)}});"></div>
                <div class="text">
                    <span>{{$istaknuti_blogovi[4]->kategorija->naziv}}</span>
                    <h2>{{$istaknuti_blogovi[4]->naslov}}</h2>
                </div>
            </a>
        </div>

        <div class="blog-row d-flex flex-row justify-content-between">
            <a href="{{ route('blog.blog', $istaknuti_blogovi[5]->id) }}" class="hentry img-2 v-height my-3 gradient" style="width: 32%;">
                <div class="featured-img" style="background-image: url({{asset('img/' . $istaknuti_blogovi[5]->slika)}});"></div>
                <div class="text">
                    <span>{{$istaknuti_blogovi[5]->kategorija->naziv}}</span>
                    <h2>{{$istaknuti_blogovi[5]->naslov}}</h2>
                </div>
            </a>
            <a href="{{ route('blog.blog', $istaknuti_blogovi[6]->id) }}" class="hentry img-2 v-height my-3 gradient" style="width: 66%;">
                <div class="featured-img" style="background-image: url({{asset('img/' . $istaknuti_blogovi[6]->slika)}});"></div>
                <div class="text">
                    <span>{{$istaknuti_blogovi[6]->kategorija->naziv}}</span>
                    <h2>{{$istaknuti_blogovi[6]->naslov}}</h2>
                </div>
            </a>
        </div>
    </div>
</section>

<section>
    <div class="forum-section container d-flex justify-content-center align-items-center mb-3">
        <div class="col-8 mb-5 d-flex justify-content-between" style="background-color: #EFEBDC; padding: 60px">
            <div class="col-7">
                <h3 class="mb-4" style="font-size: 42px">Форум</h3>
                <p class="mb-5" style="font-size: 22px">Укључите се у разговор – размените предлоге, идеје, трикове, ресурсе, предложите садржаје, пријавите грешке. Региструјте се и разговарајте са другим корисницима на форуму.</p>
                <p style="font-size: 22px; "><a href="#">Региструјте се</a></p>
            </div>
            <div class="col-4">
                <img src="{{ asset('img/forum.png') }}" alt="" style="width: 100%">
            </div>
        </div>
    </div>
</section>


<style>
    .hero-svg {
    position: absolute;
    z-index: 1;
    width: 100%;
}

.hero-content {
    height: 767px;
    position: relative;
    z-index: 2;
    display: flex;
}

.gif-section{
    height: 500px;

}

.blog-section{
    height: 1460px;
    margin-top: 80px;
}

.blog-row{
    height: 33.333%;
}

*{
    color: #000933;
}

.site-footer{
    color: #ffffff;
}
</style>
@endsection