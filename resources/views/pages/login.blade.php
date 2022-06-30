@extends('layouts.app')
@section('content')
<form action="{{route('login')}}" method="post">
	
	{{@csrf_field()}}
    <br><div align= "center">
    <span>Username</span>
	<input  type="text"  name="username" placeholder="Username" value="{{old('username')}}"><br>
    @error('username')
    <span class="text-danger">{{$message}}</span>
    @enderror
  </div><br>

  <div align= "center">
  <span>Password</span>
	<input type="password" name="password" placeholder="Password"><br>
    @error('password')
    <span class="text-danger">{{$message}}</span>
    @enderror
    </div> <br>

    <div align= "center">
	<input type="submit" name="login" value="Login" class="btn btn-success">
    </div>
</form>
@endsection