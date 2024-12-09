<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cookie;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id){
    $name = "Donal Tramp"; 
    $age = "75";
    $data = [

        'id'=> $id ,

        'name'=> $name ,

        'age' => $age,
    ];
    
    $cookie = Cookie::make(
        'access_token',    
        '123-XYZ',          
        1,                  
        '/',               
        $_SERVER['SERVER_NAME'], 
        false,            
        true                
    );
    return response()->json($data, 200)->cookie($cookie);
    }
}
