@extends('layouts.app')
@section('content') 
    <form  action="{{route('career.apply')}}" class="col-md-6" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <h2>My Information</h2>
            <span>Your Name*</span>
            <input type="text" name="name" value="{{old('name')}}" class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
            <span>Your Email*</span>
            <input type="text" name="email" value="{{old('email')}}" class="form-control">
            @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
            <span>Your Phone*</span>
            <input type="text" name="phone" value="{{old('phone')}}" class="form-control">
            @error('phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
            <span>University*</span>
            <input type="text" name="uni" value="{{old('uni')}}" class="form-control">
            @error('uni')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div><br>
        <h2>My Experience</h2>
        <div>
            <span>Total Years of Experience*</span>
            <textarea name="exp" value="{{old('exp')}}" class="form-control"> </textarea>
            @error('exp')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <span>Expertise/Interest Areas*</span>
            <textarea name="int_area" value="{{old('int_area')}}" class="form-control"> </textarea>
            @error('int_area')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div> 
          <span>Notice Period*</span>
          <select name="not_period" onChange={handleChange} value={inputs.not_period} class="form-control">
          <option value="">Choose...</option>
          <option value="Immediately">Immediately</option>
          <option value="15 Days">15 Days</option>
          <option value="1 Month">1 Month</option>
          <option value="1+ Month">1+ Month</option>  
               
</select>
            @error('not_period')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <span>Current Salary*</span>
            <textarea name="cur_sal" value="{{old('cur_sal')}}" class="form-control"> </textarea>
            @error('cur_sal')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <span>Expected Salary*</span>
            <textarea name="exp_sal" value="{{old('exp_sal')}}" class="form-control"> </textarea>
            @error('exp_sal')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <span>Cover Letter*</span>
            <textarea name="cov_let" value="{{old('cov_let')}}" class="form-control"> </textarea>
            @error('cov_let')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            
            <span>Resume*</span>
            <input type="file" name="res_path" value="{{old('res_path')}}" class="form-control"> </textarea><br>
            @error('res_path')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div><br>
        <div align="center">
        <input type="submit" class="btn btn-primary" value="Submit" >
        </div>
    </form>

@endsection