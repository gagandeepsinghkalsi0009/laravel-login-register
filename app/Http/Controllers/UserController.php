<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth; 

class UserController extends Controller
{
    // Sign up user 
    public function signup(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('signup');
        }

        if ($request->isMethod('post'))
            
            {

                $request->validate([
                'email'=>'required|email|min:5|max:15',
                'password'=>'required|min:4|max:8'
                ],[
                    'email.max'=>'Email Should be Maximum 15 Characteres Long',
                    'email.min'=>'Email Should be Atleast 5 Characteres Long',
                    'password.min'=>'Password Should be Atleast 4 Characteres Long',
                    'email.max'=>'Email Should be Atleast 8 Characteres Long',

                ]);

            $user = User::create([
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'user_type' => $request->user_type,
            ]);

            if ($user) {
                Auth::login($user);
                return redirect()->route('submit');
                return "user registered"; 
            } else {
                return "user not registered";
            }
        }
    }

    // Redirect to fill details
    public function details(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('details');
        }

        if ($request->isMethod('post')) {
            $userid = Auth::id();
            if (!$userid) {
                return "Error: logged-in user not found!";
            }

            $detail = Data::create([
                'name' => $request->name,
                'mobile' => $request->mobile,
                'address' => $request->address,
                'user_id' => $userid,
            ]);

            if ($detail) {
                return redirect()->route('signin');
            } else {
                return "Data not inserted!";
            }
        }
    }
    // Sign in user and admin 

    public function signin(Request $request)
{
    if ($request->isMethod('get')) {
        return view('signin');
    } 
    
    if ($request->isMethod('post')) {
        
        $credentials = $request->validate([
            'email' => 'required|email|min:5|max:15',
            'password' => 'required|min:4|max:8',
        ],[
             'email.max'=>'Email Should be Maximum 15 Characteres Long',
                    'email.min'=>'Email Should be Atleast 5 Characteres Long',
                    'password.min'=>'Password Should be Atleast 4 Characteres Long',
                    'email.max'=>'Email Should be Atleast 8 Characteres Long',

        ]);

        if (Auth::attempt($credentials)) {
           
            $user = Auth::user();

            
            if ($user->user_type == 2) {
                return redirect()->route('admin.dash');
            }

           
            if ($user->user_type == 1) {
                return view('userdash',['data' =>$user]);
            }

        }

        else{
            return "Invalid email or password";
        }
        
    }
}


    // User logout
    function logout(){
        Auth::logout();
        return redirect()->route('signin');
    }

    // fetch data from users and sent login information to admindashboard
    function getdata(){
    $login = Auth::user();
    $users = User::get();
    return view('admindash',compact('users','login'));

}

    
    // update details of user & redirect to edituser page
    function updatepage($id){
        $editpage = User::find($id);
        return view('useredit',['update'=>$editpage]);
    }
    
   // update user details from user dashboard
   function updateuser(Request $request , $id){
    $data = Data::where('user_id',$id)->update([
        'name'=>$request->name,
        'mobile'=>$request->mobile,
        'address'=>$request->address,
    ]);

    if($data){
    return redirect()->back()->with('success', 'Details Updated Successfully!');
    }
    else{
        return redirect()->back()->with('error', 'An Error Occured Try Again!');
    }

   }

// delete user from admin 
function deleteadmin($id)
{
    $user = User::find($id);

    if ($user) {
        $user->delete();
        return redirect()->back()->with('User deleted successfully');
    }

    else{
        return "user not found";
    }
}

// edit admin & redirect to edit page  
function editadmin($id){
 $user = User::find($id);
 return view('adminuser',['users'=>$user]);
}

// update new details of the admin
 function updateadmin(Request $request, $id)
{
    $user = User::where('id',$id)->update([
        'email'=>$request->email,
        'password'=>Hash::make($request->password),
        'user_type'=>$request->user_type
    ]);

    $data = Data::where('user_id',$id)->update([
        'name'=>$request->name,
        'mobile'=>$request->mobile,
        'address'=>$request->address,

    ]);

    return redirect()->route('admin.dash');
    


}

    // User Password Reset 
    function reset($id){
        $user =User::find($id);
        return view('userreset',['pass'=>$user]);
    }

    // User Password Change 
    function changepass(Request $request, $id){
        User::where('id',$id)->update([
            'password'=>Hash::make($request->password),
        ]);
        return redirect()->back()->with('success','Password has been changed Successfully');
    }
}

