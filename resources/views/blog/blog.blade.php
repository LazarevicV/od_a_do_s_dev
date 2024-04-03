@extends('layouts.public')
@section('content')
<section style="height: 60px">

</section>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 mb-5">
            <div class="text-center offset-2 col-8">
                <h1 style="font-size: 80px">{{$blog->naslov}}</h1>
                <img src="{{ asset('img/' . $blog->slika) }}" class="img-fluid rounded" alt="{{ $blog->naslov }}" >
            </div>
            <p class="my-5" style="font-size: 20px">Категорија: {{ $blog->kategorija->naziv }}</p>
            <p style="font-size: 20px; font-family: &quot;OrtoRNIDS-Regular&quot;">{!! $blog->sadrzaj !!}</p>
        </div>
    </div>
</div>

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

@endsection