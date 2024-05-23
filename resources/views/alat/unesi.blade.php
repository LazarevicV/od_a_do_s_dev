@extends('layouts.public')
@section('content')
    <div class="container my-5 col-6">
        <h1>{{ $title }}</h1>
        <form action="{{ route('alat.unesiSubmit') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="naziv" class="form-label">Назив:</label>
                <input type="text" class="form-control" name="naziv" required>
            </div>

            <div class="mb-3">
                <label for="opis" class="form-label">Опис:</label>
                <textarea class="form-control" name="opis" required></textarea>
            </div>

            <div class="mb-3">
                <label for="ikonica" class="form-label">Иконица:</label>
                <input type="file" class="form-control" name="ikonica" id="ikonica" accept="image/*" required>
                <img id="imagePreview" src="#" alt="Odabrana ikonica" class="d-none" width="100" />
            </div>

            <div class="mb-3">
                <label for="naziv" class="form-label">Линк:</label>
                <input type="text" class="form-control" name="url" required>
            </div>

            <div class="mb-3">
                <label for="objavljen" class="form-label">Објављен:</label>
                <select class="form-select" name="objavljen">
                    <option value="0" selected>Не</option>
                    <option value="1">Да</option>
                </select>
            </div>
            <div class="mb-3">
                <div class="row justify-content-center">
                    <button type="submit" class="col-2 mx-1 btn btn-primary">Унеси</button>
                    <a href="{{ route('resurs.list') }}" class="col-2 mx-1 btn btn-link otkazi">Откажи</a>
                </div>
            </div>
        </form>
    </div>
    <script>
        document.getElementById('ikonica').addEventListener('change', function(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('imagePreview');
                output.src = reader.result;
                output.classList.remove('d-none');
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
            toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent | numlist bullist checklist | forecolor backcolor casechange permanentpen formatpainter removeformat | charmap | fullscreen code | insertfile image media pageembed link anchor'
        });
    </script>
@endsection
