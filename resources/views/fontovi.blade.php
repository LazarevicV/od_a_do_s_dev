@extends('layouts.public')

@section('content')

<div class="container" style="background-color: #EFEBDC">

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
                <div class="font-preview" style="font-family: '{{ $font->naziv }}'; font-size: 22px;">
                    <p style="display: flex; justify-content: space-between; font-size: 15px;">
                        <span>{{ $font->naziv }}</span>
                        <a href="/fonts/cirilica/{{ $font->fajlovi[0]->naziv }}">
                            <i class="bi bi-file-earmark-arrow-down" style="font-size: 22px"></i>
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