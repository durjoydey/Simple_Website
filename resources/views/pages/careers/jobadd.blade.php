@extends('layouts.app')
@section('content')
@if(Session::get('admin_id')) 
    <form  action="{{route('career.jobadd')}}" class="col-md-6" method="post">
        {{csrf_field()}}
        
        <div class="col-md-4 form-group">
            <span>Job ID</span>
            <input type="text" name="j_id" value="{{old('j_id')}}" class="form-control">
            @error('j_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Title</span>
            <input type="text"  name="title" value="{{old('title')}}" class="form-control">
            @error('title')
                <span class="text-danger">{{$message}}</span>
            @enderror
</div>
        <div>
            <span>Description</span>
            <textarea name="description" value="{{old('description')}}" class="form-control"> </textarea>
            @error('description')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
            <span>Skills</span>
            <textarea name="skill" value="{{old('skill')}}" class="form-control"> </textarea>
            @error('skill')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div >
            <span>Responsibilities</span>
            <textarea name="responsibility" value="{{old('responsibility')}}" class="form-control"> </textarea>
            @error('responsibility')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
            <span>Educational Requirements</span>
            <textarea name="edu_req" value="{{old('edu_req')}}" class="form-control"> </textarea>
            @error('edu_req')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div><br>
        <input type="submit" class="btn btn-primary" value="Post" >
    </form>
    @endif
@endsection