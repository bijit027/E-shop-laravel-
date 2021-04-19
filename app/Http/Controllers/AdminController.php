<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use App\Models\Admin;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    function adminLogin(Request $req)
    {
        $admin= Admin::where(['email'=>$req->email])->first();
        if(!$admin || !Hash::check($req->password,$admin->password))
        {
            return "Username or password is not matched";
        }
        else{
            $req->session()->put('admin',$admin);
            return redirect('/adminhome');
        }
    }
}
