<?php

namespace App\Http\Controllers;

use Exception;
use Throwable;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }
    public function googleAuthentication()
    {
        try
        {
            $googleUser=Socialite::driver('google')->user();
            $user= User::where('google_id', $googleUser->getId())->first();

            if(!$user){
                $newUser=User::create([
                    'name'=>$googleUser->getName(),
                    'email'=>$googleUser->getEmail(),
                    'google_id'=>$googleUser->getId()
                ]);

                if($newUser){
                 Auth::login($newUser);
                 return redirect()->intended('dashboard');
                }
            }else{
                Auth::login($user);
                return redirect()->route('dashboard');
            }
           
        }catch(Exception $e){
            dd('Something went wrong!' .$e->getMessage());
        }
    }

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
            ]
            
        ], 201);
       }catch(ValidationException $e){
             return response()->json([
            'success'=>false,
            'message'=>'Validation failed',
            // 'errors'=>[
            //     'email'=>['Email already exists']
            // ]
            'errors'=>$e->errors()
        ],422);
       }catch(Exception $e){
            return response()->json([
            'success' => false,
            'message' => 'Registration failed. Please try again.',
            'debug_error' => $e->getMessage()
        ],500);
       }

    }

    public function login(Request $request)
    {
       try{
         $request->validate([
            'email'=>'required|email',
            'password'=>'required'
         ]);

         if(Auth::attempt($request->only('email', 'password'))){
            $user=Auth::user();
            
            return response()->JSON([
            'success'=>true,
            'message'=>'User logged in successfully',
            'user'=>$user,
           
        ]);
    }

        return response()->JSON([
            'success'=>false,
            'message'=>'Invalid credentials'
        ],401);

       }catch(Exception $e){
        return response()->JSON([
            'success'=>false,
            'message'=>'Logged in Failed'
        ],500);
       }
    }
    public function logout(Request $request){
       try{
        $request->user()->currentAccessToken()->delete();

        return response()->JSON([
            'success'=>true,
            'message'=>"Successfully logged out"
        ]);

       }catch(Exception $e){
        return response()->JSON([
            'successful'=>false,
            'message'=> 'Logout failed'
        ],500);
       }

    }
}
