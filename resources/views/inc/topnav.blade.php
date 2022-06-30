<div align="center">
<a class="btn btn-primary" href="{{route('home')}}"> Home </a>
<a class="btn btn-info" href="{{route('aboutus')}}"> About Us </a>
<a class="btn btn-info" href="{{route('workbased')}}"> Work Based </a>
<a class="btn btn-info" href="{{route('ourwork')}}"> Our Work</a>
<a class="btn btn-info" href="{{route('systemuser.message')}}"> Contact</a>
@if(Session::get('admin_id'))
<a class="btn btn-info" href="{{route('systemuser.response')}}"> See all responses </a>
<a class="btn btn-info" href="{{route('admin.postadd')}}"> Post Notice </a>
@endif
<a class="btn btn-info" href="{{route('admin.postaddlist')}}">Notices </a>
@if(Session::get('admin_id')) 
<a class="btn btn-info" href="{{route('career.jobadd')}}"> Post Jobs </a>
@endif
<a class="btn btn-info" href="{{route('career.joblist')}}">Career</a>
@if(Session::get('admin_id')) 
<a class="btn btn-danger" href="{{route('logout')}}">Logout </a>
@else
<a class="btn btn-success" href="{{route('login')}}"> Login </a>
@endif
</div>

