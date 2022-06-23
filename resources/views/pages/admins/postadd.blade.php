@extends('layouts.app')
@section('content')
@if(Session::get('admin_id')) 
    <form  action="{{route('admin.postadd')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        
        <div class="col-md-4 form-group">
            <span>Title</span>
            <input type="text"  name="title" value="{{old('title')}}" class="form-control">
            @error('title')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
            <span>Description</span>
            <textarea name="description" value="{{old('description')}}" class="form-control"> </textarea>
            @error('description')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <input type="submit" class="btn btn-success" value="Post" >
    </form>
    @endif
@endsection