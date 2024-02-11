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
				<div class="menu-bg-wrap">
					<div class="site-navigation">
						<div class="row g-0 align-items-center">
							<div class="col-3 d-flex align-items-center">
								<a href="{{route('pocetna')}}">
									<img src="{{ asset('img/logo1.png') }}" alt="" class="img-fluid">
								</a>
							</div>

							<div class="col-9">
								<form action="#" class="search-form d-inline-block d-lg-none">
									<input type="text" class="form-control" placeholder="Search...">
									<span class="bi-search"></span>
								</form>

								<ul class="col-8 js-clone-nav text-start site-menu d-flex justify-content-between" style="margin-left:150px!important;">
									@if (Auth::check() and Auth::user()->hasRole('admin'))
										<li class="has-children">
											<a>Админ мени</a>
											<ul class="dropdown" >
												<li><a href="{{route('blog.list')}}" class="dropdaun">Блогови</a></li>
												<li><a href="{{route('komentar.list')}}" class="dropdaun">Коментари</a></li>
												<li><a href="{{route('alat.list')}}" class="dropdaun">Алати</a></li>
												<li><a href="{{route('resurs.list')}}" class="dropdaun">Ресурси</a></li>
												<li><a href="{{route('font.list')}}" class="dropdaun">Фонтови</a></li>
												<li><a href="{{route('videoTutorijal.list')}}" class="dropdaun">Видео туторијали</a></li>
                                                <li><a href="{{route('korisnici.list')}}" class="dropdaun">Корисници</a></li>
												<li><a href="{{route('kontakt.list')}}" class="dropdaun">Контакт</a></li>
											</ul>
										</li>
									@endif
									<li ><a href="{{route('pocetna')}}">Почетна</a></li>
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
											<li><a href="{{route('resurs.resurs', 1)}}" class="dropdaun">База фонтова</a></li>
											<li><a href="{{route('resurs.resurs', 2)}}" class="dropdaun">Видео туторијали</a></li>
										</ul>
									</li>

									<li><a href="{{route('blog.blogovi')}}">Блог</a></li>

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
											width: 98px;
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


    <footer class="site-footer mt-auto">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-2">
                <div class="widget">
                    <p>Добродошли на наш веб портал, где се заступамо за коришћење ћирилице на интернету. Пружамо платформу за креативно и инклузивно дељење информација и искустава на ћириличном писму.</p>
                </div>
                <div class="widget">
                    <h3>Друштвене мреже</h3>
                    <ul class="list-unstyled social">
                        <li><a href="#"><span class="icon-instagram"></span></a></li>
                        <li><a href="#"><span class="icon-twitter"></span></a></li>
                        <li><a href="#"><span class="icon-facebook"></span></a></li>
                        <li><a href="#"><span class="icon-linkedin"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 ps-lg-5">
                <div class="widget">
					<div style="text-align: center;"><h3>Контакт форма</h3></div>
					<form action="#" method="post">
						<div class="mb-3">
							<label for="email" class="form-label">Е-пошта:</label>
							<input type="email" class="form-control border border-white text-white" name="email" required>
						</div>
						<div class="mb-3">
							<label for="message" class="form-label">Порука:</label>
							<textarea class="form-control border border-white text-white" name="sadrzaj" rows="4" required></textarea>
						</div>
						<div class="d-flex justify-content-center">
							<button type="submit" class="btn btn-primary bg-light text-primary">Пошаљи</button>
						</div>
					</form>
				</div>
				
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-12 text-center">
                <p class="m-0">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. Три прасета.</p>
            </div>
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
		.dropdaun{
			font-size: 16px!important;
		}
	</style>

  </body>
  </html>
