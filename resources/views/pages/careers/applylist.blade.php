@extends('layouts.app')
@section('content')
    <table class="table table-borded">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Your Email</th>
            <th>My Information</th>
            <th>Your Email</th>
            <th>Your Email</th>
            <th>University</th>
            <th>Total Years of Experience</th>
            <th>Notice Period</th>
            <th>Current Salary</th>
            <th>Expected Salary</th>
            <th>Cover Letter</th>
            <th>Resume</th>
        </tr>
        @foreach($careers as $career)
            <tr>
                <td>{{$career->title}}</td>
                <td>{{$career->description}}</td>
                <td>{{$career->name}}</td>
                <td>{{$career->email}}</td>
                <td>{{$career->phone}}</td>
                <td>{{$career->uni}}</td>
                <td>{{$career->exp}}</td>
                <td>{{$career->int_area}}</td>
                <td>{{$career->not_period}}</td>
                <td>{{$career->cur_sal}}</td>
                <td>{{$career->exp_sal}}</td>
                <td>{{$career->cov_let}}</td>
                <td>{{$career->res}}</td>
                <td><a class="btn btn-warning" href="/career/apply/{{$career->id}}/{{$career->title}}">Edit</a></td>
              
            </tr>
        @endforeach
    </table>
    
@endsection