<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function login(Request $request){
       $credentials = $request->validate([
          'email'=>'required|string',
           'password'=>'required|string'
       ]);

        dd( Auth::attempt($credentials));

//        if (!Auth::attempt($credentials)) {
//            return response([
//                "message"=>"User or password invalid"
//            ],422);
//        }
//        return true;
////        $user = User::find(1);
////        $token = $user->createToken('Token Name')->accessToken;
//        $accessToken=Auth::user()->createToken('token')->;
    }

}
