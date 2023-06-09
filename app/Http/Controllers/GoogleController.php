<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function callbackGoogle()
    {
        try {

            $google_user = Socialite::driver('google')->user();

            $finduser = User::where('google_id', $google_user->getId())->first();

            if($finduser){

                Auth::login($finduser);

                return redirect()->intended('dashboard');

            }else{
                $new_User = User::create([
                    'email' => $google_user->getEmail(),
                    'name' => $google_user->getName(),
                    'google_id' => $google_user->getId(),
                    'level' => '1', // Set a default value for the 'level' column
                    'password' => Hash::make('password')
                ]);

                Auth::login($new_User);

                return redirect()->intended('dashboard');
            }

        } 
        // catch (\Throwable $th) {
        //     dd('HELP ME PLEASE'.$th->getMessage() );
        // }
    }
}