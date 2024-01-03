<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
     public function UserRegistration(Request $request){
         return User::create([
            'firstName'=> $request->input('firstName'),
            'lastName' => $request->input('lastName'),
            'email' => $request->input('email'),
            'mobile'=> $request->input('mobile'),
            'password'=> $request->input('password'),


         ]);
     }
}