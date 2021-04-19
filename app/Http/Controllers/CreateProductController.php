<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CreateProductController extends Controller
{
    //
    function index(){
        return view('createproduct');
    }
    function create(Request $req){
        $create = new Product;
        
        $create->name=$req->name;
        $create->price=$req->price;
        $create->category=$req->category;
        $create->description=$req->description;
       
        if($req->hasFile('gallery')){
            $file = $req->file('gallery');
           
            $filename=time().'.'.$file->getClientOriginalExtension();
            $dest=public_path('/imgs');

            $file->move($dest,$filename);
            $create->gallery =  $filename;
            
        }
        else{
            return $req;
            $create->gallery="";
        }
      
 
        $create->save();
      return  redirect('/adminview');

}

function delete($id){
    Product::destroy($id);
        return redirect('/adminview');

}
function editDetail($id)
    {
        $data =Product::find($id);
        return view('edit',['product'=>$data]);
    }
    function edited(Request $req,$id){
       
        $name=$req->name;
        $price=$req->price;
        $category=$req->category;
        $description=$req->description;
        if($req->hasFile('gallery',$id)){
            $file = $req->file('gallery');
           
            $filename=time().'.'.$file->getClientOriginalExtension();
            $dest=public_path('/imgs');

            $file->move($dest,$filename);
            
            $req->gallery = $filename;
            
            
        }else{

        }
        $gallery=$req->gallery; 
       
 

       
        
 
      DB::update('update products set name = ?,price=?,category=?,description=?,gallery=? where id = ?',[$name,$price,$category,$description,$gallery,$id]);
      return  redirect('/adminview');

}

}
