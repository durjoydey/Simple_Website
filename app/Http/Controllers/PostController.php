<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PostAdd;

class PostController extends Controller
{
    public function post(){
        return view('pages.admins.postadd');
    }
    public function postadd(Request $request){
        $this->validate(
            $request,
            [
                'title'=>'required',
                'description'=>'required'
              
            ],
            [
                'title.required'=>'Title Required!',
                'description.required'=>'Description Required!'
               
        
            ]
        );
        $var = new PostAdd();
        $var->title = $request->title;
        $var->description = $request->description;
        $var->save();
        return "Added";

    }
}
