<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->stateless()->user();

            $findUser = User::where('email', $user->email)->first();
            
            if($findUser){

                Auth::login($findUser);

                return redirect()->intended('dashboard');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'username' => $user->name . '_' . Str::random(5),
                    'email' => $user->email,
                    'password' => Hash::make('12345'),
                    'id_google' => $user->id,
                    'email_verified_at' => now()
                ]);

                Auth::login($newUser);
                return redirect()->intended('dashboard');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
