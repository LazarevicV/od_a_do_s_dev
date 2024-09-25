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

    {{-- <script src="https://cdn.tiny.cloud/1/8v3b971q7hj0d1fl7gh8kxyl31oyrlout36k8wr8ykfoiliy/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script> --}}
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
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

    <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flatpickr.min.css') }}">


    <title>{{ $title }}</title>

    <script>
      document.addEventListener("DOMContentLoaded", function() {
          
          // Define the toggleSideMenu function
          function toggleSideMenu() {
              var menu = document.getElementById('right-side-menu');
              if (menu.style.right === '0px' || menu.style.right === '') {
                  menu.style.right = '-100%';
              } else {
                  menu.style.right = '0px';
              }
          }
  
          // Attach event listener to burger menu button
          var burgerMenuButton = document.querySelector('.burger-menu-container');
          if (burgerMenuButton) {
              burgerMenuButton.addEventListener('click', toggleSideMenu);
          }
  
          // Dropdown toggle logic for the SVG icon
          var toggles = document.querySelectorAll('.dropdown-toggle-icon');
          toggles.forEach(function(toggle) {
              toggle.addEventListener('click', function(event) {
                  event.stopPropagation();
                  var parent = this.closest('.has-children');
                  if (parent) {
                      parent.classList.toggle('active');
                  }
              });
          });
      });
  </script>
  
  
  
</head>

<body class="d-flex flex-column bodi">
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
                    <div class="heder-logo d-flex justify-content-left">
                        <a class="mt-5" href="{{ route('pocetna') }}">
                            <img src="{{ asset('img/logo.png') }}" alt="" class="logo-img">
                        </a>
                    </div>
                    <div class="flex-1 ">
                        {{-- <form action="#" class="search-form d-inline-block d-lg-none">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="bi-search"></span>
                                </form> --}}
                        <ul class=" js-clone-nav text-start site-menu d-flex justify-content-between gap-2">
                            <div class="meni-hide">
                                @if (Auth::check() and Auth::user()->hasRole('admin'))
                                    <li class="has-children">
                                        <a>Админ мени </a>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="none" stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708">
                                            </path>
                                        </svg>
                                        <ul class="dropdown">
                                            <li><a href="{{ route('blog.list') }}" class="dropdaun">Блогови</a></li>
                                            <li><a href="{{ route('kategorija.list') }}" class="dropdaun">Категорије
                                                    блогова</a></li>
                                            <li><a href="{{ route('alat.list') }}" class="dropdaun">Алати</a></li>
                                            <li><a href="{{ route('resurs.list') }}" class="dropdaun">Ресурси</a></li>
                                            <li><a href="{{ route('font.list') }}" class="dropdaun">Фонтови</a></li>
                                            <li><a href="{{ route('familija.list') }}" class="dropdaun">Фамилије</a>
                                            <li><a href="{{ route('videoTutorijal.list') }}" class="dropdaun">Видео
                                                    туторијали</a></li>
                                            <li><a href="{{ route('korisnici.list') }}" class="dropdaun">Корисници</a>
                                            </li>
                                            <li><a href="{{ route('config.footer_sadrzaj') }}" class="dropdaun">Футер садржај</a>
                                            </li>
                                        </ul>
                                    </li>
                                @endif
                                @if (Auth::check() and Auth::user()->hasRole('admin'))
                                <li class="has-children">
                                    <a href="{{ route('pocetna') }}">Почетна </a>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708">
                                        </path>
                                    </svg>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('config.pocetna_sadrzaj') }}" class="dropdaun">Почетна садржај</a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="{{ route('razvoj') }}">Развој </a>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708">
                                        </path>
                                    </svg>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('config.razvoj_sadrzaj') }}" class="dropdaun">Развој садржај</a></li>
                                        <li><a href="{{ route('alat.alati') }}" class="dropdaun">Алати</a></li>
                                        <li><a href="{{ route('config.alati_sadrzaj') }}" class="dropdaun">Алати садржај</a></li>
                                        <li><a href="{{ route('uputstva') }}" class="dropdaun">Упутства</a></li>
                                        <li><a href="{{ route('config.uputstva_sadrzaj') }}" class="dropdaun">Упутства садржај</a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="{{ route('resurs.resursi') }}">Ресурси</a>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708">
                                        </path>
                                    </svg>
                                    <ul class="dropdown" style="min-width: 250px; white-space: nowrap; overflow: hidden;">
                                        <li><a href="{{ route('config.resurs_sadrzaj') }}" class="dropdaun">Ресурси садржај</a></li>
                                        <li><a href="{{ route('resurs.baza-fontova') }}" class="dropdaun">База фонтова</a></li>
                                        <li><a href="{{ route('config.baza_fontova_sadrzaj') }}" class="dropdaun">База фонтова садржај</a></li>
                                        <li><a href="{{ route('resurs.video-tutorijali') }}" class="dropdaun">Видео туторијали</a></li>
                                        <li><a href="{{ route('config.video_tutorijali_sadrzaj') }}" class="dropdaun">Видео туторијали садржај</a></li>
                                    </ul>
                                </li>                                
                                <li><a href="#">Форум</a></li>

                                <li class="has-children">
                                    <a href="{{ route('blog.blogovi') }}">Блог </a>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708">
                                        </path>
                                    </svg>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('config.blog_sadrzaj') }}" class="dropdaun">Блог садржај</a></li>
                                    </ul>
                                </li>
                                @else
                                <li><a href="{{ route('pocetna') }}">Почетна</a></li>
                                <li class="has-children">
                                    <a href="{{ route('razvoj') }}">Развој </a>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708">
                                        </path>
                                    </svg>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('alat.alati') }}" class="dropdaun">Алати</a></li>
                                        <li><a href="{{ route('uputstva') }}" class="dropdaun">Упутства</a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="{{ route('resurs.resursi') }}">Ресурси</a>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="none" stroke="currentColor" stroke-width="2"viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708">
                                        </path>
                                    </svg>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('resurs.baza-fontova') }}" class="dropdaun">База
                                                фонтова</a></li>
                                        <li><a href="{{ route('resurs.video-tutorijali') }}" class="dropdaun">Видео
                                                туторијали</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Форум</a></li>

                                <li><a href="{{ route('blog.blogovi') }}">Блог</a></li>
                                @endif
                            </div>
                            <li>
                                <form action="{{ route('pretraga') }}" method="get"
                                    class="d-flex align-items-center">
                                    <input type="text" name="pretraga" id="pretraga" placeholder="Претрага">
                                    <button type="submit" class="pretraga-button">
                                        <span class="bi-search"></span>
                                    </button>
                                </form>
                            </li>
                            @if (Auth::check())
                                {{-- <li><a href="{{route('profile.edit')}}">Профил</a></li> --}}
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="odjava-button">
                                        Одјави се
                                    </button>
                                </form>
                                {{-- </li> --}}
                            @else
                                {{-- <li class="prijava-button">
                                    <a href="{{ route('login') }}">
                                        Пријавите се
                                    </a>
                                </li>
                                <li><a href="{{route('register')}}">Региструј се</a></li> --}}
                            @endif
                            <div class="burger-menu-container nav-item ms-2">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 18">
                                  <defs>
                                      <style>
                                          .cls-1 {
                                              fill: none;
                                              stroke: #fff;
                                              stroke-linecap: round;
                                              stroke-miterlimit: 10;
                                              stroke-width: 3px;
                                          }
                                      </style>
                                  </defs>
                                  <line class="cls-1" x1="1" y1="2" x2="20" y2="2"></line>
                                  <line class="cls-1" x1="1" y1="9" x2="20" y2="9"></line>
                                  <line class="cls-1" x1="1" y1="16" x2="20" y2="16"></line>
                              </svg>
                          </div>
                          
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div id="right-side-menu" class="right-side-nav">
            <nav>
                <ul>
                    @if (Auth::check() && Auth::user()->hasRole('admin'))
                        <li class="has-children toggle-submenu">
                            <a>Админ мени
                                <svg class="dropdown-toggle-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"
                                    stroke="currentColor" stroke-width="2" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708">
                                    </path>
                                </svg>
                            </a>
                            <ul class="dropdown">
                                <li><a href="{{ route('blog.list') }}" class="dropdaun">Блогови</a></li>
                                <li><a href="{{ route('kategorija.list') }}" class="dropdaun">Категорије блогова</a></li>
                                <li><a href="{{ route('alat.list') }}" class="dropdaun">Алати</a></li>
                                <li><a href="{{ route('resurs.list') }}" class="dropdaun">Ресурси</a></li>
                                <li><a href="{{ route('font.list') }}" class="dropdaun">Фонтови</a></li>
                                <li><a href="{{ route('familija.list') }}" class="dropdaun">Фамилије</a></li>
                                <li><a href="{{ route('videoTutorijal.list') }}" class="dropdaun">Видео туторијали</a></li>
                                <li><a href="{{ route('korisnici.list') }}" class="dropdaun">Корисници</a></li>
                            </ul>
                        </li>
                    @endif
                    <li><a href="{{ route('pocetna') }}">Почетна</a></li>
                    <li class="has-children toggle-submenu">
                        <a href="{{ route('razvoj') }}">Развој</a>
                        <svg class="dropdown-toggle-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708">
                            </path>
                        </svg>
                        <ul class="dropdown">
                            <li><a href="{{ route('alat.alati') }}" class="dropdaun">Алати</a></li>
                            <li><a href="{{ route('uputstva') }}" class="dropdaun">Упутства</a></li>
                        </ul>
                    </li>
                    <li class="has-children toggle-submenu">
                        <a href="{{ route('resurs.resursi') }}">Ресурси</a>
                        <svg class="dropdown-toggle-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"
                            stroke="currentColor" stroke-width="2" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708">
                            </path>
                        </svg>
                        <ul class="dropdown">
                            <li><a href="{{ route('resurs.baza-fontova') }}" class="dropdaun">База фонтова</a></li>
                            <li><a href="{{ route('resurs.video-tutorijali') }}" class="dropdaun">Видео туторијали</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Форум</a></li>
                    <li><a href="{{ route('blog.blogovi') }}">Блог</a></li>
                </ul>
            </nav>
        </div>
      
    </nav>
    <div class="col-2 mx-auto">
        @include('flash-message')
    </div>
    @yield('content')


    <footer class="site-footer mt-auto pb-0">
        <div class="container p-0">
            <div class=" py-4 px-4">
                <div class="container futer-body d-flex justify-content-between p-0">
                    <div class="widget col-7 d-flex white align-items-start">
                        <div class="futer-rnids">
                            <img src="{{ asset('img/logo.png') }}" alt="" class="">
                        </div>
                        <div class="col-8 px-3 pb-2">
                            {!! $footer_parametri[0]->parametar_value !!}
                        </div>
                    </div>
                    <div class="socials col-3 d-flex flex-column white justify-content-center align-items-center m-0">
                        <div class="col-8">
                            <img src="{{ asset('img/rnids_logo_footer.png') }}" alt="" class="socials-img">
                        </div>
                        <div class="col-12 py-3 d-flex flex-column align-items-end">
                            <p class="mb-1 follow">Пратите нас на друштвеним мрежама</p>
                            <ul class="list-unstyled social">
                              <li>
                                  <a class="d-flex justify-content-center align-items-center" href="https://www.facebook.com/rnids.rs">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                          fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                          <path
                                              d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                                      </svg>
                                  </a>
                              </li>
                              <li>
                                  <a class="d-flex justify-content-center align-items-center" href="https://www.linkedin.com/company/rnids/">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                          fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                          <path
                                              d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                                      </svg>
                                  </a>
                              </li>
                              <li>
                                  <a class="d-flex justify-content-center align-items-center" href="https://www.instagram.com/rnids">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                          fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                          <path
                                              d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                                      </svg>
                                  </a>
                              </li>
                              <li>
                                  <a class="d-flex justify-content-center align-items-center" href="https://www.youtube.com/c/RegistarnacionalnogInternetdomenaSrbijeBeograd/videos">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                          fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                          <path
                                              d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z" />
                                      </svg>
                                  </a>
                              </li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-2 copyrights">
            <div class="container">
                {!! $footer_parametri[1]->parametar_value !!}
            </div>
        </div>
    </footer>



    <style>
        .bodi {
            min-height: 100vh;
        }

        .logo-img {
            width: 120px;
        }

        nav #pretraga {
            width: 135px;
            height: 35px;
        }

        .pretraga-button {
            background-color: transparent;
            border: none;
            cursor: pointer;
            padding-top: 0.3em;
            font-family: inherit;
            font-size: 24px;
            color: #b7bbbf;
        }

        .odjava-button {
            background-color: transparent;
            border: none;
            cursor: pointer;
            padding-top: 0.6em;
            font-family: inherit;
            font-size: 18px;
            width: 98px;
            color: #b7bbbf
        }

        .odjava-button>a {
            color: #000E75 !important;
            font-size: 16px;
        }

        .prijava-button {
            background-color: #D6CFBA;
            color: #000E75!important;
            border: none;
            border-radius: 5px;
            padding: 0px 4px !important;
            cursor: pointer;
            height: 37px;
            margin-top: 4px
        }

        .prijava-button>a {
            color: #000E75 !important;
            font-size: 16px;
        }

        #sticky-nav {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .dropdaun {
            font-size: 16px !important;
        }

        .site-footer * {
            color: #ffffff;
        }

        .futer-rnids {
            width: 130px;
        }

        .futer-rnids>img {
            width: 100%;
        }

        .px-3>.m-0 {
            font-size: 18px
        }

        .socials-img {
            width: 100%;
        }

        .follow {
            text-align: right
        }

        .copyrights {
            background-color: #EFEBDC;
        }

        .copyrights>.container {
            text-align: right;
            font-size: 18px;
            color: #000E75;
        }
    </style>

</body>

</html>