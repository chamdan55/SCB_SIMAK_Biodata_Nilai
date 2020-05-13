<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;

class loginController extends BaseController
{
    public function login(Request $_req){
        $username = $_req->input('username');
        $password = $_req->input('password');

        //echo $username."---".$password;
        $checkLogin = DB::table('users')->where(['name'=>$username, 'password'=>$password])->get();
        if(count($checkLogin)>0){
            return view('dashboard');
        }
        else{
            echo "Login Failed";
        }
    }
}

?>