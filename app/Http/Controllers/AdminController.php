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
            return redirect()->route('admin.dash');
        }
       
    }
   
    }

    // display pages made by admin dashboard
    function displaypage(){
        $page = AdminPage::get();
        return view('showpageadmin',compact('page'));
    }

    // edit pages made by admin dashboard
    function editpage($id){
        $editpage = AdminPage::find($id);
        if($editpage){
        return view('editadmin',compact('editpage'));
        }
        else{
            return "page not found";
        }
    }






    // delete pages made by admin dashboard 
    function deletepage($id){
        $deletepage = AdminPage::find($id);
        if($deletepage){
            $deletepage->delete();
            return redirect()->route('display.page');
        }
        else{
            return "An Error Occured try again";
        }

    }

    // update pages made by admin
    function updateadmin(Request $request ,$id){
        $updateadmin = AdminPage::where('id',$id)->update([
            'url_key'=>$request->url_key,
          'meta_title'=>$request->meta_title,
         'meta_description'=>$request->meta_description,
          'content'=>$request->content,
            'status'=>$request->status,
        ]);
        if($updateadmin){
            return redirect()->back()->with('success',"Details Updated Successfully");
        }
        else{
            return "details not updated";
        }
    }

    

}

