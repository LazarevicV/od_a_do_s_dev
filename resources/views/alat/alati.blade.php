@extends('layouts.public')
@section('content')

<section>
    <div class="container my-5">
        <section class="d-flex align-items-center pt-4" style="height: 70px">
            {{ Breadcrumbs::render('alati') }}
        </section>
        <h1 style="font-size: 80px">{{$title}}</h1>
        <div class="my-5" style="font-size: 22px">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="alati">
            @if (!empty($alati[0]))
                @foreach ($alati as $alat)
                    @if ($alat->objavljen)
                        <div class="alat d-flex flex-column justify-content-between p-4">
                            <div class="naslov d-flex justify-content-between pb-3">
                                <h4>{{$alat->naziv}}</h4>
                                {{-- <img src="{{ asset('img/.png') }}" alt="" class=""> --}}
                            </div>
                            <p class="mb-4">{{$alat->opis}}</p>
                            <a href="{{$alat->url}}" class="">Линк ка алату</a>
                        </div>
                    @endif
                @endforeach
            @endif
        </div>
    </div>
</section>

<style>
    .alati {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(600px, 1fr));
        gap: 25px;
    }

    .alat {
        font-size: 18px;
        border: 1px solid #ccc;
        padding: 10px;
        background-color: #EFEBDC ;
    }
    .alat a{
        font-size: 22px;
    }
    *{
        color: #000933;
    }
</style>
@endsection
