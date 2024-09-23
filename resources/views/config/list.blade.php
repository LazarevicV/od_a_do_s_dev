@extends('layouts.public')
@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-8 offset-2 mt-4">
                <div class="d-flex justify-content-between align-items-center">
                    <h1>{{ $title }}</h1>
                </div>
                <table id="tabela" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Измени</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($parametri as $parametar)
                            <tr>
                                <td class="align-middle">
                                    {!! $parametar->parametar_value !!}
                                </td>
                                <td class="align-middle btn-cell">
                                    <a href="{{ route('config.izmeni', $parametar->id) }}"
                                        class="btn btn-primary btn-sm py-1 pt-2">
                                        <span class="bi bi-pencil"></span>
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
