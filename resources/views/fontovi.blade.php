@extends('layouts.public')

@section('content')

<div class="container py-5" style="background-color: #EFEBDC">
    <section class="d-flex align-items-center pt-4 px-3 mb-5" style="height: 80px">
        {{ Breadcrumbs::render('prikaz-svih-fontova') }}
    </section>
    <div class="col-6 mx-auto mb-2">
        <section style="height: 160px">
            {{ Breadcrumbs::render('prikaz-svih-fontova') }}
        </section>
        <form action="{{ route('fontovi') }}" method="GET" class="mb-3" style="display: flex;">
            <div class="container-fluid p-0">
                <div class="col-12 d-flex mb-2">
                    <div class="col-6 pe-2 d-flex">
                        <input type="text" name="pretraga" id="pretraga" placeholder="Претражите фонтове"
                            class="border-0 col-10 p-2" style="font-size: 18px;">
                        <button class="rounded-end col-2" type="submit"
                            style="background-color: transparent; display: flex; justify-content: center; border: none; cursor: pointer; padding-top: 0.3em; font-family: inherit; font-size: 24px; color: #ffffff; background-color: #000E75">
                            <span class="bi-search"></span>
                        </button>
                    </div>

                    <div class="col-3 p-0">
                        <select name="style" class="col-12 border-0 rounded-0 bg-white" style="height: 100%">
                            <option value="svi" {{ $style==='svi' ? ' selected' : '' }}>Врста</option>
                            <option value="all" {{ $style==='all' ? ' selected' : '' }}>Врста 1</option>
                            <option value="regular" {{ $style==='regular' ? ' selected' : '' }}>Врста 2</option>
                            <option value="bold" {{ $style==='bold' ? ' selected' : '' }}>Врста 3</option>
                            <option value="italic" {{ $style==='italic' ? ' selected' : '' }}>Врста 4</option>
                            <option value="bolditalic" {{ $style==='bolditalic' ? ' selected' : '' }}>Врста 5</option>
                        </select>
                    </div>

                    <div class="col-3 p-0 ps-2">
                        <select name="style" class="col-12 border-0 rounded-0 bg-white" style="height: 100%">
                            <option value="svi" {{ $style==='svi' ? ' selected' : '' }}>Тежина</option>
                            <option value="all" {{ $style==='all' ? ' selected' : '' }}>Svi</option>
                            <option value="regular" {{ $style==='regular' ? ' selected' : '' }}>Regular</option>
                            <option value="bold" {{ $style==='bold' ? ' selected' : '' }}>Bold</option>
                            <option value="italic" {{ $style==='italic' ? ' selected' : '' }}>Italic</option>
                            <option value="bolditalic" {{ $style==='bolditalic' ? ' selected' : '' }}>Bold Italic
                            </option>
                        </select>
                    </div>
                </div>
                <div class="col-12 mb-2">
                    <textarea id="previewTextInput" class="border-0 col-12 p-2 text-start"
                        style="font-size: 18px; height: 70px;"
                        onfocus="if(this.value == 'Овде иде текст за тестирање фонтова') { this.value = ''; }"
                        onblur="if(this.value == '') { this.value = 'Овде иде текст за тестирање фонтова'; }"
                        oninput="updatePreviewText()">Овде иде текст за тестирање фонтова</textarea>
                </div>
            </div>
        </form>

        <div class="row" id="fontPreviewRow">
            @foreach ($filteredFonts as $font)
            <div class="col-12 mb-2">
                <div class="font-preview mb-4" style="font-family: '{{ $font->naziv }}'; font-size: 22px;">
                    <p class="mb-0" style="display: flex; justify-content: space-between; font-size: 15px; height: 25px">
                        <span><a href="{{ route('font.font', $font->id) }}">{{ $font->naziv }}</a></span>
                        <a href="/fonts/cirilica/{{ $font->fajlovi[0]->naziv }}">
                            {{-- @if ($font->downloadable == 1) --}}
                                <i class="bi bi-file-earmark-arrow-down" style="font-size: 22px; color: #CF0A00"></i>
                            {{-- @else  --}}
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" style="height: 22px;" viewBox="0 0 512 512">
                                    <path d="M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32h82.7L201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3V192c0 17.7 14.3 32 32 32s32-14.3 32-32V32c0-17.7-14.3-32-32-32H320zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z" fill="#CF0A00"/>
                                </svg> --}}
                            {{-- @endif --}}
                        </a>                        
                    </p>
                    <p class="message">{{ $font->naziv }}</p> <!-- Default text will be the font name -->
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
            element.textContent = inputText || 'Овде иде текст за тестирање фонтова'; // Fallback to default if empty
        });
    }
    // Initialize with default text
    updatePreviewText();
</script>

<style>
    ::placeholder {
        color: #D6CFBA;
        opacity: 1;
        /* Firefox */
    }
</style>
@endsection