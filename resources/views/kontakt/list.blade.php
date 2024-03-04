@extends('layouts.public')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="d-flex justify-content-between align-items-center">
                <h1>{{ $title }}</h1>
            </div>
            <h4>Непрочитане поруке</h4>
            <table id="tabela" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Е-маил</th>
                        <th>Садржај</th>
                        <th>Прегледано</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($neprocitano as $kontakt)
                    <tr>
                        <td class="align-middle">
                            {{ $kontakt->email }}
                        </td>

                        <td class="align-middle">
                            {{ $kontakt->sadrzaj }}
                        </td>

                        <td style="width: 40px; height: 40px; text-align: right;" class="align-middle">
                            <a href="{{ route('kontakt.check', $kontakt->id) }}" class="btn btn-success btn-sm py-1">
                                <span class="bi bi-check-lg" style="font-size: 1.2em;"></span>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <h4>Прочитане поруке</h4>
            <table id="tabela" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Е-маил</th>
                        <th>Садржај</th>
                        <th>Обриши</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($procitano as $kontakt)
                    <tr>
                        <td class="align-middle">
                            {{ $kontakt->email }}
                        </td>

                        <td class="align-middle">
                            {{ $kontakt->sadrzaj }}
                        </td>

                        <td style="width: 40px; height: 40px;" class="align-middle">
                            <a href="{{ route('kontakt.obrisi', $kontakt->id) }}" class="btn btn-danger btn-sm py-1">
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
