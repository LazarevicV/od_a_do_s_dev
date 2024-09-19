@extends('layouts.public')
@section('content')
    <section class="top-section"></section>

    <div class="container mt-5">
        {{ Breadcrumbs::render('single-blog', $id) }}
        <div class="row">
            <div class="col-md-12 mb-5">
                <div class="text-center offset-2 col-8">
                    <h1 class="main-title">{{ $blog->naslov }}</h1>
                    <img src="{{ asset('img/' . $blog->slika) }}" class="img-fluid rounded" alt="{{ $blog->naslov }}">
                </div>
                <p class="my-5 kategorija">Категорија: {{ $blog->kategorija->naziv }}</p>
                <div class="blog-content">
                  <p>{!! $blog->sadrzaj !!}</p>
              </div>
            </div>
        </div>
    </div>

    <section class="forum-section">
        <div class="container d-flex justify-content-center align-items-center mb-3">
            <div class="col-8 mb-5 d-flex justify-content-between flex-column flex-md-row">
                <div class="col-7">
                    <h3 class="mb-4 forum-title">Форум</h3>
                    <p class="mb-5 forum-description">Укључите се у разговор – размените предлоге, идеје, трикове,
                        ресурсе, предложите садржаје, пријавите грешке. Региструјте се и разговарајте са другим корисницима
                        на форуму.</p>
                    <p class="forum-description"><a href="#">Региструјте се</a></p>
                </div>
                <div class="col-4">
                    <img src="{{ asset('img/forum.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <style>
        .top-section {
            height: 60px;
        }

        .main-title {
            font-size: 50px;
        }

        .content-text,
        .forum-text {
            font-size: 20px;
        }

        .forum-section .container {
            background-color: #EFEBDC;
            padding-top: 60px;
        }

        .forum-title {
            font-size: 42px;
        }

        .forum-description {
            font-size: 22px;
        }

        .content-text {
            font-family: 'OrtoRNIDS-Regular';
        }

        .kategorija {
            font-size: 20px;
        }

        .blog-content iframe {
            width: 100%;
            height: auto;
            aspect-ratio: 16/9;
            border: 0;
        }

        @media (max-width: 768px) {
            .main-title {
                font-size: 30px;
            }

            .col-8.mb-5.d-flex.justify-content-between {
                flex-direction: column;
                align-items: center;
            }

            .col-7, .col-4 {
                width: 100%;
                text-align: center;
            }

            .blog-content iframe {
                aspect-ratio: 16/9;
            }
        }

    </style>
@endsection
