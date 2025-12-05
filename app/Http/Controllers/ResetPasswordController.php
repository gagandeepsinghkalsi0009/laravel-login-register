<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    public function resetpassword(Request $request, $token)
    {

        if ($request->isMethod('get')) {
            return view('resetpassword', [
                'token' => $token,
                'email' => $request->email,
            ]);
        }

        
        if ($request->isMethod('post')) {


            $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:6|confirmed',
                'token' => 'required',
            ]);

            $status = Password::reset(
                $request->only('email', 'password','token','password_confirmation'),
                function ($user, $password) {
                    $user->password = Hash::make($password);
                    $user->save();
                }
            );

            if ($status === Password::PASSWORD_RESET) {
                return redirect()->route('signin')->with('success', 'Password Reset Successful');
            }
            else{
                return "Password not changed";
            }
        }
    }
}
