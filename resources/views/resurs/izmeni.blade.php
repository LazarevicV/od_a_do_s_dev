@extends('layouts.public')
@section('content')
    <div class="container mt-5 col-6">
        <h1>{{$title}}</h1>
        <form method="POST" action="{{ route('resurs.izmeniSubmit', $resurs->id) }}">
            @csrf
            <div class="mb-3">
                <label for="naslov" class="form-label">Назив (*)</label>
                <input type="text" required name="naziv" class="form-control" value="{{ $resurs->naziv }}">
            </div>
            
            <div class="mb-3">
                <label for="opis" class="form-label">Опис:</label>
                <textarea id="editor" name="sadrzaj" required>{{ $resurs->opis }}</textarea>
            </div>
            
            <input type="hidden" name="objavljen" value="{{ $resurs->objavljen }}" readonly>

            <div class="mb-3">
                <div class="row justify-content-center">
                    <button type="submit" class="col-2 mx-1 btn btn-primary">Унеси</button>
                    <a href="{{route('resurs.list')}}" class="col-2 mx-1 btn btn-link" style="border: 1px solid #214252;">Откажи</a>
                </div>
            </div>
        </form>
    </div>

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