@extends('main')
@section('container')
<h1>Welcome To Flowelto Shop</h1>
<h3>The Best Flower Shop in BINUS University</h3>
<div class="container mt-5">
    <div class="row">
      {{-- memunculkan category --}}
    @foreach ($category as $category)
    <div class="col-md-3">
      <div class="text-center">
        <div class="card">
            <img class="card-img-top" src="{{$category->image}}" alt="Card Image" style="height: 10cm">
          </div>
          <div class="card-body">
            <a href="/viewflowers/{{$category->id}}">
            <h6 class="card-title text-center">{{$category->name}}</h6>
            </a>
          </div>
      </div>
    </div>
     
      @endforeach
    </div>
</div>
@endsection