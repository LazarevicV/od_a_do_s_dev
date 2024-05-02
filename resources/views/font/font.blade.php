@extends('layouts.public')

@section('content')

<div class="container py-5" style="background-color: #EFEBDC; min-height: 90vh">
    <section class="d-flex align-items-center pt-4 px-3 mb-2" style="height: 80px">

        {{-- MESTO ZA BREADCRUMBS --}}

        {{-- {{ Breadcrumbs::render('') }} --}}
    </section>
    <div class="ps-5 d-flex">
        <h1 style="font-size: 80px; color: #000E75;">{{$font->naziv}}</h1>
        {{-- @if ($font->downloadable == 1)
        <p style="font-size: 18px;"> &nbsp Израдили: <a href="https://tipometar.org/index.html" target="_blank" style="border-bottom: 1px solid #000E75; padding-bottom: 1px">Типометар</a> и <a href="https://www.rnids.rs/" target="_blank" style="border-bottom: 1px solid #000E75; padding-bottom: 1px">РНИДС</a> </p>
        @endif --}}
    </div>
    <div class="col-6 mx-auto mt-5 mb-2">
        <div class="container-fluid p-0">
            <div class="col-12 mb-2">
                <textarea id="previewTextInput" class="border-0 col-12 p-2 text-start" style="font-size: 18px; height: 70px;" onfocus="if(this.value == 'Овде иде текст за тестирање фонтова') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Овде иде текст за тестирање фонтова'; }" oninput="updatePreviewText()">Овде иде текст за тестирање фонтова</textarea>
            </div>
        </div>    
        <div class="row pt-4" id="fontPreviewRow">
            <div class="col-12 mb-3">
                <div class="font-preview" style="font-family: '{{ $font->naziv }}'; font-size: 22px;">
                    <p class="mb-1" style="font-size: 16px; color: #CF0A00">Regular</p>
                    <p class="message"></p>
                </div>
            </div>
            <div class="col-12 mb-3">
                <div class="font-preview" style="font-family: '{{ $font->naziv }}'; font-style: italic; font-size: 22px;">
                    <p class="mb-1" style="font-size: 16px; color: #CF0A00">Italic</p>
                    <p class="message"></p>
                </div>
            </div>
            <div class="col-12 mb-3">
                <div class="font-preview" style="font-family: '{{ $font->naziv }}'; font-weight: bold; font-size: 22px;">
                    <p class="mb-1" style="font-size: 16px; color: #CF0A00">Bold</p>
                    <p class="message"></p>
                </div>
            </div>
            <div class="col-12 mb-3">
                <div class="font-preview" style="font-family: '{{ $font->naziv }}'; font-weight: bold; font-style: italic; font-size: 22px;">
                    <p class="mb-1" style="font-size: 16px; color: #CF0A00">Bold Italic</p>
                    <p class="message"></p>
                </div>
            </div>
        </div>

        @if ($font->downloadable)
            <a href="/fonts/cirilica/{{ $font->fajlovi[0]->naziv }}">
                <button class="btn btn-primary px-3 pt-2 d-flex align-items-center" style="font-size: 15px; padding-bottom: 3px">
                    <p class="mb-0">Преузмите фонт</p> 
                    <i class="ps-2 bi bi-file-earmark-arrow-down" style="font-size: 30px"></i>
                </button>
            </a>
        @endif
        
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
        opacity: 1; /* Firefox */
    }
</style>
@endsection
