@extends('layouts.public')
@section('content')
    <div class="container my-5 col-6">
        <h1>{{ $title }}</h1>
        <form action="{{ route('blog.unesiSubmit') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="naslov" class="form-label">Наслов:</label>
                <input type="text" class="form-control" name="naslov" required>
            </div>

            <div class="mb-3">
                <label for="sadrzaj" class="form-label">Садржај:</label>
                <textarea id="editor" name="sadrzaj" required></textarea>
            </div>

            <div class="mb-3">
                <label for="kategorija" class="form-label">Категорија:</label>
                <select required name="kategorija" class="form-control">
                    @foreach ($kategorije as $kategorija)
                        <option value="{{ $kategorija->id }}" @if ($kategorija->id == 4) selected @endif>
                            {{ $kategorija->naziv }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="slika" class="form-label">Слика:</label>
                <input type="file" class="form-control" name="slika" id="imageUpload" accept="image/*" required>
                <img id="imagePreview" src="#" alt="Odabrana slika" />
            </div>

            <div class="mb-3">
                <label for="objavljen" class="form-label">Објављен:</label>
                <select class="form-select" name="objavljen">
                    <option value="0">Не</option>
                    <option value="1">Да</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="istaknut" class="form-label">Истакнути:</label>
                <select class="form-select" name="istaknut">
                    <option value="0">Не</option>
                    <option value="1">Да</option>
                </select>
            </div>

            <div class="mb-3">
                <div class="row justify-content-center">
                    <button type="submit" class="col-2 mx-1 btn btn-primary">Унеси</button>
                    <a href="{{ route('blog.list') }}" class="col-2 mx-1 btn btn-link otkazi">Откажи</a>
                </div>
            </div>
        </form>
    </div>
    <script>
        document.getElementById('imageUpload').addEventListener('change', function(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('imagePreview');
                output.src = reader.result;
                output.style.display = 'block';
                output.style.height = '50px';
                output.style.width = 'auto';
            };
            reader.readAsDataURL(event.target.files[0]);
        });
    </script>
    <script>
        tinymce.init({
            selector: '#editor',
            setup: function(editor) {
                editor.on('change', function() {
                    editor.save();
                });
            },
            plugins: 'code powerpaste casechange importcss searchreplace autolink advcode visualblocks visualchars fullscreen image link media mediaembed template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists checklist wordcount tinymcespellchecker a11ychecker imagetools textpattern noneditable help formatpainter permanentpen pageembed charmap mentions quickbars linkchecker advtable',
            menubar: 'edit view insert format tools table tc',
            toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent | numlist bullist checklist | forecolor backcolor casechange permanentpen formatpainter removeformat | charmap | fullscreen code | insertfile image media pageembed link anchor',
            content_style: "* {font-family: 'OrtoRNIDS-Regular'; }"
        });
    </script>

    <style>
        img {
            display: none;
            max-width: 500px;
            max-height: 500px;
        }
    </style>
@endsection
