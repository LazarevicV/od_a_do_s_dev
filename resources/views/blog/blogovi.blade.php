@extends('layouts.public')
@section('content')

<div class="container mt-5">
    <div class="row">
        @foreach ($blogovi as $blog)
            <div class="col-4 mb-4">
                <div class="card d-flex flex-column p-1">
                    <img src="{{ asset('img/' . $blog->slika) }}" class="card-img-top" alt="{{ $blog->naslov }}">
                    <div class="card-body d-flex flex-column justify-content-between" style="min-height: 200px;">
                        <h5 class="card-text">{{ substr($blog->naslov, 0, 50) }}{{ strlen($blog->naslov) > 50 ? '...' : '' }}</h5>
                        <p class="card-text">
                            {!! substr(strip_tags($blog->sadrzaj), 0, 140) !!}
                            {!! strlen(strip_tags($blog->sadrzaj)) > 140 ? '...' : '' !!}
                        </p>
                        
                        <p class="card-text"><small class="text-muted">{{ $blog->kategorija }}</small></p>
                        <a href="{{ route('blog.blog', $blog->id) }}" class="btn btn-primary p-2">Прочитај више</a>
                    </div>
                </div>
            </div>
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
