<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin;

class LoginController extends Controller
{
    public function Login(){

        return view('pages.login');
    }
    
    
    public function loginSubmit(Request $request){
        $validate=$request->validate([


            'username'=>'required',
            'password'=>'required',
       ],
       [
           'username.required'=>'Username required!',
           'password.required'=>'Password required!',
          
           
       ]
       
       );
        $admin = Admin::where('username',$request->username)
                            ->where('password',$request->password)
                            ->first();
        if($admin ){
           
            $request->session()->put('username',$admin->username);
            return redirect()->route('adminDash');
        }

        return back();

    }
    public function logout(){
        session()->forget('admin');
        return redirect()->route('login');
    }
    
    
    
}
