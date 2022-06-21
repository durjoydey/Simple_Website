<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Postadd;

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
        $var = new Postadd();
        $var->title = $request->title;
        $var->description = $request->description;
        $var->save();
        return redirect()->route('admin.postaddlist');

    }
    
    public function edit(Request $request){
        $id = $request->id;
        $admins = Postadd::where('id',$id)->first();
        return view('pages.admins.postaddedit')->with('admins', $admins);

    }
    public function editSubmit(Request $request){
        $var = Postadd::where('id',$request->id)->first();
        $var->title= $request->title;
        $var->description = $request->description;
        $var->save();
      
        return redirect()->route('admin.postaddlist');

    }
    public function list(){

        $admins = Postadd::all();
        return view('pages.admins.postaddlist')->with('admins',$admins);
    }
    public function delete(Request $request){
        $var = Postadd::where('id',$request->id)->first();
        $var->delete();
        return redirect()->route('admin.postaddlist');

    }
  
}
