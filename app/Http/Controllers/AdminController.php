<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminPage;

class AdminController extends Controller
{
    // add pages by admin dasboard 

    function addpage(Request $request){
        if($request->isMethod('get')){
            return view('addpagadmin');
        }

         if($request->isMethod('post')){
        $add = AdminPage::create([
            'url_key'=>$request->url_key,
            'meta_title'=>$request->meta_title,
            'meta_description'=>$request->meta_description,
            'content'=>$request->content,
            'status'=>$request->status,
        ]);

        if($add){
            return "details added"; 
        }
    }
   
    }

    // display pages made by admin dashboard
    
}
