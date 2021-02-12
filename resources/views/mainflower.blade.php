@extends('navbar');
@section('container')
{{-- Mengecek role untuk manager --}}
@if(Auth::user()->role == 'Manager')
<div class="container">
    <div class="row">
    @foreach ($flower as $viewflowers)
    @if($viewflowers->categories_id===$category->id)
    <div class="col-md-3">
        <div class="card  ">
            <div class="card-header">
            <img class="card-img-top" src="/{{$viewflowers->image}}" alt="Card image" style="height:5cm">
        </div>
            <div class="card-body">
                <h6 class="card-title text-center">{{$viewflowers->name}}</h6>
            </div>
                <div class="card-footer">
                    <h6 class="card-title text-center">Rp.{{$viewflowers->price}}</h6>
                </div>
                <a href="/delete/{{$viewflowers->id}}" class="btn btn-danger" style="text-center">Delete Flower</a>
                <a href="#" class="btn btn-primary" style="text-center">Update Flower</a>
                
        </div>
    </div>
    @endif
    @endforeach
{{-- mengecek role untuk user --}}
@elseif(Auth::user()->role == 'user')
<div class="container">
    <div class="row">
    @foreach ($flower as $viewflowers)
    @if($viewflowers->categories_id===$category->id)
    <div class="col-md-3">
        <div class="card  ">
            <div class="card-header">
            <img class="card-img-top" src="/{{$viewflowers->image}}" alt="Card image" style="height:5cm">
        </div>
            <div class="card-body">
                <h6 class="card-title text-center">{{$viewflowers->name}}</h6>
            </div>
                <div class="card-footer">
                    <h6 class="card-title text-center">Rp.{{$viewflowers->price}}</h6>
                </div>
                <a href="/buyflower/{{$viewflowers->id}}" class="btn btn-primary" style="text-center">Buy</a>
        </div>
    </div>
        
        @endif
        @endforeach
    </div>
    {{-- membuat pagination display flower --}}
    {{$flower->links()}}
</div>
@endif
@endsection
