@extends('layouts.app')
@section('content')
@if(Session::get('admin_id')) 
    <table class="table table-borded">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Subject</th>
            <th>Message</th>
          
            <th></th>
            <th></th>
        </tr>
        @foreach($systemusers as $systemuser)
            <tr>
                <td>{{$systemuser->name}}</td>
                <td>{{$systemuser->email}}</td>
                <td>{{$systemuser->phone}}</td>
                <td>{{$systemuser->subject}}</td>
                <td>{{$systemuser->message}}</td>
              

            </tr>
        @endforeach
    </table>
    @endif

@endsection
