@extends('navbar');
@section('container');
<h3 style="text-align: center"> Detail Flower </h3>
<div class="container">
    <div class="col-md-3">
        <div class="card  ">
            <div class="card-header">
            <img class="card-img-top" src="/{{$flower->image}}" alt="Card image" style="height:5cm">
            <h6 class="card-title text-center">{{$flower->name}}</h6>
        </div>
            <div class="card-body">
                <h5 class="card-title text-center bold">Description</h5>
                <h6 class="card-title text-center">{{$flower->description}}</h6>
            </div>
                <div class="card-footer">
                    <h6 class="card-title text-center">Rp.{{$flower->price}}</h6>
                </div>
                <form role="form" action="/cartflower/{{$flower->id}}" method="POST">
                    @csrf
                <div class="form-group"style="text-align: center">
                    <label for="qty">
                        Quantity
                    </label>
                    <input name="qty" type="number" min="1" max="50" id="qty" />
                </div>
                <button type="submit" class="btn btn-primary">
                    BUY
                </button>
            </form>
        </div>
    </div>
</div>
    
@endsection