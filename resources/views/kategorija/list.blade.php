@extends('layouts.public')
@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="d-flex justify-content-between align-items-center">
                    <h1>{{ $title }}</h1>
                    <a href="{{ route('kategorija.unesi') }}" class="btn btn-primary btn-sm p-2">
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
                        @foreach ($kategorije as $kategorija)
                            <tr>
                                <td class="align-middle">
                                    {{ $kategorija->naziv }}
                                </td>
                                <td style="width: 40px; height: 40px;" class="align-middle">
                                    <a href="{{ route('kategorija.izmeni', $kategorija->id) }}" class="btn btn-primary btn-sm py-1">
                                        <span class="bi bi-pencil" style="font-size: 1.2em;"></span>
                                    </a>
                                </td>
                                @if ($kategorija->objavljen)
                                    <td style="width: 40px; height: 40px;" class="align-middle">
                                        <a href="{{ route('kategorija.unpublish', $kategorija->id) }}" class="btn btn-success btn-sm py-1">
                                            <span class="bi bi-check-lg" style="font-size: 1.2em;"></span>
                                        </a>
                                    </td>
                                @else
                                    <td style="width: 40px; height: 40px;" class="align-middle">
                                        <a href="{{ route('kategorija.publish', $kategorija->id) }}" class="btn btn-danger btn-sm py-1">
                                            <span class="bi bi-x-lg" style="font-size: 1.2em;"></span>
                                        </a>
                                    </td>
                                @endif
                                <td style="width: 40px; height: 40px;" class="align-middle">
                                    <a href="{{ route('kategorija.obrisi', $kategorija->id) }}" class="btn btn-danger btn-sm py-1">
                                        <span class="bi bi-trash" style="font-size: 1.2em;"></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection