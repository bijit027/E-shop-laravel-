<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class AdminViewController extends Controller
{
    //
    function index(){
        $data=Product::all();
        return view('adminview',['products'=>$data]);

    }
    function create(Request $req){
        $create = new Admin;
        $create->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
      return  redirect('/login');

}
function editDetail($id)
    {
        $data =Product::find($id);
        return view('edit',['product'=>$data]);
    }
}
