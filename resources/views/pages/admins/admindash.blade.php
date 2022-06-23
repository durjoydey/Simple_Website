@extends('layouts.app') 
@section('content')
@if(Session::get('username')) 
     <h1>Hello {{Session::get('username')}} </h1>
    @endif
    @endsection

    