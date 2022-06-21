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
                <td><a href="/admin/postaddedit/{{$admin->id}}/{{$admin->title}}">Edit</a></td>
                <td><a href="/admin/delete/{{$admin->id}}/{{$admin->description}}">Delete</a></td>
            </tr>
        @endforeach
    </table>
    <a class="btn btn-danger" href="{{route('logout')}}">Logout </a>

@endsection