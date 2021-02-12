@extends('navbar');
@section('container');
<h3 style="text-align: center">Your Cart</h3>

<table class="table tablecart">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Image</th>
        <th scope="col">Flower Name </th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($transaction as $transactions)
        {{-- mengeluarkan cart berdasarkan pengecekan auth user ke id --}}
        @if($transactions->user_id==Auth::user()->id)
        <td>{{$transactions->image}}</td>
        <td>{{$transactions->name}}</td>
        <td>Rp.{{$transactions->price}}</td>
        <td>{{$transactions->quantity}}</td>
        <td>
          <form role="form" action="/updatepost/{{$transactions->id}}" method="POST">
            @csrf
        <div class="form-group">
            <label for="qty">
                Quantity
            </label>
            {{-- code untuk qty minimal 1 item max 50 item --}}
            <input name="qty" type="number" min="1" max="50" id="qty" />
        </div>
          <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </td>
        @endif
    </tbody>
    @endforeach
</table>
<div class="containerCheckout">
  <a class="btn btn-danger" href="/transact" role="button">Checkout</a>
</div>


    
@endsection