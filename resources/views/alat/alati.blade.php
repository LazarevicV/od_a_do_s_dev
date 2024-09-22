@extends('layouts.public')
@section('content')

    <section>
        <div class="container my-5">
            <section class="d-flex align-items-center pt-4">
                {{ Breadcrumbs::render('alati') }}
            </section>
            <h1>{{ $parametri[0]->parametar_value }}</h1>
            <div class="my-5">
                {!! $parametri[1]->parametar_value !!}
            </div>
            <div class="alati">
                @if (!empty($alati[0]))
                    @foreach ($alati as $alat)
                        @if ($alat->objavljen)
                            <div class="alat d-flex flex-column justify-content-between p-4">
                                <div class="naslov d-flex justify-content-between align-items-center pb-3">
                                    <h4>{{ $alat->naziv }}</h4>
                                    <img src="{{ asset('img/' . $alat->ikonica) }}" alt="" class="ikonica">
                                </div>
                                <p class="mb-4">{{ $alat->opis }}</p>
                                <a href="{{ $alat->url }}" class="link-alat">Линк ка алату</a>
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <style>
      .breadcrumbs-section {
          height: 70px;
      }
  
      .container.my-5 h1 {
          font-size: 80px;
      }
  
      .container.my-5 .my-5 p {
          font-size: 22px;
      }
  
      .alati {
          display: grid;
          grid-template-columns: repeat(auto-fill, minmax(600px, 1fr));
          gap: 25px;
      }
  
      .alat {
          font-size: 18px;
          border: 1px solid #ccc;
          padding: 10px;
          background-color: #EFEBDC;
      }
  
      .alat a {
          font-size: 22px;
      }
  
      .naslov .ikonica {
          height: 100%;
      }
  
      /* Media query for screens smaller than 600px */
      @media (max-width: 768px) {
          .alati {
              grid-template-columns: 1fr;
              gap: 15px;
          }
  
          .container.my-5 h1 {
              font-size: 50px;
          }
  
          .container.my-5 .my-5 p {
              font-size: 18px;
          }
  
          .alat {
              font-size: 16px;
              padding: 8px;
          }
  
          .alat a {
              font-size: 20px;
          }
      }
  </style>
  
@endsection
