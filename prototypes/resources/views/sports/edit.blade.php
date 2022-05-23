<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<div class="container">

    <h2 class="text-center">Contac Form</h2>
	<div class="row justify-content-center">
		<div class="col-12 col-md-8 col-lg-6 pb-5">


                    <!--Form with header-->
                    @forelse ($row as $value)
                    <form action="{{route('sports.update',$value->id)}}" method="post">
                      @method('PUT')
                        @csrf
                        
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h3><i class="fa fa-envelope"></i> Contactanos</h3>
                                    <p class="m-0">Con gusto te ayudaremos</p>
                                </div>
                            </div>
                            <div class="card-body p-3">
                               
                                    
                                
                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input name="name" value="{{$value->name_categorie}}" type="text" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input name="description"value="{{$value->description}}" type="text" class="form-control">
                                    </div>
                                </div>
                                    <input type="hidden"value="{{$value->id}}" name="id" >
                              a        <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>

                                        <input name="message"value="" type="text"class="form-control">
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="ajouter" class="btn btn-info btn-block rounded-0 py-2">
                                </div>
                                @empty
                                    
                                @endforelse
                            </div>

                        </div>
                    </form>