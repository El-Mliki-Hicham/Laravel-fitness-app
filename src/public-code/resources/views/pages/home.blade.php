<!DOCTYPE html>
<html lang="zxx">
@include('layouts.head')

<body id="home" class="page-fitness">
	<!--================ PRELOADER ================-->
	<div class="preloader-cover">
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
	</div>
	<!--============== PRELOADER END ==============-->
	
	<!-- ================= HEADER ================= -->
	@include('layouts.header')
	<!-- =============== HEADER END =============== -->

	<!-- ============ S-FITNESS-SLIDER ============ -->
	
	<!-- ============ S-TESTIMONIALS END ============ -->
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
                    <h2 class="title">push <span>yourself</span></h2>
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
                <div class="text-bg">Yoga</div>
                <div class="fitness-slide-cover">
                    <h2 class="title">push <span>yourself</span></h2>
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
                    <h2 class="title">push <span>yourself</span></h2>
                </div>
            </div>
        </div>
    </div>
    
</section>
<!-- ========== S-FITNESS-SLIDER END ========== -->

<!-- ============ S-WELCOME-FITNESS ============
<section class="s-welcome-fitness">
    <div class="container">
        <div class="welcome-fitness-row">
            <div class="welcome-fitness-img">
                <img class="rx-lazy" src="assets/img/placeholder-all.png" data-src="assets/img/home2-about.jpg" alt="img">
            </div>
            <div class="welcome-fitness-item">
                <div class="welcome-fitness-info">
                    <h2 class="title-decor">Welcome To <span>Fitness</span></h2>
                    <p>Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus mi. Nunc venenatis sollicitudin nisl vel auctor.</p>
                    <a href="#" class="btn">read more</a>
                </div>
                <img class="fitness-img rx-lazy" src="assets/img/placeholder-all.png" data-src="assets/img/home2-about-2.jpg" alt="img">
            </div>
        </div>
    </div>
</section> -->
<!-- ========== S-WELCOME-FITNESS END ========== -->

<!-- ============== S-CLUB-CARDS ============== -->
<section class="s-club-cards club-cards-lite club-cards-fitness">
    <span class="section-title-bg">Programme Sportif </span>
    <div class="container">
        <h2 class="title-decor">Programme <span> Sportif</span></h2>
        <p class="slogan">Sélectionnez votre Programme Sportif	.</p>
        <div class="row">
			@forelse ($categories as $value)
				
			
            <div class="col-md-4 club-card-col">
                <div class="club-card-item" style="background-image: url(assets/img/bg-price-1.svg);">
                    <div class="price-cover">
                        <div class="price"><span>$</span>220</div>
                        <div class="date">{{$value->nom_categorie}}</div>
                    </div>
                    <div class="club-card-text">Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolortin lorem ut.</div>
                    <a href="program.html" class="btn">order now</a>
                </div>
            </div>
			@empty
				
			@endforelse
        </div>
    </div>

</section>
<!-- ============ S-CLUB-CARDS END ============ -->

<!-- =========== FITNESS-OUR-PROGRAM =========== -->
<section class="fitness-our-program" style="background-image: url(assets/img/bg-best.svg);">
    <span class="section-title-bg">Tous les exercices</span>
    <div class="container">
        <h2 class="title-decor">Tous <span>les exercices</span></h2>
        <p class="slogan">Tous les exercices disponibles dans nos site web.</p>
        <div class="row">
			@forelse ($exercices as $value)
            <div class="col-sm-4 fitness-program-col">
                <div class="fitness-program-item">
                    <div class="fitness-program-item-front" style="background-image: url(assets/img/home2-program-1.jpg);">
                        <div class="fitness-program-item-inner">
                            <div class="date">{{$value->nom_exercice}}</div>
                            <h3>cardio training</h3>
                        </div>
                    </div>
                    <div class="fitness-program-item-back" style="background-image: url(assets/img/home2-program-1.jpg);">
                        <a href="program.html" class="fitness-program-item-inner">
                            <div class="date">monday 11:00AM</div>
                            <h3>cardio training</h3>
                        </a>
                    </div>
                </div>
            </div>
			@empty
				
			@endforelse
           
            
			
            
           
        </div>
        <a href="program.html" class="btn">view more</a>
    </div>
</section>
<!-- ========= FITNESS-OUR-PROGRAM END ========= -->

<!-- ============== S-BEST-TRAINER ============== -->
<section class="s-best-trainer fitness-best-trainer">
    <span class="section-title-bg">Best Trainer</span>
    <div class="container">
        <h2 class="title-decor">Best <span>Trainer</span></h2>
        <p class="slogan">Maecenas consequat ex id lobortis venenatis. Mauris id erat enim.</p>
    </div>
    <div class="best-trainer-slider">
        <a href="trainer.html" class="best-trainer-slide">
            <div class="best-trainer-img">
                <img src="assets/img/single-1.jpg" alt="img">
            </div>
            <h3 class="name">Samanta</h3>
            <h3 class="surname">Piters</h3>
            <div class="prof">weightlifting</div>
        </a>
        <a href="trainer.html" class="best-trainer-slide">
            <div class="best-trainer-img">
                <img src="assets/img/single-2.jpg" alt="img">
            </div>
            <h3 class="name">Artur</h3>
            <h3 class="surname">Piters</h3>
            <div class="prof">weightlifting</div>
        </a>
        <a href="trainer.html" class="best-trainer-slide">
            <div class="best-trainer-img">
                <img src="assets/img/single-3.jpg" alt="img">
            </div>
            <h3 class="name">Kim</h3>
            <h3 class="surname">Piters</h3>
            <div class="prof">weightlifting</div>
        </a>
        <a href="trainer.html" class="best-trainer-slide">
            <div class="best-trainer-img">
                <img src="assets/img/single-4.jpg" alt="img">
            </div>
            <h3 class="name">Sam</h3>
            <h3 class="surname">Piters</h3>
            <div class="prof">weightlifting</div>
        </a>
        <a href="trainer.html" class="best-trainer-slide">
            <div class="best-trainer-img">
                <img src="assets/img/single-5.jpg" alt="img">
            </div>
            <h3 class="name">Anna</h3>
            <h3 class="surname">Piters</h3>
            <div class="prof">weightlifting</div>
        </a>
    </div>
</section>
<!-- ============ S-BEST-TRAINER END ============ -->

<!-- ============= S-FITNESS-BANNER ============= -->
<section class="s-fitness-banner">
    <div class="fitness-banner-effect" style="background-image: url(assets/img/bg-best.svg);"></div>
    <div class="container">
        <div class="fitness-banner-row">
            <div class="fitness-banner-left" style="background-image: url(assets/img/best-1.jpg);"></div>
            <div class="fitness-banner-right">
                <h2>the best <span>trainers</span> are here</h2>
                <p>are you a trainer? <a href="trainer.html">check this out.</a></p>
            </div>
        </div>
    </div>
</section>
<!-- =========== S-FITNESS-BANNER END =========== -->

<!-- ============== S-TESTIMONIALS ============== -->
<section class="s-testimonials testimonials-border s-fitness-testimonials" style="background-image: url(assets/img/bg-testimonials.jpg);">
    <div class="mask"></div>
    <img class="testimonials-effect" src="assets/img/bg-testi-2.svg" alt="effect">

    <div class="container">
        <div class="testimonials-slider">
            <div class="testimonial-slide">
                <img src="assets/img/testimonials-1.png" alt="img">
                <h3 class="name">Anna Piters</h3>
                <div class="prof">our client</div>
                <p>“Phasellus vestibulum nec dolor quis varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus gravida magna sit amet euismod lacinia. Lorem ipsum dolor sit amet, consectetur adipiscing elit”</p>
            </div>
            <div class="testimonial-slide">
                <img src="assets/img/testimonials-2.png" alt="img">
                <h3 class="name">Mark Klark</h3>
                <div class="prof">our client</div>
                <p>“Phasellus vestibulum nec dolor quis varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus gravida magna sit amet euismod lacinia.”</p>
            </div>
            <div class="testimonial-slide">
                <img src="assets/img/testimonials-3.png" alt="img">
                <h3 class="name">Kat Smith</h3>
                <div class="prof">our client</div>
                <p>“Phasellus vestibulum nec dolor quis varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus gravida magna sit amet euismod lacinia. Lorem ipsum dolor sit amet, consectetur adipiscing elit”</p>
            </div>
        </div>
    </div>
</section>
	
	<!-- ============= S-FITNESS-POSTS ============= -->
	
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