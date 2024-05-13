@extends('layouts.public')
@section('content')

<div class="container mt-4">
    <div class="row">
        <div class="col-8 offset-2 mt-4">
            <div class="d-flex justify-content-between align-items-center">
                <h1>{{ $title }}</h1>
                <a href="{{ route('videoTutorijal.unesi') }}" class="btn btn-primary btn-sm p-2">
                    Додај
                </a>
            </div>
            <table id="tabela" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Назив</th>
                        <th>Измени</th>
                        <th>Објави</th>
                        <th>Обриши</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($videoTutorijali as $vt)
                    <tr>
                        <td class="align-middle">
                            {{ $vt->naziv }}
                        </td>
                        <td class="align-middle btn-cell">
                            <a href="{{ route('videoTutorijal.izmeni', $vt->id) }}" class="btn btn-primary btn-sm py-1 pt-2">
                                <span class="bi bi-pencil"></span>
                            </a>
                        </td>
                        @if ($vt->objavljen)
                        <td class="align-middle btn-cell">
                            <a href="{{ route('videoTutorijal.unpublish', $vt->id) }}" class="btn btn-success btn-sm py-1 pt-2">
                                <span class="bi bi-check-lg"></span>
                            </a>
                        </td>
                        @else
                        <td class="align-middle btn-cell">
                            <a href="{{ route('videoTutorijal.publish', $vt->id) }}" class="btn btn-danger btn-sm py-1 pt-2">
                                <span class="bi bi-x-lg"></span>
                            </a>
                        </td>
                        @endif
                        <td class="align-middle btn-cell">
                            <a href="{{ route('videoTutorijal.obrisi', $vt->id) }}" class="btn btn-danger btn-sm py-1 pt-2">
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
