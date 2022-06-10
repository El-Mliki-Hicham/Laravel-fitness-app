

	<!DOCTYPE html>
<html lang="zxx">
@include('layouts.head')

<body id="home" class="page-fitness">
	<!--================ PRELOADER ================-->
	{{-- <div class="preloader-cover">
		<div id="cube-loader">
			<div class="caption">
				<div class="cube-loader">
					<div class="cube loader-1"></div>
					<div class="cube loader-2"></div>
					<div class="cube loader-4"></div>
					<div class="cube loader-3"></div>
				</div>
			</div>
		</div>
	</div> --}}
	<!--============== PRELOADER END ==============-->
	
	<!-- ================= HEADER ================= -->
	@include('layouts.header')
	<!--============== PRELOADER END ==============-->
	
	<!-- ================= HEADER ================= -->

	<!-- =============== HEADER END =============== -->

	<!-- =============== HEADER-TITLE =============== -->
	<section class="s-header-title" style="background-image: url({{asset('assets/img/bg-1-min.png')}});">
		<div class="container">
			<h1 class="title">Programme de Basket-ball</h1>
			<ul class="breadcrambs">
				<li><a href="index.html">Accuil</a></li>
				<li>Categorie</li>
			</ul>
		</div>
	</section>
	<!-- ============= HEADER-TITLE END ============= -->

	<!-- ============== S-ABOUT-PROGRAM ============== -->
	<section class="s-about">
		<div class="container">
			<img class="about-effect-tringle" src="{{asset('assets/img/tringle-about-top.svg')}}" alt="img">
			<div class="row about-row">
				<div class="col-md-5 about-img-col">
					<div class="about-img-cover">
						<div class="about-img-1">
							<img class="about-img-effect-1" src="{{asset('assets/img/')}}" alt="img">
							<img class="about-img-effect-2" src="{{asset('assets/img/group-circle-2.svg')}}" alt="img">
							<img src="{{asset('assets/img/about-top-1.jpg')}}" alt="img">
						</div>
						<div class="about-img-2">
							<img src="{{asset('assets/img/about-top-2.jpg')}}" alt="img">
						</div>
					</div>
				</div>
				<div class="col-md-7 about-info-cover">
					<h2 class="title-decor">A propos de <span> programme</span></h2>
					<div class="text">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmmpor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut <a href="contacts.html">enim ad minim</a> veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					</div>
				
				</div>
			</div>
		</div>
	</section>
	<!-- ============ S-ABOUT-PROGRAM END ============ -->

	<!-- ============== S-ABOUT-BOTTOM ============== -->
	<section class="s-about-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="about-bottom-item">
						<div class="date-cover">
							<div class="date">10</div>
							<h4>jours</h4>
						</div>
						<div class="about-bottom-info">Facilis voluptas harum natus enim dolorum dolores</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="about-bottom-item">
						<div class="date-cover">
							<div class="date">27</div>
							<h4>exercices</h4>
						</div>
						<div class="about-bottom-info">But I must explain to you all this mistaken idea of</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- ============ S-ABOUT-BOTTOM END ============ -->

	<!-- ============= S-TRAINER-AWARDS ============= -->
	
	<!-- =========== S-TRAINER-AWARDS END =========== -->

	<!-- =============== S-OUT-TRAINER =============== -->
	<section class="s-out-trainer" style="background-image: url({{asset('assets/img/bg-contacts.svg')}});">
		<div class="container">
			<h2 class="title-decor">jours <span></span></h2>
			<p class="slogan">Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
			<div class="row">
				
			@forelse ($jours as $value)
				<div class="col-md-6 out-trainer-col">
					<div class="out-trainer-item">
						<a href="trainer.html" class="out-trainer-img"><img src="{{asset('assets/img/trainer-1.jpg')}}" alt="img"></a>
						<div class="out-trainer-info">
							<h3><a href="trainer.html">{{$value->jour}}</a></h3>
							<div class="prof">Weightlifting</div>
							<p>Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
							<ul class="social-list">
								<li><a target="_blank" href="https://www.facebook.com/rovadex"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a target="_blank" href="https://twitter.com/RovadexStudio"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a target="_blank" href="https://www.youtube.com"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
								<li><a target="_blank" href="https://www.instagram.com/rovadex"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				
				@empty
     
				@endforelse
			</div>
		</div>
	</section>
	<!-- ============= S-OUT-TRAINER END ============= -->

	<!-- ============== S-TESTIMONIALS ============== -->
	<section class="s-testimonials" style="background-image: url({{asset('assets/img/bg-testimonials.jpg')}});">
		<div class="mask"></div>
		<img class="testimonials-effect" src="{{asset('assets/img/bg-testimonials.svg')}}" alt="effect">
		<div class="container">
			<div class="testimonials-slider">
				<div class="testimonial-slide">
					<p>“Phasellus vestibulum nec dolor quis varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus gravida magna sit amet euismod lacinia. Lorem ipsum dolor sit amet, consectetur adipiscing elit”</p>
					<img src="{{asset('assets/img/testimonials-1.png')}}" alt="img">
					<h3 class="name">Anna Piters</h3>
					<div class="prof">our client</div>
				</div>
				<div class="testimonial-slide">
					<p>“Phasellus vestibulum nec dolor quis varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus gravida magna sit amet euismod lacinia. Lorem ipsum dolor sit amet, consectetur adipiscing elit”</p>
					<img src="{{asset('assets/img/testimonials-2.png')}}" alt="img">
					<h3 class="name">Mark Klark</h3>
					<div class="prof">our client</div>
				</div>
				<div class="testimonial-slide">
					<p>“Phasellus vestibulum nec dolor quis varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus gravida magna sit amet euismod lacinia. Lorem ipsum dolor sit amet, consectetur adipiscing elit”</p>
					<img src="{{asset('assets/img/testimonials-3.png')}}" alt="img">
					<h3 class="name">Kat Smith</h3>
					<div class="prof">our client</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ============ S-TESTIMONIALS END ============ -->

	<!--================== S-CLIENTS ==================-->
	
	<!--================= TO TOP END =================-->
	<!-- ================== FOOTER ================== -->
	@include('layouts.footer')
	<!-- ================ FOOTER END ================ -->

	<!--=================== TO TOP ===================-->
	<a class="to-top" href="#home">
		<i class="fa fa-chevron-up" aria-hidden="true"></i>
	</a>
	<!--================= TO TOP END =================-->

	<!--=================== SCRIPT	===================-->
	<script src="{{asset('assets/js/jquery-2.2.4.min.js')}}"></script>
	<script src="{{asset('assets/js/slick.min.js')}}"></script>
	<script src="{{asset('assets/js/isotope.pkgd.js')}}"></script>
	<script src="{{asset('assets/js/jquery.fancybox.js')}}"></script>
	<script src="{{asset('assets/js/rx-lazy.js')}}"></script>
	<script src="{{asset('assets/js/parallax.min.js')}}"></script>

	<script src="{{asset('assets/js/scripts.js')}}"></script>
</body>
</html>

