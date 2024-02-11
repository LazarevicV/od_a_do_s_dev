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

	<script src="https://cdn.tiny.cloud/1/YOUR_API_KEY/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flatpickr.min.css') }}">


	<title>{{$title}}</title>
</head>
<body>
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
				<div class="menu-bg-wrap">
					<div class="site-navigation">
						<div class="row g-0 align-items-center">
							<div class="col-3 d-flex align-items-center">
								<a href="{{route('pocetna')}}">
									<img src="{{ asset('img/logo.png') }}" alt="" class="img-fluid">
								</a>
							</div>

							<div class="col-9 text-center">
								<form action="#" class="search-form d-inline-block d-lg-none">
									<input type="text" class="form-control" placeholder="Search...">
									<span class="bi-search"></span>
								</form>

								<ul class="col-8 js-clone-nav text-start site-menu mx-auto d-flex justify-content-between">
									@if (Auth::check() and Auth::user()->hasRole('admin'))
										<li class="has-children">
											<a>Админ мени</a>
											<ul class="dropdown" style="font-size: 2em">
												<li><a href="{{route('blog.list')}}">Блогови</a></li>
												<li><a href="{{route('komentar.list')}}">Коментари</a></li>
												<li><a href="{{route('alat.list')}}">Алати</a></li>
												<li><a href="{{route('resurs.list')}}">Ресурси</a></li>
												<li><a href="{{route('font.list')}}">Фонтови</a></li>
												<li><a href="{{route('videoTutorijal.list')}}">Видео туторијали</a></li>
                                                <li><a href="{{route('korisnici.list')}}">Корисници</a></li>
											</ul>
										</li>
									@endif
									<li ><a href="{{route('pocetna')}}">Почетна</a></li>
									<li class="has-children">
										<a>Развој</a>
										<ul class="dropdown">
											<li><a href="{{route('alat.alati')}}">Алати</a></li>
											<li><a href="{{route('uputstva')}}">Инфо</a></li>
										</ul>
									</li>
									<li class="has-children">
										<a href="{{route('resurs.resursi')}}">Ресурси</a>
										<ul class="dropdown">
											<li><a href="{{route('resurs.resurs', 1)}}">База фонтова</a></li>
											<li><a href="{{route('resurs.resurs', 2)}}">Видео туторијали</a></li>
										</ul>
									</li>

									<li><a href="{{route('blog.blogovi')}}">Магазин</a></li>
									<li><a href="#">Заједница</a></li>

									@if (Auth::check())
									<li><a href="{{route('profile.edit')}}">Профил</a></li>
										<form action="{{route('logout')}}" method="POST">
											@csrf
											<button style="background-color: transparent;
											border: none;
											cursor: pointer;
											padding-top: 0.6em;
											font-family: inherit;
											font-size: 18px;
											width: 50px;
											color: #b7bbbf;">
												Одјави се
											</button>
										</form>
									{{-- </li> --}}
									@else
										<li><a href="{{route('login')}}">Улогуј се</a></li>
										<li><a href="{{route('register')}}">Региструј се</a></li>
									@endif
								</ul>
							</div>
							{{-- <div class="col-2 text-end">
								<a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
									<span></span>
								</a>
								<form action="#" class="search-form d-none d-lg-inline-block">
									<input type="text" class="form-control" placeholder="Search...">
									<span class="bi-search"></span>
								</form>
							</div> --}}
						</div>
					</div>
				</div>
			</div>
		</nav>
	</nav>
	<div class="col-2 mx-auto">
		@include('flash-message')
	</div>
    @yield('content')


    <footer class="site-footer">
		<div class="container">
			<div class="row ">
				<div class="col-lg-4 offset-lg-2">
					<div class="widget">
						<p>Добродошли на наш веб портал, где се заступамо за коришћење ћирилице на интернету. Пружамо платформу за креативно и инклузивно дељење информација и искустава на ћириличном писму.</p>
					</div> <!-- /.widget -->
					<div class="widget">
						<h3>Друштвене мреже</h3>
						<ul class="list-unstyled social">
							<li><a href="#"><span class="icon-instagram"></span></a></li>
							<li><a href="#"><span class="icon-twitter"></span></a></li>
							<li><a href="#"><span class="icon-facebook"></span></a></li>
							<li><a href="#"><span class="icon-linkedin"></span></a></li>

						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
				<div class="col-lg-4 ps-lg-5">
					<div class="widget">
						<ul class="list-unstyled float-start links">
							<li><a href="#">Почетна</a></li>
							<li><a href="#">Развој</a></li>
							<li><a href="#">Дизајн</a></li>
							<li><a href="#">Магазин</a></li>
							<li><a href="#">Заједница</a></li>
						</ul>
						<ul class="list-unstyled float-start links">
							<li><a href="#">О нама</a></li>
							<li><a href="#">Контакт</a></li>
							<li><a href="#">FAQ</a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
			</div> <!-- /.row -->

			<div class="row mt-2">
				<div class="col-12 text-center">
          <!--
              **==========
              NOTE:
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/
              **==========
            -->

            <p class="m-0">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. Три прасета.<!-- License information: https://untree.co/license/ -->
            </p>
          </div>
        </div>
      </div> <!-- /.container -->
    </footer> <!-- /.site-footer -->

    <!-- Preloader -->
    {{-- <div id="overlayer"></div>
    <div class="loader">
    	<div class="spinner-border text-primary" role="status">
    		<span class="visually-hidden">Loading...</span>
    	</div>
    </div> --}}


    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('js/tiny-slider.js')}}"></script>

    <script src="{{ asset('js/flatpickr.min.js')}}"></script>


    <script src="{{ asset('js/aos.js')}}"></script>
    <script src="{{ asset('js/glightbox.min.js')}}"></script>
    <script src="{{ asset('js/navbar.js')}}"></script>
    <script src="{{ asset('js/counter.js')}}"></script>
    <script src="{{ asset('js/custom.js')}}"></script>

	<style>
		#sticky-nav {
			position: -webkit-sticky;
			position: sticky;
			top: 0;
			z-index: 1000;
		}
	</style>

  </body>
  </html>
