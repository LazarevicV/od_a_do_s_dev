@extends('layouts.public')

@section('content')
    <div class="container py-5">
        <section class="d-flex align-items-center pt-4 px-3 mb-5">
            {{ Breadcrumbs::render('prikaz-svih-fontova') }}
        </section>
        <div class="col-6 mx-auto mb-2">
            <form action="{{ route('font.pretraga') }}" method="POST" class="mb-3">
                @csrf
                <div class="container-fluid p-0">
                    <div class="col-12 d-flex mb-2">
                        <div class="col-6 pe-2 d-flex">
                            <input type="text" name="pretraga" id="pretraga" placeholder="Претражите фонтове"
                                class="border-0 col-10 p-2">
                            <button class="rounded-end col-2" type="submit">
                                <span class="bi-search"></span>
                            </button>
                        </div>

                        <div class="col-3 p-0">
                            <select name="familija" class="col-12 border-0 rounded-0 bg-white">
                                <option disabled selected>Врста</option>
                                @foreach ($familije as $familija)
                                    <option value="{{ $familija->id }}">{{ $familija->naziv }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-3 p-0 ps-2">
                            <select name="tezina_id" class="col-12 border-0 rounded-0 bg-white">
                                <option disabled selected>Тежина</option>
                                @foreach ($tezine as $tezina)
                                    <option value="{{ $tezina->id }}">{{ ucwords(str_replace('_', ' ', $tezina->naziv)) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-12 mb-2">
                        @if (empty($message))
                            <textarea name="message" id="previewTextInput" class="border-0 col-12 p-2 text-start"> Овде иде текст за тестирање фонтова</textarea>
                        @else
                            <textarea name="message" id="previewTextInput" class="border-0 col-12 p-2 text-start">
                            {{ $message }}
                        </textarea>
                        @endif
                    </div>
                </div>
            </form>

            <div class="row" id="fontPreviewRow">
                @foreach ($fonts as $font)
                    <div class="col-12 mb-2">
                        <div class="font-preview mb-4" style="font-family: '{{ $font->naziv }}';">
                            <p class="mb-0">
                                <span><a href="{{ route('font.font', $font->id) }}">{{ $font->naziv }}</a></span>
                                @if (!empty($font->fajlovi[0]) && $font->downloadable == 1)
                                    <a href="/fonts/cirilica/{{ $font->fajlovi[0]->naziv }}">
                                        <i class="bi bi-file-earmark-arrow-down"></i>
                                    </a>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" style="height: 22px;" viewBox="0 0 512 512">
                                        <path
                                            d="M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32h82.7L201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3V192c0 17.7 14.3 32 32 32s32-14.3 32-32V32c0-17.7-14.3-32-32-32H320zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0 17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z"
                                            fill="#CF0A00" />
                                    </svg>
                                @endif
                            </p>
                            <p class="message"></p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        function updatePreviewText() {
            var inputText = document.getElementById('previewTextInput').value;
            document.querySelectorAll('.message').forEach(function(element) {
                element.textContent = inputText || 'Овде иде текст за тестирање фонтова';
            });
        }
        updatePreviewText();
    </script>

    <style>
        div.container.py-5 {
            background-color: #EFEBDC;
        }

        section {
            height: 80px;
        }

        form {
            display: flex;
        }

        select {
            height: 100% !important;
        }

        .font-preview>.mb-0 {
            display: flex;
            justify-content: space-between;
            font-size: 15px;
            height: 25px
        }

        .font-preview {
            font-size: 22px;
        }

        i {
            color: #CF0A00;
        }

        .bi-file-earmark-arrow-down {
            font-size: 28px
        }

        button[type="submit"] {
            background-color: transparent;
            display: flex;
            justify-content: center;
            border: none;
            cursor: pointer;
            padding-top: 0.3em;
            font-family: inherit;
            font-size: 24px;
            color: #ffffff;
            background-color: #000E75
        }

        ::placeholder {
            color: #D6CFBA;
            opacity: 1;
        }
    </style>
@endsection
