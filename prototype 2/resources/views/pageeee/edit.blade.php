


 @extends('layouts.app')

@section('content')



@forelse ($image as $item)
<form method="post" action="{{route('pageeee.update',$item->id)}}" enctype="multipart/form-data" >
    @method('PUT')
    @csrf
<div class="card" style="width: 18rem;">
    <img src="{{ asset('image')}}/{{ ($item->image) }}" alt="">
    <input type="hidden" name="image" value="{{ $item->image }}">
    <input type="hidden" name="id" value="{{ $item->id }}">
    {{-- <img src="image/{{$item->image}}" class="card-img-top" style="width: 200px" alt="..."> --}}
    
    <div class="card-body">
    <input type="file" name="imagg">
        <h5 class="card-title"></h5>
        <!-- CSRF token -->
     <button>ajoute</button>
    </form>
    </div>
    
</div>
@empty
@endforelse


@endsection
