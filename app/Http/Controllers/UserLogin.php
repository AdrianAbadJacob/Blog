<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLogin extends Controller
{
    function userLogin(Request $req){
        $data = $req->input();
        $req->session()->put('user',$data['user']);
        echo session('user');
    }
}
