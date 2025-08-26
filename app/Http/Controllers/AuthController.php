<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register(Request $request){
       try{
         $validatedData=$request->validate([
            'name'=> 'required|string|max:255',
            'email'=>'required|email|unique:users',
            'password' =>'required|string|min:8|confirmed'
        ]);

        $validatedData['password']= Hash::make($validatedData['password']);

        $user=User::create($validatedData);
        Auth::login($user);

         return response()->json([
            'success'=>true,
            'message'=>'User Registered Successfully',
            'user'=>[
                'id'=>$user->id,
                'name'=>$user->name,
                'email'=>$user->email
            ],
            'token'=>$user->createToken('auth_token')->plainTextToken
        ], 201);

       }catch(ValidationException $e){
             return response()->json([
            'success'=>false,
            'message'=>'Validation failed',
            'errors'=>[
                'email'=>['Email already exists']
            ]
        ]);
       }catch(Exception $e){
            return response()->json([
            'success' => false,
            'message' => 'Registration failed. Please try again.',
            'debug_error' => $e->getMessage()
        ],500);
       }

    }
    public function login(){

    }
    public function logout(){

    }
}
