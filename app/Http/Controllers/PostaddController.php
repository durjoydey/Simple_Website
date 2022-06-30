<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PostAdd;

class PostAddController extends Controller
{
    public function postadd(){
        return view('pages.admins.postadd');
    }
    public function postaddsubmit(Request $request){
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
        return redirect()->route('admin.postaddlist');

    }
    
    public function edit(Request $request){
        $id = $request->id;
        $admins = PostAdd::where('id',$id)->first();
        return view('pages.admins.postaddedit')->with('admins', $admins);

    }
    public function editSubmit(Request $request){
        $var = PostAdd::where('id',$request->id)->first();
        $var->title= $request->title;
        $var->description = $request->description;
        $var->save();
      
        return redirect()->route('admin.postaddlist');

    }
    public function list(){

        $admins = PostAdd::all();
        return view('pages.admins.postaddlist')->with('admins',$admins);
    }
    public function delete(Request $request){
        $var = PostAdd::where('id',$request->id)->first();
        $var->delete();
        return redirect()->route('admin.postaddlist');

    }
  
}
