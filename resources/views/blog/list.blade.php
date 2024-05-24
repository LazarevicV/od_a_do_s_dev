@extends('layouts.public')
@section('content')

<div class="container mt-4">
    <div class="row">
        <div class="col-8 offset-2 mt-4">
            @if ($broj_istaknutih<7)
            <div class="bg-danger text-white p-2 text-center rounded-1 mb-3">
                <p class="m-0" style="font-size:20px">Минималан број истакнутих блогова је 7, морате истакнути још {{7 - $broj_istaknutih}}</p>
            </div>
            @endif
            <div class="d-flex justify-content-between align-items-center">
                <h1>{{ $title }}</h1>
                <a href="{{ route('blog.unesi') }}" class="btn btn-primary btn-sm p-2">
                    Додај
                </a>
            </div>
            <table id="tabela" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Наслов</th>
                        <th>Измени</th>
                        <th>Објави</th>
                        <th>Истакни</th>
                        <th>Обриши</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogovi as $blog)
                    <tr>
                        <td class="align-middle">
                            {{ $blog->naslov }}
                        </td>
                        <td class="align-middle btn-cell">
                            <a href="{{ route('blog.izmeni', $blog->id) }}" class="btn btn-primary btn-sm py-1 pt-2">
                                <span class="bi bi-pencil"></span>
                            </a>
                        </td>
                        @if ($blog->objavljen)
                        <td class="align-middle btn-cell">
                            <a href="{{ route('blog.unpublish', $blog->id) }}" class="btn btn-success btn-sm py-1 pt-2">
                                <span class="bi bi-check-lg"></span>
                            </a>
                        </td>
                        @else
                        <td class="align-middle btn-cell">
                            <a href="{{ route('blog.publish', $blog->id) }}" class="btn btn-danger btn-sm py-1 pt-2">
                                <span class="bi bi-x-lg"></span>
                            </a>
                        </td>
                        @endif
                        @if ($blog->istaknut)
                        <td class="align-middle btn-cell">
                            <a href="{{ route('blog.obrisi_istakni', $blog->id) }}" class="btn btn-warning btn-sm py-1 pt-2">
                                <span class="bi bi-star"></span>
                            </a>
                        </td>
                        @else
                        <td class="align-middle btn-cell">
                            <a href="{{ route('blog.istakni', $blog->id) }}" class="btn btn-info btn-sm py-1 pt-2">
                                <span class="bi bi-star"></span>
                            </a>
                        </td>
                        @endif
                        <td class="align-middle btn-cell">
                            <a href="{{ route('blog.obrisi', $blog->id) }}" class="btn btn-danger btn-sm py-1 pt-2">
                                <span class="bi bi-trash"></span>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

    <style>
        .btn-cell {
            width: 40px;
            height: 40px;
        }

        .bi {
            font-size: 1.2em;
        }
    </style>
@endsection
