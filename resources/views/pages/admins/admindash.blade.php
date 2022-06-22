@extends('layouts.app') 
@section('content')
@if(Session::get('username')) 
<a class="btn btn-danger" href="{{route('logout')}}">Logout </a>
     <h1>Hello {{Session::get('username')}} </h1>
    @endif
    @endsection

    