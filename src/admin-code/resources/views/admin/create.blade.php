@include('layouts.app')

@section('content')

<!-- end content head -->
<!-- start with the real content -->
<div id="real">
    <!-- start content here -->
    <div id="forms">
        <div class="wrap card">
            <section class="app-content">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Categories</h3>

                    </div>
                    <div class="col-lg-12">
                        <form action="{{route("categorie.store")}}" method="post" class="form-horizontal">
                            @csrf   
                            <div class="form-group">
                                <label for="control-demo-1" class="col-sm-3">Nom categorie</label>
                                <div class="col-sm-12">
                                    <input type="text"  name="name_categorie" id="control-demo-1" class="form-control">
                                </div>
                            </div><!-- .form-group -->
                            <div class="form-group">
                                <label for="control-demo-2" class="col-sm-3">Description</label>
                                <div class="col-sm-12">
                                    <input type="text" name="description_categorie" id="control-demo-2" class="form-control">
                                </div>
                            </div><!-- .form-group -->
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button>modifier</button>
                                </div>
                            </div><!-- .form-group -->
                        </form>
                    </div>
                </div><!-- END row -->
            </section><!-- #dash-content -->
        </div><!-- .wrap -->





        <!-- exrcices -->
        <div id="forms">
            <div class="wrap card">
                <section class="app-content">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Exercices</h3>

                        </div>
                        <div class="col-lg-12">

                            <form action="#" class="form-horizontal">
                                <div class="form-group">
                                    <label for="control-demo-1" class="col-sm-3">Nom Exercice</label>
                                    <div class="col-sm-12">
                                        <input type="text" id="control-demo-1" class="form-control">
                                    </div>
                                </div><!-- .form-group -->
                                <div class="form-group">
                                    <label for="control-demo-2" class="col-sm-3">Numero</label>
                                    <div class="col-sm-12">
                                        <input type="email" id="control-demo-2" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="control-demo-2" class="col-sm-3">Description</label>
                                        <div class="col-sm-12">
                                            <input type="email" id="control-demo-2" class="form-control">
                                        </div>
                                    </div><!-- .form-group -->

                                    <div class="card" style="width: 20rem;">
                                        <img class="card-img-top" src="img/003.jpg" alt="Card image cap">
                                        <div class="card-body">
                                        </div>
                                    </div>
                                    <input type="file">
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button>modifier</button>
                                    </div>
                                </div>
                                <!-- .form-group -->
                            </form>
                        </div>
                    </div><!-- END row -->
                </section><!-- #dash-content -->
            </div><!-- .wrap -->


            <!-- exrcices -->
            <div id="forms">
                <div class="wrap card">
                    <section class="app-content">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Jours</h3>

                            </div>
                            <div class="col-lg-12">

                                <form action="#" class="form-horizontal">
                                    <div class="form-group">
                                        <label for="control-demo-1" class="col-sm-3">jour</label>
                                        <div class="col-sm-12">
                                            <select name="" id="">
                                                <option value="">select</option>
                                                <option value="">html</option>
                                            </select>
                                        </div>
                                    </div><!-- .form-group -->
                                    <div class="form-group">
                                        <label for="control-demo-2" class="col-sm-3">Numero</label>
                                        <div class="col-sm-12">
                                            <input type="email" id="control-demo-2" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="control-demo-2" class="col-sm-3">Description</label>
                                            <div class="col-sm-12">
                                                <input type="email" id="control-demo-2" class="form-control">
                                            </div>
                                        </div><!-- .form-group -->


                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button>modifier</button>
                                            </div>
                                        </div>
                                        <!-- .form-group -->
                                </form>
                            </div>
                        </div><!-- END row -->
                    </section><!-- #dash-content -->
                </div><!-- .wrap -->
            </div>
        </div>
    </div>
    <!-- .wrap -->
</div>
</div>
</div>

</div>
</div>
<!-- end content -->
</div>
<!-- end the real content -->
</div>
<!-- end content -->
</section>
<!-- end admin -->
<!-- start screpting -->


</html>
