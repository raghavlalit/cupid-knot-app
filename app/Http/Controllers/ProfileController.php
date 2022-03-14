<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auth_user_email = Auth::user()->email;
        $auth_user_gender = Auth::user()->gender;
        $auth_user_income = Auth::user()->income;
        $auth_user_p_income =explode("-",Auth::user()->p_income) ;
        $users = User::where('email', '!=' ,$auth_user_email)->where('gender', '!=' ,$auth_user_gender)->get();
        
        $matchArr = [];
        foreach ($users as $key => $user) {
            $user_p_income =explode("-",$user->p_income) ;

            $matchValue = 0;
            if(in_array($user->occupation, Auth::user()->p_occupation)){
                $matchValue += 10;
            }
            if(($auth_user_p_income[0] <= $user->income) && ($user->income <= $auth_user_p_income[1])){
                $matchValue += 10;
            }
            if(($user_p_income[0] <= Auth::user()->income) && (Auth::user()->income <= $user_p_income[1])){
                $matchValue += 10;
            }
            if(in_array($user->family_type,Auth::user()->p_family_type )){
                $matchValue += 10;
            }
            if($user->manglik==Auth::user()->p_manglik){
                $matchValue += 10;
            }
            if($user->p_manglik==Auth::user()->manglik){
                $matchValue += 10;
            }
            if(in_array(Auth::user()->family_type,$user->p_family_type )){
                $matchValue += 10;
            }
            if(in_array(Auth::user()->occupation, $user->p_occupation)){
                $matchValue += 10;
            }
            $matchArr[$user->id] = $matchValue;
        }
        return view('profile.index', compact('users', 'matchArr'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}