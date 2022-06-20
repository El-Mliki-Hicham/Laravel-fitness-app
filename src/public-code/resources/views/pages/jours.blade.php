<!DOCTYPE html>
<html lang="zxx">
@include('layouts.head')

<body id="home" class="page-fitness">

    <!-- ================= HEADER ================= -->
    @include('layouts.header')
    <!-- =============== HEADER END =============== -->

    <!-- ============= HEADER-TITLE  ============= -->
    <section class="s-header-title" style="background-image: url({{asset('assets/img/bg-1-min.png')}});">
        <div class="container">
            @php
            foreach ($jours as $valuee) {};
            @endphp
            <h1 class="title"> Programme de {{$valuee->nom_categorie}} </h1>
            <ul class="breadcrambs">
                <li><a href="{{route('home')}}">ACCUEIL</a></li>
                <li>CATEGORIE </li>
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
                        <p>Notre programme  se concentre sur l’agilité et la vitesse et votre saut vertical tout en améliorant votre 
                            physique afin de maximiser votre performance sur le terrain sans avoir à compter sur un entraîneur.</p>
                        
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ============ S-ABOUT-PROGRAM END ============ -->

    <!-- ============== S-ABOUT-BOTTOM ============== -->
   
    <!-- ============ S-ABOUT-BOTTOM END ============ -->

    <!-- =============== S-OUT-TRAINER =============== -->
    <section class="s-out-trainer" style="background-image: url({{asset('assets/img/bg-contacts.svg')}});">
        <div class="container">
            <h2 class="title-decor">jours <span></span></h2>
            
            <div class="row">

                @forelse ($jours as $value)
                <div class="col-md-6 out-trainer-col">
                    <div class="out-trainer-item">
                        <a href="trainer.html" class="out-trainer-img"><img src="{{asset('assets/img/trainer-1.jpg')}}"
                                alt="img"></a>
                        <div class="out-trainer-info">
                            <h3><a href="trainer.html">{{$value->jour}}</a></h3>
                            <div class="prof">Weightlifting</div>
                            
                            <a href="/exercices/{{$value->id_jour}}/{{$value->categorie_id}}" class="btn">Afficher </a>
                        </div>
                    </div>
                </div>

                @empty

                @endforelse
            </div>
        </div>
    </section>
    <!-- ============= S-OUT-TRAINER END ============= -->


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
