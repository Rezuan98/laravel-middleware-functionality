<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dashboard;

class UserController extends Controller
{


   public function OnShow(){

    return view('index');
   }

   
   
   public function OnInsert(Request $req){


    $info = new dashboard();

    $info->name = $req->name;
    $info->email = $req->email;
    $info->password = $req->password;

    $info->save();

    return redirect('/');


   }
   public function OnLogin(){

    return view('login');
   }

   public function CheckLogin(Request $req){

    $email = $req->email;
    $password = $req->password;

    $count = dashboard::where('email','=',$email)->where('password','=',$password)->count();

    if($count==1){
       $req->session()->put('email',$email);

       return redirect('/admin');

    }else{
        return "failed";
    }

   }

   public function OnAdmin(){
    
    return view('admin');
   }

   public function OnLogout(Request $req){

    $req->session()->flush();

    return view('login');

   }
}
