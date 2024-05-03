<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@latest/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script src="https://cdn.tiny.cloud/1/8v3b971q7hj0d1fl7gh8kxyl31oyrlout36k8wr8ykfoiliy/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

    <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flatpickr.min.css') }}">


    <title>{{$title}}</title>
</head>

<body class="d-flex flex-column" style="min-height: 100vh;">
    <nav class="site-nav" id="sticky-nav">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close">
                    <span class="icofont-close js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <nav class="site-nav">
            <div class="container">
                    <div class="site-navigation col-12 d-flex align-items-center justify-content-between">
                            <div class="col-1 d-flex justify-content-left">
                                <a class="mt-5" href="{{route('pocetna')}}">
                                    <img src="{{ asset('img/logo.png') }}" alt="" class="" style="width: 100%">
                                </a>
                            </div>
                            <div class="col-7">
                                {{-- <form action="#" class="search-form d-inline-block d-lg-none">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="bi-search"></span>
                                </form> --}}

                                <ul class=" js-clone-nav text-start site-menu d-flex justify-content-between">
<<<<<<< HEAD
=======
                                    @if (Auth::check() and Auth::user()->hasRole('admin'))
                                    <li class="has-children">
                                        <a>Админ мени</a>
                                        <ul class="dropdown">
                                            <li><a href="{{route('blog.list')}}" class="dropdaun">Блогови</a></li>
                                            <li><a href="{{route('kategorija.list')}}" class="dropdaun">Категорије
                                                    блогова</a></li>
                                            <li><a href="{{route('alat.list')}}" class="dropdaun">Алати</a></li>
                                            <li><a href="{{route('resurs.list')}}" class="dropdaun">Ресурси</a></li>
                                            <li><a href="{{route('font.list')}}" class="dropdaun">Фонтови</a></li>
                                            <li><a href="{{route('familija.list')}}" class="dropdaun">Фамилије</a>
                                            <li><a href="{{route('videoTutorijal.list')}}" class="dropdaun">Видео
                                                    туторијали</a></li>
                                            <li><a href="{{route('korisnici.list')}}" class="dropdaun">Корисници</a>
                                            </li>
                                        </ul>
                                    </li>
                                    @endif
                                    <li><a href="{{route('pocetna')}}">Почетна</a></li>
                                    <li class="has-children">
                                        <a>Развој</a>
                                        <ul class="dropdown">
                                            <li><a href="{{route('alat.alati')}}" class="dropdaun">Алати</a></li>
                                            <li><a href="{{route('uputstva')}}" class="dropdaun">Упутства</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="{{route('resurs.resursi')}}">Ресурси</a>
                                        <ul class="dropdown">
                                            <li><a href="{{route('resurs.resurs', 1)}}" class="dropdaun">База
                                                    фонтова</a></li>
                                            <li><a href="{{route('resurs.resurs', 2)}}" class="dropdaun">Видео
                                                    туторијали</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Форум</a></li>
>>>>>>> origin/master

                                    <div class="d-flex text-white ">
                                        @if (Auth::check() and Auth::user()->hasRole('admin'))
                                        <li class="has-children">
                                            <a>Админ мени</a>
                                            <ul class="dropdown">
                                                <li><a href="{{route('blog.list')}}" class="dropdaun">Блогови</a></li>
                                                <li><a href="{{route('kategorija.list')}}" class="dropdaun">Категорије
                                                        блогова</a></li>
                                                <li><a href="{{route('alat.list')}}" class="dropdaun">Алати</a></li>
                                                <li><a href="{{route('resurs.list')}}" class="dropdaun">Ресурси</a></li>
                                                <li><a href="{{route('font.list')}}" class="dropdaun">Фонтови</a></li>
                                                <li><a href="{{route('videoTutorijal.list')}}" class="dropdaun">Видео
                                                        туторијали</a></li>
                                                <li><a href="{{route('korisnici.list')}}" class="dropdaun">Корисници</a>
                                                </li>
                                            </ul>
                                        </li>
                                        @endif
                                        <li><a href="{{route('pocetna')}}">Почетна</a></li>
                                        <li class="has-children">
                                            <a>
                                                Развој
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 16 16" style="padding-left: 3px;">
                                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                                </svg>                                                
                                            </a>
                                            <ul class="dropdown">
                                                <li><a href="{{route('alat.alati')}}" class="dropdaun">Алати</a></li>
                                                <li><a href="{{route('uputstva')}}" class="dropdaun">Упутства</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="{{route('resurs.resursi')}}">
                                                Ресурси
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 16 16" style="padding-left: 3px;">
                                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                                </svg>                                                
                                            </a>
                                            <ul class="dropdown">
                                                <li><a href="{{route('resurs.resurs', 1)}}" class="dropdaun">База фонтова</a></li>
                                                <li><a href="{{route('resurs.resurs', 2)}}" class="dropdaun">Видео туторијали</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Форум</a></li>
    
                                        <li><a href="{{route('blog.blogovi')}}">Блог</a></li>
                                    </div>
                                    
                                    <li>
                                        <form action="{{ route('pretraga') }}" method="get" class="d-flex align-items-center">
                                            <input type="text" name="pretraga" id="pretraga" placeholder="Претрага" style="width: 135px; height: 35px; border: none; border-radius: 5px; padding-left: 5px">
                                            <button 
                                            type="submit"
                                            style="background-color: transparent;
											border: none;
											cursor: pointer;
											padding-top: 0.3em;
											font-family: inherit;
											font-size: 24px;
											color: #b7bbbf;">                                                
                                                <span class="bi-search"></span>
                                            </button>
                                        </form>
                                    </li>
                                    @if (Auth::check())
                                    {{-- <li><a href="{{route('profile.edit')}}">Профил</a></li> --}}
                                    <form action="{{route('logout')}}" method="POST">
                                        @csrf
                                        <button style="background-color: transparent;
											border: none;
											cursor: pointer;
											padding-top: 0.6em;
											font-family: inherit;
											font-size: 18px;
											width: 98px;
											color: #b7bbbf;">
                                            Одјави се
                                        </button>
                                    </form>
                                    {{-- </li> --}}
                                    @else
                                    <li style="background-color: #D6CFBA;
                                    border: none;
                                    border-radius: 5px;
                                    padding: 0px 4px!important;
                                    cursor: pointer;
                                    height: 37px;
                                    margin-top: 4px;
                                    "><a style="color: #000E75!important; font-size: 16px;" href="{{route('login')}}">Пријавите се</a></li>
                                    {{-- <li><a href="{{route('register')}}">Региструј се</a></li> --}}
                                    @endif
                                </ul>
                            </div>
                    </div>
            </div>
        </nav>
    </nav>
    <div class="col-2 mx-auto">
        @include('flash-message')
    </div>
    @yield('content')


    <footer class="site-footer mt-auto pb-0">
        <div class="container">
            <div class="row">
                <div class="container d-flex justify-content-between">
                    <div class="widget col-7 d-flex white align-items-end">
                        <div class="col-2">
                            <img src="{{ asset('img/logo.png') }}" alt="" class="" style="width: 100%">
                        </div>
                        <div class="col-8 p-3">
                            <p class="m-0" style="font-size: 18px">Иницијална верзија сајта иманаћирилици.срб настала је на истоименом хакатону. Млади програмери који су креирали решење наставили су разраду уз подршку РНИДС-а и испоручили сајт који нуди алате, ресурсе и креира простор за размену знања за употребу ћирилице у дигиталном окружењу. </p>
                        </div>
                    </div>
                    <div class="widget col-3 d-flex flex-column white justify-content-center align-items-end m-0">
                        <div class="col-8">
                            <img src="{{ asset('img/rnids_logo_footer.png') }}" alt="" class="" style="width: 100%">
                        </div>
                        <div class="col-12 py-3 d-flex flex-column align-items-end">
                            <p class="mb-1" style="text-align: right">Пратите нас на друштвеним мрежама</p>
                            <ul class="list-unstyled social">
                                <li><a href="#"><span class="icon-facebook"></span></a></li>
                                <li><a href="#"><span class="icon-linkedin"></span></a></li>
                                <li><a href="#"><span class="icon-instagram"></span></a></li>
                                <li><a href="#"><span class="icon-youtube bi bi-youtube"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-2" style="background-color: #EFEBDC; padding: 0px 240px;">
            <div>
                <p class="m-0" style="text-align: right; font-size:18px; color:#000E75;">Copyrights &copy;<script>
                        document.write(new Date().getFullYear());
                    </script>.</p>
            </div>
        </div>
    </footer>



    <style>
        #sticky-nav {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .dropdaun {
            font-size: 16px !important;
        }
        .site-footer *{
            color: #ffffff;
        }
    </style>

</body>

</html>