<?php

namespace App\Http\Controllers;
use App\Mail\UserMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    function mail(Request $request){
        $to = $request->to;
        $subject = $request->subject;
        $body = $request->body;
        $mail = Mail::to($to)->send(new UserMail($subject,$body));
        if($mail){
           return redirect()->back()->with('Mail has been sent successfully');
        }
        else{
            echo "mail has not been sent an error occured";
        }
    }
}
