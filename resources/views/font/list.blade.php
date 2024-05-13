@extends('layouts.public')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-8 offset-2 mt-4">
            <div class="d-flex justify-content-between align-items-center">
                <h1>{{ $title }}</h1>
                <a href="{{ route('font.unesi') }}" class="btn btn-primary btn-sm p-2">
                    Додај фонт
                </a>
            </div>
            <table id="tabela" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Назив фонта</th>
                        <th>Фајлови</th>
                        <th>Фамилија</th>
                        <th></th>
                        <th>Измени</th>
                        <th>Објави</th>
                        <th>Обриши</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fontovi as $font)
                    <tr>
                        <td class="align-middle">
                            {{ $font->naziv }}
                        </td>
                        <td class="align-middle">
                            @foreach ($font->fajlovi as $file)
                            {{ $file->naziv }}&nbsp;
                            @endforeach
                        </td>
                        <td class="align-middle">{{ $font->familija->naziv }}</td>
                        <td>
                            <a href="{{ route('font.unesifile', $font->id) }}" class="btn btn-link btn-sm py-1 pt-2 add-file-btn">
                                Додај фајл
                            </a>
                        </td>
                        <td class="align-middle btn-cell">
                            <a href="{{ route('font.izmeni', $font->id) }}" class="btn btn-primary btn-sm py-1 pt-2">
                                <span class="bi bi-pencil"></span>
                            </a>
                        </td>
                        @if ($font->objavljen)
                        <td class="align-middle btn-cell">
                            <a href="{{ route('font.unpublish', $font->id) }}" class="btn btn-success btn-sm py-1 pt-2">
                                <span class="bi bi-check-lg"></span>
                            </a>
                        </td>
                        @else
                        <td class="align-middle btn-cell">
                            <a href="{{ route('font.publish', $font->id) }}" class="btn btn-danger btn-sm py-1 pt-2">
                                <span class="bi bi-x-lg"></span>
                            </a>
                        </td>
                        @endif
                        <td class="align-middle btn-cell">
                            <a href="{{ route('font.obrisi', $font->id) }}" class="btn btn-danger btn-sm py-1 pt-2">
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
    
    .bi {
        font-size: 1.2em;
    }
    .btn-cell {
        width: 40px; 
        height: 40px;
    }
    .add-file-btn {
        border: 1px solid #214252;
    }
</style>
@endsection
