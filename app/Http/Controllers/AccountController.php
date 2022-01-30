<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{
    public function register(){
        return view('account.register');
    }
    public function signUp(Request $request){
        $validator = Validator::make($request->all(),
        [
            'username'=>'required|max:50',
            'email'=>'required|max:100',
            'password'=>'required|min:8',
            'confirm_password'=>'required|same:password'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }

        $user = User::all()->firstWhere('email',$request->email);
        if($user!=null){
            return redirect()->back()->with('error_message','Bu istifadəçi artıq mövcuddur!');
        }

        User::create([
            'name'=>$request->username,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);

        return redirect('/login');
    }

    public function login(){
        return view('account.login');
    }

    public function signIn(Request $request){
        $validator = Validator::make($request->all(),
        [
            'email'=>'required|max:100',
            'password'=>'required|min:8'
        ]);   
        
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }

        $user = User::all()->firstWhere('email',$request->email);
        if($user==null)
        {
            return redirect()->back()->with('error_message','Bu istifadəçi mövcud deyil!');
        }
        if(Auth::attempt(['email' => $user->email, 'password' => $request->password]))
        {
            return redirect('/');
        }
        else
        {
            return redirect()->back()->with('error_message','Email və ya parol yanlışdır!');
        }


    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
