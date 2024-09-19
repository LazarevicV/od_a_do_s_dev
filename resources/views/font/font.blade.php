@extends('layouts.public')

@section('content')
    <div class="container py-5 pozadina">
        <div class="kont">
            <section class="d-flex align-items-center pt-4 ps-2 mb-2 breadcrumbs-section">
                {{ Breadcrumbs::render('single-font', $id) }}
            </section>
            <div class="">
                <h1 class="naslov">{{ $font->naziv }}</h1>
                @if ($font->downloadable == 1)
                    <p class="collaborators ps-2">
                        Израдили:
                        <a href="https://tipometar.org/index.html" target="_blank" class="collaborator-link">Типометар</a> и
                        <a href="https://www.rnids.rs/" target="_blank" class="collaborator-link">РНИДС</a>
                    </p>
                @endif
            </div>
            <div class="col-6 mx-auto mt-5 mb-2">
                <div class="container-fluid p-0">
                    <div class="col-12 mb-2">
                        <textarea id="previewTextInput" class="border-0 col-12 p-2 text-start">Овде иде текст за тестирање фонтова</textarea>
                    </div>
                </div>
                <div class="row pt-4" id="fontPreviewRow">
                    <div class="col-12 mb-3">
                        <div class="font-preview regular">
                            <p class="style-name">Regular</p>
                            <p class="message"></p>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="font-preview italic">
                            <p class="style-name">Italic</p>
                            <p class="message"></p>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="font-preview bold">
                            <p class="style-name">Bold</p>
                            <p class="message"></p>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="font-preview bold italic">
                            <p class="style-name">Bold Italic</p>
                            <p class="message"></p>
                        </div>
                    </div>
                </div>
    
                @if ($font->downloadable)
                    <a href="/fonts/cirilica/{{ $font->fajlovi[0]->naziv }}">
                        <button class="btn btn-primary download-btn">
                            <span>Преузмите фонт </span>
                            <i class="ps-2 bi bi-file-earmark-arrow-down"></i>
                        </button>
                    </a>
                @endif
    
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
  
      document.getElementById('previewTextInput').addEventListener('input', updatePreviewText);
  
      updatePreviewText();
  </script>
  

    <style>
        .bold{
            font-weight: bold;
        }

        .italic{
            font-style: italic
        }
        .pozadina {
            background-color: #EFEBDC;
            min-height: 90vh;
            display: flex;
            justify-content: center
        }
        .kont{
          max-width: 700px; 
        }
        .breadcrumbs-section {
            height: 80px;
        }

        .naslov {
            font-size: 80px;
            color: #000E75;
        }

        .collaborators {
            font-size: 18px;
        }

        .collaborator-link {
            border-bottom: 1px solid #000E75;
            padding-bottom: 1px;
        }

        #previewTextInput {
            font-size: 18px;
            height: 70px;
        }

        .font-preview {
            font-size: 22px;
        }

        .style-name {
            font-size: 16px;
            color: #CF0A00;
            margin-bottom: 0px;
        }

        .download-btn {
            font-size: 15px;
            padding: 10px 18px;
            vertical-align: center;
        }

        .bi-file-earmark-arrow-down {
            font-size: 25px;
        }

        ::placeholder {
            color: #D6CFBA;
            opacity: 1;
            /* Firefox */
        }
    </style>
@endsection
