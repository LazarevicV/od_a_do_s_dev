@extends('layouts.public')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="d-flex justify-content-between align-items-center">
                <h1>{{ $title }}</h1>
                <a href="{{ route('korisnici.unesi') }}" class="btn btn-primary btn-sm p-2">
                    Додај
                </a>
            </div>
            <table id="tabela" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Име и презиме</th>
                        <th>Е-маил</th>
                        <th>Улога</th>
                        <th>Датум креирања</th>
                        <th>Измени</th>
                        <th>Објави</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td class="align-middle">
                            {{ $user->ime_prezime }}
                        </td>

                        <td class="align-middle">
                            {{ $user->email }}
                        </td>

                        <td class="align-middle">
                            {{ $user->access_level }}
                        </td>

                        <td class="align-middle">
                            {{ $user->created_at }}
                        </td>

                        <td style="width: 40px; height: 40px;" class="align-middle">
                            <a href="{{ route('korisnici.izmeni', $user->id) }}" class="btn btn-primary btn-sm py-1">
                                <span class="bi bi-pencil" style="font-size: 1.2em;"></span>
                            </a>
                        </td>
                        <td style="width: 40px; height: 40px;" class="align-middle">
                            <a href="{{ route('korisnici.obrisi', $user->id) }}" class="btn btn-danger btn-sm py-1">
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
