<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\User;
Use App\Api\Role;
Use App\RoleUser;


class UserController extends Controller{
public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

     public function login(){
         $credential =
         ['email'=>'admin@gmail.com',"password"=>"password"];
         $token= auth()->attempt($credential);

         return $token;

         // return response()->json(User::find(1)->roles()->get()->first());
   }



}
