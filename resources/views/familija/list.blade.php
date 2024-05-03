@extends('layouts.public')
@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="d-flex justify-content-between align-items-center">
                    <h1>{{ $title }}</h1>
                    <a href="{{ route('familija.unesi') }}" class="btn btn-primary btn-sm p-2">
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
                        @foreach ($familije as $familija)
                            <tr>
                                <td class="align-middle">
                                    {{ $familija->naziv }}
                                </td>
                                <td style="width: 40px; height: 40px;" class="align-middle">
                                    <a href="{{ route('familija.izmeni', $familija->id) }}" class="btn btn-primary btn-sm py-1">
                                        <span class="bi bi-pencil" style="font-size: 1.2em;"></span>
                                    </a>
                                </td>
                                @if ($familija->objavljen)
                                    <td style="width: 40px; height: 40px;" class="align-middle">
                                        <a href="{{ route('familija.unpublish', $familija->id) }}" class="btn btn-success btn-sm py-1">
                                            <span class="bi bi-check-lg" style="font-size: 1.2em;"></span>
                                        </a>
                                    </td>
                                @else
                                    <td style="width: 40px; height: 40px;" class="align-middle">
                                        <a href="{{ route('familija.publish', $familija->id) }}" class="btn btn-danger btn-sm py-1">
                                            <span class="bi bi-x-lg" style="font-size: 1.2em;"></span>
                                        </a>
                                    </td>
                                @endif
                                <td style="width: 40px; height: 40px;" class="align-middle">
                                    <a href="{{ route('familija.obrisi', $familija->id) }}" class="btn btn-danger btn-sm py-1">
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