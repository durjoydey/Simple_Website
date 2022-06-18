@extends('layouts.app') 
@section('content')
@if(Session::get('username')) 
        <a class="btn btn-primary" href="{{route('systemuser.response')}}"> See all responses </a>
        <a class="btn btn-primary" href="{{route('admin.postadd')}}"> Post Advertise </a>
        <a class="btn btn-danger" href="{{route('logout')}}">Logout </a>
     <h1>Hello {{Session::get('username')}} </h1>
    @endif
    @endsection

    