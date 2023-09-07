<!DOCTYPE html>
<html lang="zxx">
@include('layouts.head')

<body id="home" class="page-fitness">

    <!-- ================= HEADER ================= -->
    @include('layouts.header')
    <!-- =============== HEADER END =============== -->

    <!--================ RELATED POSTS ================-->
    <section class="s-header-title" style="background-image: url({{asset('assets/img/bg-1-min.png')}});">
        <div class="container">
            @php
				 foreach ($exercices as $valuee) {}
			 @endphp
            <h1 class="title"> les exercices de {{$valuee->jour}} </h1>
            <ul class="breadcrambs">
                <li><a href="{{route('home')}}">ACCUEIL</a></li>
                <li>CATEGORIE </li>
            </ul>
        </div>
    </section>
    <br>
    <br>
    <section class="s-related-posts">
        <div class="container">
            <h2 class="title-decor">les exercices de <span>jour</span></h2>
            <br>
            <div class="row">
                @forelse ($exercices as $value)
                <div class="col-md-4 related-post-col">
                    <div class="post-item-cover">
                        <div class="post-header">
                            {{-- @php
                            foreach ($categorie_exercice as $valuee) {};
                            @endphp --}}
                            {{-- <div class="related-post-categ " style="color: white">{{$value->nom_categorie_exercice}} --}}
                            {{-- </div> --}}
                            <div class="post-thumbnail">
                                <a ><img class="rx-lazy"
                                        src="{{asset('assets/img/exercices')}}/{{$value->photo_exercice}}"
                                        data-src="{{asset('assets/img/exercices')}}/{{$value->photo_exercice}}"
                                        alt="img"></a>
                            </div>
                        </div>
                        <div class="post-content  ">
                            <div class="meta">
                            </div>
                            <h3 class="title"><a >repetition : </a></h3>
                            <div class="post-footer">
                                <div class="meta">
                                    <span class="post-by name text-dark	">
                                        {{$value->repetition_exercice}}</span>

                                </div>
                                <a  class="btn"><span>{{$value->nom_exercice}}</span></a>
                            </div>
                            <div class="text">
                                <br>
                                <p>{{$value->description_exercice}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                @endforelse
            </div>
        </div>
        {{-- <section class=" testimonials-border" style="">
            <div class="container">
                <div class="testimonials-slider">
                    <div class="testimonial-slide">
                        <h3 class="name text-dark">Kat Smith</h3>
                        <div class="title-decor">ur client</div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- ============ S-TESTIMONIALS END ============ -->
    </section>
    <!--============== FOOTER ==============-->
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
