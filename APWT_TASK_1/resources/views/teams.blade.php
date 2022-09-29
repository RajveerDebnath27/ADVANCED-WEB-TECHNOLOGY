@extends('layouts.app')
@section('content')

    <h1>Our Teams</h1>

    <p style="width: 450px; text_align: justify;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
    <h3>Team Members</h3>
    @foreach($teams as $teams)
        <li style="margin: 20px; front-weight: bold;">{{$teams}}</li>
    @endforeach

@endsection