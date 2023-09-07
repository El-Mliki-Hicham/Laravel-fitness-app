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


	<!-- ================= HEADER ================= -->
	@include('layouts.header')
	<!-- =============== HEADER END =============== -->


	<section class="s-fitness-slider">
    <div class="slider-navigation">
        <div class="container">
            <div class="slider-navigation-cover"></div>
        </div>
    </div>
    <div class="fitness-slider">
        <div class="fitness-slide">
            <div class="fitness-slider-effect">
                <div data-hover-only="true" class="scene">
                    <span class="scene-item" data-depth="0.4" style="background-image: url(assets/img/effect-1-1.svg);"></span>
                </div>
            </div>
            <div class="slide-img-cover">
                <div data-hover-only="true" class="scene">
                    <img class="slide-img" data-depth="0.2" src="{{asset('assets/img/woman1.png')}}" alt="img">
                </div>
            </div>
            <div class="container">
                <img class="slide-img-effect" src="{{asset('assets/img/slider-square.svg')}}" alt="img">
                <div class="text-bg">workout</div>
                <div class="fitness-slide-cover">
                    <h2 class="title">SPARTEL <span>GYM</span></h2>
                </div>
            </div>
        </div>
        <div class="fitness-slide">
            <div class="fitness-slider-effect">
                <div data-hover-only="true" class="scene">
                    <span class="scene-item" data-depth="0.4" style="background-image: url(assets/img/effect-1-1.svg);"></span>
                </div>
            </div>
            <div class="slide-img-cover">
                <div data-hover-only="true" class="scene">
                    <img class="slide-img" data-depth="0.2" src="{{asset('assets/img/woman2.png')}}" alt="img">
                </div>
            </div>
            <div class="container">
                <img class="slide-img-effect" src="{{asset('assets/img/slider-square.svg')}}" alt="img">
                <div class="text-bg">SPARTEL</div>
                <div class="fitness-slide-cover">
                    <h2 class="title">SPARTEL <span>GYM</span></h2>
                </div>
            </div>
        </div>
        <div class="fitness-slide">
            <div class="fitness-slider-effect">
                <div data-hover-only="true" class="scene">
                    <span class="scene-item" data-depth="0.4" style="background-image: url(assets/img/effect-1-1.svg);"></span>
                </div>
            </div>
            <div class="slide-img-cover">
                <div data-hover-only="true" class="scene">
                    <img class="slide-img" data-depth="0.2" src="{{asset('assets/img/woman3.png')}}" alt="img">
                </div>
            </div>
            <div class="container">
                <img class="slide-img-effect" src="assets/img/slider-square.svg" alt="img">
                <div class="text-bg">Cardio</div>
                <div class="fitness-slide-cover">
                    <h2 class="title">SPARTEL <span>GYM</span></h2>
                </div>
            </div>
        </div>
    </div>

</section>


<!-- ============== S-CLUB-CARDS ============== -->
<section class="s-club-cards club-cards-lite club-cards-fitness" id="programmes">
    <span class="section-title-bg" >Programme Sportif </span>
    <div class="container">
        <h2 class="title-decor">Programme <span> Sportif</span></h2>
        <p class="slogan">sélectionner le programme de votre choix.</p>
        <div class="row">

            <div class="col-md-4 club-card-col">
                <div class="club-card-item" style="background-image: url('{{asset('assets/img/categories/plus.png')}} )'">
                    <div class="price-cover">
                        <div class="price"><span></span><img style="width: 250px;" src="{{asset('assets/img/categories/plus.png')}}" alt=""></div>
                        <div class="date">ajouter</div>
                    </div>
                    <div class="club-card-text">créer votre programmes sportif</div>
                    <a class="btn">ajouter</a>
                </div>
            </div>

			@forelse ($categories as $value)


            <div class="col-md-4 club-card-col">
                <div class="club-card-item" style="background-image: url(assets/img/bg-price-1.svg); ">
                    <div class="price-cover">
                        <div class="price"><span></span><img style="width: 250px;" src="{{asset('assets/img/categories')}}/{{$value->photo_categorie}}" alt=""></div>
                        <div class="date">{{$value->nom_categorie}}</div>
                    </div>
                    <div class="club-card-text">{{$value->description_categorie}}</div>
                    <a href="/jours/{{$value->id_categorie}}" class="btn">Afficher </a>
                </div>
            </div>
			@empty

			@endforelse
        </div>
    </div>

</section>
<!-- ============ S-CLUB-CARDS END ============ -->
<section class="s-about-information counter-animate counter-active" style="background-image: url(assets/img/slide-2.jpg);">
	<div class="mask"></div>
	<img class="trainer-awards-effect" src="assets/img/bg-competitions.svg" alt="effect">
	<div class="container">
		<div class="about-info-row">
			<div class="about-info-col">

			</div>
			<div class="about-info-col">

                <h1 class="title-decor"> <span> 1-3mois</h1>
                <h3>Dureé</h3>
			</div>
			<div class="about-info-col">
				<div class="number" data-number="{{$categorie_count}}"></div>
				<h3>categories</h3>
			</div>
			<div class="about-info-col">
				<div class="number" data-number="{{$exercices_count}}"></div>
				<h3>exercices</h3>
			</div>
			<div class="about-info-col">

			</div>
		</div>
	</div>
</section>

<!-- =========== FITNESS-OUR-PROGRAM =========== -->
<section class="fitness-our-program" style="background-image: url(assets/img/bg-best.svg);" id="exercices">
    <div class="container">
        <br>
        <h2 class="title-decor">les catégories  <span>des exercices</span></h2>
        <div class="row">
			@forelse ($exercices as $value)
            <div class="col-sm-4 fitness-program-col">
                <a href="/exercice-categorie/{{$value->id_categorie_exercice}}">  <div class="fitness-program-item">
                    <div class="fitness-program-item-front" style="background-image: url('assets/img/exercices/{{$value->photo_categorie_exercice}}');">
                        <div class="fitness-program-item-inner">
                            <div class="date">{{$value->nom_categorie_exercice}}</div>
                            <h3>{{$value->nom_categorie_exercice}}</h3>
                        </div>
                    </div>

                </div></a>
            </div>
			@empty

			@endforelse

        </div>

    </div>
</section>
<!-- ========= FITNESS-OUR-PROGRAM END ========= -->

<!-- ============== S-BEST-TRAINER ============== -->
<section class="s-best-trainer fitness-best-trainer">
    <span class="section-title-bg" id="a-propos">À propos</span>
    <div class="container">
        <h2 class="title-decor">À propos <span></span></h2>
        <p class="slogan">
			</p>
    </div>

</section>
<!-- ============ S-BEST-TRAINER END ============ -->

<!-- ============= S-FITNESS-BANNER ============= -->
<section class="s-fitness-banner">
    <div class="fitness-banner-effect" style="background-image: url(assets/img/bg-best.svg);"></div>
    <div class="container">
        <div class="fitness-banner-row">
            <div class="fitness-banner-left" style="background-image: url('assets/img/logo  spartel gym black and red.png'); background-size: 120%"></div>
            <div class="fitness-banner-right">
                <h2>SPARTEL <span></span>GYM</h2>
                <p>Nos programmes <a href="#">SPARTEL</a> fournissent une variété d’exercices qui vous aideront à améliorer vos compétences et tout autour du physique dans presque tous les sports disponibles </p>
            </div>
        </div>
    </div>
</section>
<!-- =========== S-FITN =ESS-BANNER END =========== -->





	<!-- ================== FOOTER ================== -->
	@include('layouts.footer')
	<!-- ================ FOOTER END ================ -->

	<!--=================== TO TOP ===================-->
	<a class="to-top" href="#home">
		<i class="fa fa-chevron-up" aria-hidden="true"></i>
	</a>
	<!--================= TO TOP END =================-->

	<!--=================== SCRIPT	===================-->
	<script src="assets/js/jquery-2.2.4.min.js"></script>
	<script src="assets/js/slick.min.js"></script>
	<script src="assets/js/isotope.pkgd.js"></script>
	<script src="assets/js/jquery.fancybox.js"></script>
	<script src="assets/js/rx-lazy.js"></script>
	<script src="assets/js/parallax.min.js"></script>

	<script src="assets/js/scripts.js"></script>
</body>
</html>
