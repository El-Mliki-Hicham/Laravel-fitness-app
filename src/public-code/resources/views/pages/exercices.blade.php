
	<!DOCTYPE html>
	<html lang="zxx">
	@include('layouts.head')
	
	<body id="home" class="page-fitness">
	
	
		@include('layouts.header')

	<!--================ RELATED POSTS ================-->


	<section class="s-header-title" style="background-image: url({{asset('assets/img/bg-1-min.png')}});">
		<div class="container">

			@php foreach  ($exercices as $valuee) {} @endphp
		<h1 class="title"> les exercices de  {{$valuee->jour}}
		</h1>
		
			<ul class="breadcrambs">
				<li><a href="{{route('home')}}">ACCUEIL</a></li>
				<li>CATEGORIE </li>
			</ul>
		</div>
	</section>

.


	<section class="s-related-posts">
		<div class="container">
			<h2 class="title-decor">les exercices de  <span>News</span></h2>
			<p class="slogan">Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor,
				auctor tincidunt lorem ut, venenatis dapibus miq.</p>
			<div class="row">
				@forelse ($exercices as $value)

  

				<div class="col-md-4 related-post-col">
					<div class="post-item-cover">
						<div class="post-header">
							<div class="related-post-categ">fitness</div>
							<div class="post-thumbnail">
								<a href="single-blog.html"><img class="rx-lazy" src="assets/img/placeholder-all.png"
										data-src="assets/img/blog-4.jpg" alt="img"></a>
							</div>
						</div>
						<div class="post-content">
							<div class="meta">
								<span class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i>{{$value->nom_exercice}}</span>
							</div>
							<h3 class="title"><a href="single-blog.html">Sed ut perspiciatis unde omnis</a></h3>
							<div class="text">
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
									laudantium, totam rem...</p>
							</div>
						</div>
						<div class="post-footer">
							<div class="meta">
								<span class="post-by"><i class="fa fa-user" aria-hidden="true"></i><a href="#">By
										Rovadex</a></span>
								<span class="post-comment"><i class="fa fa-comment" aria-hidden="true"></i><a href="#">2
										Comments(s)</a></span>
							</div>
							<a href="single-blog.html" class="btn"><span>read more</span></a>
						</div>
					</div>
				</div>
				@empty
     
				@endforelse
				
			</div>



		</div>






		<section class=" testimonials-border"
			style="">
			
			<div class="container">
				<div class="testimonials-slider">
					
					<div class="testimonial-slide">

						<h3 class="name text-dark">Kat Smith</h3>
						<div class="title-decor">ur client</div>
						
					</div>
				</div>
			</div>
		</section>
		<!-- ============ S-TESTIMONIALS END ============ -->

	</section>
	<!--============== RELATED POSTS END ==============-->

	@include('layouts.footer')
	<!-- ================ FOOTER END ================ -->

	<!--=================== TO TOP ===================-->
	<a class="to-top" href="#home">
		<i class="fa fa-chevron-up" aria-hidden="true"></i>
	</a>
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