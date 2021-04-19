@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>My Orders</h4>
            <br> <br>
            @foreach($products as $item)
            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-3">
                
                    <img class="trending-image" src="{{asset('imgs/'.$item->gallery)}}">
                    
                 
             </div>
             <div class="col-sm-4">
                    <div class="">
                      <h2>Name: {{$item->name}}</h2>
                      <h5>Delivery Status: {{$item->status}}</h5>
                      <h5>Address: {{$item->address}}</h5>
                      <h5>Payment Status: {{$item->payment_status}}</h5>
                      <h5>Payment Method:{{$item->payment_method}}</h5>
                      
                    </div>
                 <a href="edit/{{$item['id']}}">   <button type="submit" class="btn btn-warning">Edit</button>
                      <a href="/delete/{{$item->id}}"><button type="submit" class="btn btn-danger">Delete</button></a>
             </div>
             <div class="col-sm-3">
                
             </div>
            </div>
            @endforeach
          </div>
         <br> <br>

     </div>
</div>
@endsection