<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Career;

class CareerController extends Controller
{
    public function jobadd(){
        return view('pages.careers.jobadd');
    }
    public function jobaddsubmit(Request $request){
        $this->validate(
            $request,
            [
                'j_id'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                'title'=>'required',
                'description'=>'required',
                'skill'=>'required',
                'responsibility'=>'required',
                'edu_req'=>'required', 
            ],
            [ 
                'j_id.required'=>'Title Required!',
                'j_id.regex'=>'ID must be numeric!',
                'title.required'=>'Title Required!',
                'description.required'=>'Description Required!',
                'skill.required'=>'Skills Required!',
                'responsibility.required'=>'Responsibilities Required!',
                'edu_req.required'=>'Educational Requirements Required!',
            ]
        );
        $var = new Career();
        $var->j_id = $request->j_id;
        $var->title = $request->title;
        $var->description = $request->description;
        $var->skill = $request->skill;
        $var->responsibility = $request->responsibility;
        $var->edu_req = $request->edu_req;
        $var->save();
        return redirect()->route('career.joblist');

    }
    
    public function edit(Request $request){
        $id = $request->id;
        $careers = Career::where('id',$id)->first();
        return view('pages.careers.jobedit')->with('careers', $careers);

    }
    public function editSubmit(Request $request){
        $var = Career::where('id',$request->id)->first();
        $var->j_id = $request->j_id;
        $var->title= $request->title;
        $var->description = $request->description;
        $var->skill = $request->skill;
        $var->responsibility = $request->responsibility;
        $var->edu_req = $request->edu_req;
        $var->save();
      
        return redirect()->route('career.joblist');

    }
    public function list(){

        $careers = Career::all();
        return view('pages.careers.joblist')->with('careers',$careers);
    }
    public function delete(Request $request){
        $var = Career::where('id',$request->id)->first();
        $var->delete();
        return redirect()->route('career.joblist');

    }
}
