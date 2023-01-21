<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PersonalAccessToken;

class AuthController extends Controller
{   
    

    public function register(Request $request){
        $name=$request->input("name");
        $lastname=$request->input("lastname");
        $nit=$request->input("nit");
        $password=$request->input("password");
        $passwordValidate=$request->input("validatePassowrd");
        $email=$request->input("email");

        $User= new User();

        $User->name=$name;
        $User->lastname=$lastname;
        $User->nit=$nit;
        $User->password=$password;
        

        
     return response()->json(["name"=>$name,"lastname"=>$lastname,"name1"=>$name1,"lst1"=>$lastname1]);


    }
    public function signin(Request $request){
        
    }
    public function logout(Request $request){
        
    }

    private function refreshToken( $id){

    }

    private function revoqueToken($id){


    }


   

}
