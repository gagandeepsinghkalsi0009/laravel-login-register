<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Password;


class ForgotPasswordController extends Controller
{
    function forgotpassword(Request $request){
        if($request->isMethod('get')){
            
            return view('forgotpassword');
        }

        if($request->isMethod('post')){

            $request->validate([
                'email'=>'required|email'
            ],[
            'email.required'=>'Email is Required to Reset Password',
            'email.email'=>'Email Should Be in Proper Format',
            ]);
            
            $link = Password::sendResetLink(
                $request->only('email'));

              if ($link === Password::RESET_LINK_SENT) {

             return back()->with('success', __($link));
                
            } else {

           return back()->with(['email' => __($link )]);
        }
       
     }

    }

}
  


   
