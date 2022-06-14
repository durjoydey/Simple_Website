@extends('layouts.app')
@section('content')
    <form action="{{route('systemuser.message')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <h2>Get in touch</h2>
        <h1>Ready to Get Started</h1>
        <div class="col-md-4 form-group">
            <span>Name</span>
            <input type="text" name="name" value="{{old('name')}}" class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
            <span>Email</span>
            <input type="text" name="email" value="{{old('email')}}" class="form-control">
            @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
            <span>Phone</span>
            <input type="text" name="phone" value="{{old('phone')}}" class="form-control">
            @error('phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
            <span>Subject</span>
            <input type="text" name="subject" value="{{old('subject')}}" class="form-control">
            @error('subject')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
            <span>Message</span>
            <textarea name="message" value="{{old('message')}}" class="form-control"> </textarea>
            @error('message')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <input type="submit" class="btn btn-success" value="Send Message" >
    </form>
@endsection