@extends('layouts.app')
@section('content')

    <table class="table table-borded">
        <tr>
            <th>Title</th>
            <th>Description</th>
        </tr>
        @foreach($admins as $admin)
            <tr>
                <td>{{$admin->title}}</td>
                <td>{{$admin->description}}</td>
                @if(Session::get('admin_id')) 
                <td><a href="/admin/postaddedit/{{$admin->id}}/{{$admin->title}}">Edit</a></td>
                @endif
                @if(Session::get('admin_id')) 
                <td><a href="/admin/delete/{{$admin->id}}/{{$admin->description}}">Delete</a></td>
                @endif
            </tr>
        @endforeach
    </table>
    @if(Session::get('admin_id')) 
    <a class="btn btn-danger" href="{{route('logout')}}">Logout </a>
    @endif
    
@endsection