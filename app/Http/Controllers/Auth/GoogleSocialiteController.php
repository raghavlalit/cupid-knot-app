<?php

namespace App\Http\Controllers\Auth;
   
use App\Http\Controllers\Controller;
use Socialite;
use Auth;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

   
class GoogleSocialiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
       
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('social_id', $user->id)->first();
            if($finduser){
                Auth::login($finduser);
                return redirect('/profile');
            }else{
                $newUser = User::create([
                    'first_name' => $user->user['given_name'],
                    'last_name' => $user->user['family_name'],
                    'email' => $user->email,
                    'social_id'=> $user->id,
                    'social_type'=> 'google',
                    'password' => Hash::make('my-google'),
                    'birthday' => '',
                    'gender' => 'Male',
                    'phone' => '',
                    'income' => '',
                    'occupation' => '',
                    'family_type' => '',
                    'manglik' => '',
                    'p_income' => '',
                    'p_occupation' => [],
                    'p_family_type' => [],
                    'p_manglik' => '',

                ]);
     
                Auth::login($newUser);
      
                return redirect('/profile');
            }
     
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}