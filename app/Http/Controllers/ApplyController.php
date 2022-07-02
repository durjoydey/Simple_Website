<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Apply;

class ApplyController extends Controller

{   public function apply(){
    return view('pages.careers.apply');
}
public function applysubmit(Request $request){
    $this->validate(
        $request,
        [
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/', 
            'uni'=>'required',
            'exp'=>'required',
            'int_area'=>'required', 
            'not_period'=>'required',
            'cur_sal'=>'required',
            'exp_sal'=>'required', 
            'cov_let'=>'required', 
            'res_path'=>'required'
        ],
        [
            'name.required'=>'Your Name Required!',
            'email.required'=>'Your Email Required!',
            'phone.required'=>'Your Phone Required!',
            'phone.regex'=>'Phone number must be numeric',
            'uni.required'=>'University Required!',
            'exp.required'=>'Total Years of Experience Required!',
            'int_area.required'=>'Expertise/Interest Areas Required!',
            'not_period.required'=>'Notice Period Required!',
            'cur_sal.required'=>'Current Salary Required!',
            'exp_sal.required'=>'Expected Salary Required!',
            'cov_let.required'=>'Cover Letter Required!',
            'res_path.required'=>'Resume Required!'
        ]
    );
    $newResName = time() . '-' . $request->name . '_' .
    $request->res_path->extension();
    $request->res_path->move(public_path('files'),$newResName);

    $var = new Apply();
    $var->name = $request->name;
    $var->email = $request->email;
    $var->phone = $request->phone;
    $var->uni = $request->uni;
    $var->exp = $request->exp;
    $var->int_area = $request->int_area;
    $var->not_period = $request->not_period;
    $var->cur_sal = $request->cur_sal;
    $var->exp_sal = $request->exp_sal;
    $var->cov_let = $request->cov_let;
    $var->res_path = $request->res_path;
    $var->save();
    return "<h1>Thank you for your information</h1>";

}
/*public function edit(Request $request){
    $id = $request->id;
    $careers = Apply::where('id',$id)->first();
    return view('pages.careers.apply')->with('careers', $careers);

}
public function editSubmit(Request $request){
    $var = Apply::where('id',$request->id)->first();
    $var->title= $request->title;
    $var->description = $request->description;
    $var->name = $request->name;
    $var->email = $request->email;
    $var->phone = $request->phone;
    $var->uni = $request->uni;
    $var->exp = $request->exp;
    $var->int_area = $request->int_area;
    $var->not_period = $request->not_period;
    $var->cur_sal = $request->cur_sal;
    $var->exp_sal = $request->exp_sal;
    $var->res = $request->res;
    $var->save();
  
    return "Thank you for your information";

}*/
public function list(){

    $applies = Apply::all();
    return view('pages.careers.applylist')->with('applies',$applies);
}
}
