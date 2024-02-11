@extends('layouts.public')
@section('content')

    <div class="container mt-5 col-6">
        <h1>{{$title}}</h1>
        <form method="POST" action="{{ route('blog.izmeniSubmit', $blog->id) }}">
            @csrf
            <div class="mb-3">
                <label for="naslov" class="form-label">Наслов (*)</label>
                <input type="text" required name="naslov" class="form-control" value="{{ $blog->naslov }}">
            </div>

            <div class="mb-3">
                <label for="sadrzaj" class="form-label">Садржај (*)</label>
                <textarea id="editor" name="sadrzaj" required>{{$blog->sadrzaj}}</textarea>
            </div>

            <div class="mb-3">
                <label for="kategorija" class="form-label">Категорија (*)</label>
                <input type="text" required name="kategorija" class="form-control" value="{{ $blog->kategorija }}">
            </div>

            <div class="mb-3">
                <label for="slika" class="form-label">Слика:</label>
                <input type="text" class="form-control" name="slika" value="{{ $blog->slika }}">
            </div>

            <input type="hidden" name="objavljen" value="{{ $blog->objavljen }}" readonly>
            <input type="hidden" name="istaknut" value="{{ $blog->istaknut }}" readonly>

            <div class="mb-3">
                <div class="row justify-content-center">
                    <button class="col-3 mx-1 btn btn-primary">
                        Сачувај
                    </button>
                    <a href="{{route('blog.list')}}" class="col-3 mx-1 btn btn-link" style="border: 1px solid #214252;">Откажи</a>
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
