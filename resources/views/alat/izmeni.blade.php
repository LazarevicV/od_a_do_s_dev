@extends('layouts.public')
@section('content')
    <div class="container mt-5 col-4">
        <h1>{{$title}}</h1>
        <form method="POST" action="{{ route('alat.izmeniSubmit', $alat->id) }}">
            @csrf
            <div class="mb-3">
                <label for="naslov" class="form-label">Назив (*)</label>
                <input type="text" required name="naziv" class="form-control" value="{{ $alat->naziv }}">
            </div>

            <div class="mb-3">
                <label for="opis" class="form-label">Опис:</label>
                <textarea id="editor" name="sadrzaj" required>{{ $alat->opis }}</textarea>
            </div>

            <input type="hidden" name="objavljen" value="{{ $alat->objavljen }}" readonly>

            <div class="mb-3">
                <label for="naslov" class="form-label">Линк (*)</label>
                <input type="text" required name="url" class="form-control" value="{{ $alat->url }}">
            </div>

            <div class="mb-3">
                <div class="row justify-content-center">
                    <button class="col-3 mx-1 btn btn-primary">
                        Сачувај
                    </button>
                    <a href="{{route('alat.list')}}" class="col-3 mx-1 btn btn-link" style="border: 1px solid #214252;">Откажи</a>
                </div>
            </div>
        </form>
    </div>
<<<<<<< HEAD
@endsection
=======

    <script>
        tinymce.init({
            selector: '#editor',
            setup: function (editor) {
                editor.on('change', function () {
                    editor.save();
                });
            },
            plugins: 'code powerpaste casechange importcss searchreplace autolink advcode visualblocks visualchars fullscreen image link media mediaembed template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists checklist wordcount tinymcespellchecker a11ychecker imagetools textpattern noneditable help formatpainter permanentpen pageembed charmap mentions quickbars linkchecker advtable',
            menubar: 'edit view insert format tools table tc',
            toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent | numlist bullist checklist | forecolor backcolor casechange permanentpen formatpainter removeformat | charmap | fullscreen code | insertfile image media pageembed link anchor'
        });
    </script>

@endsection
>>>>>>> origin/igor
