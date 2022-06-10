@extends('pages.principal')
@section('content')


    <!-- PAGE CONTAINER-->

    <!-- HEADER DESKTOP-->


    <!-- MAIN CONTENT-->
    <div class="main-content">
        <h1 class="titre text-center ">
            <strong>MODIFIER LE CATEGORIE</strong>
        </h1>
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <!-- form -->
                            <div class="card-header">Modifier</div>
                            <div class="card-body ">
                                <div class="row tm-edit-product-row  ">
                                    <div class="col-xl-6 col-lg-12 col-md-12">

                                        <!-- start modifier -->
                                        @forelse ($edit as $value)
                                        <form method="POST" action="{{route('afficher-categorie.update',$value->id_categorie)}}" enctype='multipart/form-data'                               
                                            class="tm-edit-product-form">
                                            @method("put")
                                             @csrf
                                          
                                                
                                           
                                            <div class="form-group mb-3">
                                                <input type="hidden"name="id" value="{{$value->id_categorie}}">
                                                <label for="">Name</label>
                                                <input id="name" name="nom_categorie" type="text"
                                                    class="form-control validate" required
                                                    value="{{$value->nom_categorie}}">
                                            </div>
                                            <div class="form-group mb-3">
                                                
                                                <label for="">Description</label>
                                                <input id="name" name="description_categorie" type="text"
                                                    class="form-control validate" required
                                                    value="{{$value->description_categorie}}">
                                            </div>
                                           
            
                                            
                                            

                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 ">
                                        <div class=" mx-auto">
                                            <img src="{{asset('img/categories')}}/{{$value->photo_categorie}}"
                                                class="tm-product-img-dummy mx-auto" alt="">
                                        </div>
                                        <div class="custom-file mt-3 mb-3">
                                            <input type="hidden"name="img"  value="{{$value->photo_categorie}}">
                                            <input class="btn btn-primary btn-block mx-auto col-lg-6"
                                                value="" type="file" name= "photo_categorie" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit"
                                            class="btn btn-primary btn-block text-uppercase" style="background-color: #f23849 !important">modifier</button>
                                    </div>
                                    @empty
                                                
                                    @endforelse
                                    </form>
                                </div>
                            </div>





                        </div>

                    </div>
                </div>
                <!-- fin -->
                <div class="col-md-12">

                </div>
            </div>
        </div>
    </div>


@endsection