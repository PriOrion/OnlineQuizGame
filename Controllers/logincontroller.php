<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Http\Request;
use DB;
class logincontroller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function login(Request $req){
      $username=$req->input('name');
      $email=$req->input('email');
      $password=$req->input('password');
      $checkLogin=DB::table('users')->where(['name'=>$username,'email'=>$email,'password'=>$password])->get();
      if(count($checkLogin)>0){
        echo "success";
        //return view("add");
      }
      else{
      //  echo 'login failed';
      return view("login");
      }
    }
}
