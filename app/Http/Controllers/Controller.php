<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function responseWithSuccess($message=[],$data=[],$code=200){

      return response()->json(['response_type'=>'success','message'=>$message,'data'=>$data],$code);

    }


    protected function responseWithError($message=[],$data=[],$code=200){

        return response()->json(['response_type'=>'failed','message'=>$message,'data'=>$data],$code);


     }

  protected function responedWithToken($token,$me,$message=[],$code=200){

   $data=[
     'access_token' => $token,
     'token_type' => 'bearer',
     'expires_in' => auth()->factory()->getTTL() * 60,
     'role'=>$me->role
        ];
      return response()->json(['response_type'=>'success','message'=>$message,'data'=>$data],$code)->withCookie('t', 'value',45);
}



}
