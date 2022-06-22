@extends('layouts.app')
@section('content')
@if(Session::get('admin_id')) 

<form action="{{route('admin.postaddedit')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$admins->id}}"> 
        <div class="col-md-4 form-group">
            <span>Title</span>
            <input type="text" name="title" value="{{$admins->title}}" class="form-control">
            @error('title')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Description</span>
            <input type="text" name="description" value="{{$admins->description}}" class="form-control">
            @error('description')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <input type="submit" class="btn btn-success" value="Edit" >
    </form>
    <a class="btn btn-danger" href="{{route('logout')}}">Logout </a>
   
    
@endif
@endsection