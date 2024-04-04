@extends('layouts.public')

@section('content')

    <div class="container " style="background-color: #EFEBDC">
        <section style="height: 160px">
            {{ Breadcrumbs::render('prikaz-svih-fontova') }}
        </section>
        <div class="col-6 mx-auto">
            <form action="{{ route('fontovi') }}" method="GET" class="mb-3" style="display: flex;">
                <div class="container-fluid p-0">
                    <div class="col-12 d-flex mb-2">
                        <div class="col-6 pe-2">
                            <div class="d-flex">
                                <form action="{{ route('pretraga') }}" method="get">
                                    <input type="text" name="pretraga" id="pretraga" placeholder="Претражите фонтове" class="border-0 col-10 p-2" style="font-size: 18px;">
                                    <button 
                                    class="rounded-end col-2"
                                    type="submit"
                                    style="background-color: transparent;
                                    display: flex;
                                    justify-content: center;
                                    border: none;
                                    cursor: pointer;
                                    padding-top: 0.3em;
                                    font-family: inherit;
                                    font-size: 24px;
                                    color: #ffffff;
                                    background-color: #000E75">                                                
                                        <span class="bi-search"></span>
                                    </button>
                                </form>                            
                            </div>                        
                        </div>

                        {{-- treba izbaciti style i ubaciti promenjive za vrste i tezine --}}

                        <div class="col-3 p-0 ">
                            <select name="style" class="col-12 border-0 rounded-0 bg-white" style="height: 100%">
                                <option value="svi"{{ $style === 'svi' ? ' selected' : '' }}>Врста</option>
                                <option value="all"{{ $style === 'all' ? ' selected' : '' }}>Врста 1</option>
                                <option value="regular"{{ $style === 'regular' ? ' selected' : '' }}>Врста 2</option>
                                <option value="bold"{{ $style === 'bold' ? ' selected' : '' }}>Врста 3</option>
                                <option value="italic"{{ $style === 'italic' ? ' selected' : '' }}>Врста 4</option>
                                <option value="bolditalic"{{ $style === 'bolditalic' ? ' selected' : '' }}>Врста 5</option>
                            </select>
                        </div>
                        
                        <div class="col-3 p-0 ps-2">
                            <select name="style" class="col-12 border-0 rounded-0 bg-white" style="height: 100%">
                                <option value="svi"{{ $style === 'svi' ? ' selected' : '' }}>Тежина</option>
                                <option value="all"{{ $style === 'all' ? ' selected' : '' }}>Svi</option>
                                <option value="regular"{{ $style === 'regular' ? ' selected' : '' }}>Regular</option>
                                <option value="bold"{{ $style === 'bold' ? ' selected' : '' }}>Bold</option>
                                <option value="italic"{{ $style === 'italic' ? ' selected' : '' }}>Italic</option>
                                <option value="bolditalic"{{ $style === 'bolditalic' ? ' selected' : '' }}>Bold Italic</option>
                            </select>
                        </div>
                    </div>

                    <div class=" mb-1">
                        <div class="col-12">
                            <div class="input-group">
                                <textarea name="message" id="message" class="col-10 m-0 border-0 p-2 bg-white">{{ $message }}</textarea>
                                <div class="col-2">
                                    <button type="submit" class="btn btn-primary" style="height: 100%; width:100%;">Прикажи</button>
                                </div>
                            </div>                        
                        </div>
                    </div>
                <div class="container-fluid p-0">
                    <div class="col-12 d-flex mb-2">
                        <div class="col-6 pe-2">
                            <div class="d-flex">
                                <form action="{{ route('pretraga') }}" method="get">
                                    <input type="text" name="pretraga" id="pretraga" placeholder="Претражите фонтове" class="border-0 col-10 p-2" style="font-size: 18px;">
                                    <button 
                                    class="rounded-end col-2"
                                    type="submit"
                                    style="background-color: transparent;
                                    display: flex;
                                    justify-content: center;
                                    border: none;
                                    cursor: pointer;
                                    padding-top: 0.3em;
                                    font-family: inherit;
                                    font-size: 24px;
                                    color: #ffffff;
                                    background-color: #000E75">                                                
                                        <span class="bi-search"></span>
                                    </button>
                                </form>                            
                            </div>                        
                        </div>

                        {{-- treba izbaciti style i ubaciti promenjive za vrste i tezine --}}

                        <div class="col-3 p-0 ">
                            <select name="style" class="col-12 border-0 rounded-0 bg-white" style="height: 100%">
                                <option value="svi"{{ $style === 'svi' ? ' selected' : '' }}>Врста</option>
                                <option value="all"{{ $style === 'all' ? ' selected' : '' }}>Врста 1</option>
                                <option value="regular"{{ $style === 'regular' ? ' selected' : '' }}>Врста 2</option>
                                <option value="bold"{{ $style === 'bold' ? ' selected' : '' }}>Врста 3</option>
                                <option value="italic"{{ $style === 'italic' ? ' selected' : '' }}>Врста 4</option>
                                <option value="bolditalic"{{ $style === 'bolditalic' ? ' selected' : '' }}>Врста 5</option>
                            </select>
                        </div>
                        
                        <div class="col-3 p-0 ps-2">
                            <select name="style" class="col-12 border-0 rounded-0 bg-white" style="height: 100%">
                                <option value="svi"{{ $style === 'svi' ? ' selected' : '' }}>Тежина</option>
                                <option value="all"{{ $style === 'all' ? ' selected' : '' }}>Svi</option>
                                <option value="regular"{{ $style === 'regular' ? ' selected' : '' }}>Regular</option>
                                <option value="bold"{{ $style === 'bold' ? ' selected' : '' }}>Bold</option>
                                <option value="italic"{{ $style === 'italic' ? ' selected' : '' }}>Italic</option>
                                <option value="bolditalic"{{ $style === 'bolditalic' ? ' selected' : '' }}>Bold Italic</option>
                            </select>
                        </div>
                    </div>

                    <div class=" mb-1">
                        <div class="col-12">
                            <div class="input-group">
                                <textarea name="message" id="message" class="col-10 m-0 border-0 p-2 bg-white">{{ $message }}</textarea>
                                <div class="col-2">
                                    <button type="submit" class="btn btn-primary" style="height: 100%; width:100%;">Прикажи</button>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>
                
            </form>

            <div class="row">
                @foreach ($filteredFonts as $font)
                    <div class="col-12 mb-2">
                        <div class="font-preview" style="font-family: '{{ $font->naziv }}'; font-size: 22px;">
                            <p style="display: flex; justify-content: space-between; font-size: 15px;">
                                <span>{{ $font->naziv }}</span>
                                <a href="/fonts/cirilica/{{$font->fajlovi[0]->naziv}}">
                                    <i class="bi bi-file-earmark-arrow-down" style="font-size: 22px"></i>
                                </a>
                            </p>
                            <p class="message" id="messagePreview">{{ $message }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

<script>
    document.getElementById('fontWeightSelect').addEventListener('change', function() {
        const selectedWeight = this.value;
        document.querySelectorAll('.message').forEach(function(fontPreview) {
            fontPreview.style.fontWeight = selectedWeight;
        });
    });
    
</script>
    

<style>
::placeholder {
  color: #D6CFBA;
  opacity: 1; /* Firefox */
}
</style>
@endsection
