@extends('layouts.public')
@section('content')

<section>
    <div class="container my-5">
        <section class="d-flex align-items-center pt-4 breadcrumbs-section">
            @if ($title == 'Упутства')
                {{ Breadcrumbs::render('uputstva') }}
            @else
                {{ Breadcrumbs::render('blogovi') }}
            @endif
        </section>
        <h1 class="main-title">{{$title}}</h1>
        <div class="my-5 description-text">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="row">
            @foreach ($blogovi as $blog)
            <div class="col-4 mb-4">
                <div class="card d-flex flex-column p-1 card-height">
                    <img src="{{ asset('img/' . $blog->slika) }}" class="card-img-top" alt="{{ $blog->naslov }}">
                    <div class="card-body d-flex flex-column justify-content-between card-body-height">
                        <h5 class="card-title">
                            {{ substr($blog->naslov, 0, 50) }}{{ strlen($blog->naslov) > 50 ? '...' : ''}}
                        </h5>
                        <p class="card-text">
                            {!! substr(strip_tags($blog->sadrzaj), 0, 150) !!}
                            {!! strlen(strip_tags($blog->sadrzaj)) > 150 ? '...' : '' !!}
                        </p>

                        <p class="card-text mb-0"><small class="text-muted">{{ $blog->kategorija->naziv }}</small></p>
                        <div class="d-flex justify-content-end ">
                            <a href="{{ route('blog.blog', $blog->id) }}">Прочитај више</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<style>
    .breadcrumbs-section {
        height: 70px;
    }

    .main-title {
        font-size: 80px;
    }

    .description-text p {
        font-size: 22px;
    }

    .card-height {
        min-height: 450px;
    }

    .card-body-height {
        min-height: 180px;
    }

    .card-title {
        font-size: 26px;
    }

    .card-text {
        font-size: 18px;
    }

    .read-more a {
        font-size: 18px;
    }

    .card-img-top {
        object-fit: cover;
        height: 200px;
        width: 100%;
    }
</style>

@endsection
