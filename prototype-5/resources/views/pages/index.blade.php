@include('layouts.head')

{{-- {{print_r($exercice)}} --}}

{{-- @forelse ($exercice as $value) 
    
<h1>{{$value->nom_exercice}}</h1>
@empty
    
@endforelse 
     --}}

>


<div class="container">
    <h2 class="title-decor">les exercices de <span>News</span></h2>
    <br>
    <div class="row">
        @forelse ($exercices as $value)
        <div class="col-md-4 related-post-col">
            <div class="post-item-cover">
                <div class="post-header">
                    <input type="checkbox" value="{{$value->id_exercice}}" name="exercice[]" class="btn-check" id="btn-check-outlined" >

                    <div class="related-post-categ " style="color: white">{{$value->nom_categorie_exercice}}
                    </div>
                    <div class="post-thumbnail">
                        <a href="single-blog.html"><img class="rx-lazy"
                                src="{{asset('assets/img/exercices')}}/{{$value->photo_exercice}}"
                                data-src="{{asset('assets/img/exercices')}}/{{$value->photo_exercice}}"
                                alt="img"></a>
                    </div>
                </div>
                <div class="post-content  ">
                    <div class="meta">
                    </div>
                   
                    <div class="post-footer">
                      <a href="single-blog.html" class="btn"><span>{{$value->nom_exercice}}</span></a>
                    </div>
                    <div class="text">
                        <br>
                        


                        @forelse ($jours as $jour)
                            
                        <input type="checkbox" class="btn-check" name="jour[]"  value="{{$jour->id_jour}}" id="btn-check-outlined" autocomplete="off">
                        <label for="jour">{{$jour->jour}}</label>
                        @empty
                            
                        @endforelse
                        
                    </div>
                </div>
            </div>
        </div>
        @empty
        @endforelse
    </div>
</div>

<a href="ajouter"><button>ajouter</button>
</a>
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