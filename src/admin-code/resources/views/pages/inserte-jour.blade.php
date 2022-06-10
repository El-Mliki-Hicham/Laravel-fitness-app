@extends('pages.principal')
@section('content')
<div class="main-content">
    <h1 class="titre text-center ">
        <strong>Insére le jour</strong>
    </h1>
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <!-- form -->
                        <div class="card-header">Ajouter un jour</div>
                        <div class="card-body">


                            <form action="{{route('afficher-jour.store')}}" method="POST" novalidate="novalidate"
                                enctype="multipart/form-data">

                                @csrf
                                <div class="row">

                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group ">
                                            <label for="cc-exp" class="control-label mb-1">Jour</label>
                                            <input id="cc-exp" name="jour" type="text" class="form-control cc-exp"
                                                value="" data-val="true"
                                                data-val-required="Please enter the card expiration"
                                                data-val-cc-exp="Please enter a valid month and year"
                                                autocomplete="cc-exp">
                                            <span class="help-block" data-valmsg-for="cc-exp"
                                                data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <button class="btn btn-info au-btn--block " style="background-color: #f23849 !important" type="submit"> Ajouter </button>
                                    
                                    
                                </div>
                            </div>
                    </div>
                        </form>

                </div>
            </div>
            <!-- fin -->
            <div class="col-md-12">

            </div>
        </div>
    </div>
</div>
</div>

@endsection
