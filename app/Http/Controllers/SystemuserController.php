<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Systemuser;
class SystemuserController extends Controller
{
    //
    public function create(){
        return view('pages.systemusers.message');
    }
    
    public function createSubmit(Request $request){

        $this->validate(
            $request,
            [
                'name'=>'required|min:5|max:10|regex:/^[A-Za-z]+$/',
                'email'=>'required',
                'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                'subject'=>'required',
                'message'=>'required',

            ],
            [
                'name.required'=>'Please put your name',
                'name.min'=>'Name must be greater than 2 charcters',
               
            ]
        );

        
        $var = new Systemuser();
        $var->name = $request->name;
        $var->email = $request->email;
        $var->phone = $request->phone;
        $var->subject = $request->subject;
        $var->message = $request->message;
        $var->save();
        return "<h1>Thank you for your response</h1>";

    }
}
