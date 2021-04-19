@extends('master')
@section("content")
<div class="custom-product">
    
      <div class="trending-wrapper">
    
      <div class="col-sm-4">
      <h3>Product</h3>
        @foreach($products as $item)
        <div class="searrched-item">
          <a href="detail/{{$item['id']}}">
          <img class="trending-image" src="{{asset('imgs/'.$item->gallery)}}" >
          <div class="">
            <h2>{{$item['name']}}</h2>
            <h2>{{$item['description']}}</h2>
          </div>
        </a>
        </div>
        @endforeach
      </div>
       
      </div>
      
</div>
@endsection