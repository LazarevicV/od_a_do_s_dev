@extends('layouts.public')
@section('content')
<section style="height: 60px">

</section>
<section>
    <div class="container my-5">
        <h1 style="font-size: 80px">{{$title}}</h1>
        <div class="my-5" style="font-size: 22px">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
        </div>
    <div class="row">
        @foreach ($blogovi as $blog)
        <div class="col-4 mb-4">
            <div class="card d-flex flex-column p-1" style="min-height: 450px;">
                <img src="{{ asset('img/' . $blog->slika) }}" class="card-img-top" alt="{{ $blog->naslov }}">
                <div class="card-body d-flex flex-column justify-content-between" style="min-height: 180px;">
                    <h5 class="card-text mb-0" style="font-size: 26px;">
                        {{ substr($blog->naslov, 0, 50) }}{{ strlen($blog->naslov) > 50 ? '...' : ''}}
                        {{-- {{$blog->naslov}} --}}
                    </h5>
                    <p class="card-text mb-0" style="font-size: 18px;">
                        {!! substr(strip_tags($blog->sadrzaj), 0, 150) !!}
                        {!! strlen(strip_tags($blog->sadrzaj)) > 150 ? '...' : '' !!}
                    </p>

                    <p class="card-text mb-0"><small class="text-muted">{{ $blog->kategorija->naziv }}</small></p>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('blog.blog', $blog->id) }}" style="font-size: 18px;" >Прочитај више</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<style>
    .card-img-top {
        object-fit: cover;
        height: 200px;
        /* Set your desired fixed height */
        width: 100%;
        /* Adjust this if needed based on your design */
    }
</style>

@endsection