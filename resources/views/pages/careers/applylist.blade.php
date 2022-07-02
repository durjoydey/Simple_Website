@extends('layouts.app')
@section('content')
    <table class="table table-borded">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>University</th>
            <th>Experience</th>
            <th>Expertise/Interest Areas</th>
            <th>Notice Period</th>
            <th>Current Salary</th>
            <th>Expected Salary</th>
            <th>Cover Letter</th>
            <th>Resume</th>
        </tr>
        @foreach($applies as $apply)
            <tr>
                <td>{{$apply->name}}</td>
                <td>{{$apply->email}}</td>
                <td>{{$apply->phone}}</td>
                <td>{{$apply->uni}}</td>
                <td>{{$apply->exp}}</td>
                <td>{{$apply->int_area}}</td>
                <td>{{$apply->not_period}}</td>
                <td>{{$apply->cur_sal}}</td>
                <td>{{$apply->exp_sal}}</td>
                <td>{{$apply->cov_let}}</td>
                <td>{{$apply->res_path}}</td>
            </tr>
        @endforeach
    </table> 
@endsection