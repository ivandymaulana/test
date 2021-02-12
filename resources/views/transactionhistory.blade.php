@extends('navbar')
@section('container')
<table class="table">
    <thead>
        <h3 style="text-align: center">Transaction History</h3>
      <tr>
        <th scope="col">Item Name</th>
        <th scope="col">Quantity</th>
        <th scope="col">Price</th>
        <th scope="col">Time</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($history as $histories)
        <td>{{$histories->name}}</td>
        <td>{{$histories->quantity}}</td>
        <td>{{$histories->price}}</td>
        <td>{{$histories->created_at}}</td>
    </tbody>
    @endforeach
</table>
    
@endsection