@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-10">
       
            <form action="/created" method="POST" enctype="multipart/form-data" >
              @csrf
              <div class="form-group">
              <label for="exampleInputEmail1"></label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Product Name">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1"></label>
                <input type="number" name="price" class="form-control" id="exampleInputEmail1" placeholder="price">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1"></label>
                <input type="text" name="category" class="form-control" id="exampleInputEmail1" placeholder="Category">
                </div>
                <div class="form-group">
                  <textarea name="description" placeholder="product description" class="form-control" ></textarea>
                </div>
                <div class="form-group">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" name="gallery" class="form-control-file" id="exampleFormControlFile1">
  </div>
              

     
                <button type="submit" class="btn btn-default">Create Now</button>
              </form>
          </div>
     </div>
</div>
@endsection