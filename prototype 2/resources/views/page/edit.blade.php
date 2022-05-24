@extends('layouts.app')

@section('content')




@forelse ($image as $item)
<div class="card" style="width: 18rem;">
    <img src="{{ asset('image')}}/{{ ($item->image) }}" alt="">
    {{-- <img src="image/{{$item->image}}" class="card-img-top" style="width: 200px" alt="..."> --}}
    <div class="card-body">
      <h5 class="card-title"></h5>
        <!-- CSRF token -->
        @csrf
        <!-- <input type="hidden" name="_method" value="DELETE"> -->
        @method('DELETE')
        <input type="submit" value="x Supprimer" >
    </form>
    </div>
    
</div>
@empty
@endforelse


@endsection