@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-10">
       
            <form action="/edited/{{$product['id']}}" method="POST" enctype="multipart/form-data" >
              @csrf
              <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" value="{{$product['name']}}" class="form-control" id="exampleInputEmail1" placeholder="Product Name">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Price</label>
                <input type="number" name="price" value="{{$product['price']}}" class="form-control" id="exampleInputEmail1" placeholder="price">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Category</label>
                <input type="text" name="category" value="{{$product['category']}}" class="form-control" id="exampleInputEmail1" placeholder="Category">
                </div>
                <label for="exampleInputEmail1">Description</label>
                <div class="form-group">
                  <textarea name="description"  class="form-control" >{{$product['description']}} </textarea>
                </div>
                <div class="form-group">
    <label for="exampleFormControlFile1">Previous file</label>
    <img class="trending-image" src="{{asset('imgs/'.$product->gallery)}}">
    <input type="file"  name="gallery" class="form-control-file" id="exampleFormControlFile1">
  </div>
              

     
                <button type="submit" class="btn btn-default">Edit</button>
              </form>
          </div>
     </div>
</div>
@endsection