@extends('layouts.public')

@section('content')
    <div class="container mt-4">
        <div class="col-6 mx-auto">
            <form action="{{ route('fontovi') }}" method="GET" class="mb-3" style="display: flex;">
                <div class="input-group">
                    <textarea name="message" id="message" class="form-control m-0" rows="2">{{ $message }}</textarea>
                </div>
                <div class="d-flex" style="margin-left: 10px; ">
                    <button type="submit" class="btn btn-primary">Прикажи</button>
                </div>
            </form>
            
            <div class="row">
                @foreach ($fonts as $font)
                    <div class="col-12 mb-2">
                        <div class="font-preview" style="font-family: '{{ $font->naziv }}'; font-size: 22px;">
                            <p style="display: flex; justify-content: space-between; font-family: 'Roboto Light', sans-serif; font-size: 15px;">
                                <span>{{ $font->naziv }}</span>
                                <a href="/fonts/cirilica/{{$font->fajlovi[0]->naziv}}">
                                    <i class="bi bi-file-earmark-arrow-down" style="font-size: 22px"></i>
                                </a>
                            </p>
                            <p>{{ $message }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
