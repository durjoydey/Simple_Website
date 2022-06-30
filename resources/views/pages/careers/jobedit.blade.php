@extends('layouts.app')
@section('content')
@if(Session::get('admin_id')) 
<form action="{{route('career.jobedit')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$careers->id}}"> 
        <div class="col-md-4 form-group">
            <span>Job ID</span>
            <input type="text" name="j_id" value="{{$careers->j_id}}" class="form-control">
            @error('j_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Title</span>
            <input type="text" name="title" value="{{$careers->title}}" class="form-control">
            @error('title')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Description</span>
            <input type="text" name="description" value="{{$careers->description}}" class="form-control">
            @error('description')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Skills</span>
            <input type="text" name="skill" value="{{$careers->skill}}" class="form-control">
            @error('skill')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Responsibilities</span>
            <input type="text" name="responsibility" value="{{$careers->responsibility}}" class="form-control">
            @error('responsibility')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Educational Requirements</span>
            <input type="text" name="edu_req" value="{{$careers->edu_req}}" class="form-control">
            @error('edu_req')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <input type="submit" class="btn btn-success" value="Edit" >
    </form>  
@endif
@endsection