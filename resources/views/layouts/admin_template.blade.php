@extends('layouts.core_template')
@section('body_contents')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#adminNavBar"
        aria-controls="adminNavBar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="adminNavBar">
        <ul class="navbar-nav mr-auto text-center">
            <li class="nav-item mr-2">
                <a class="nav-link text-dark" href="{{ url('/') }}">
                    <i class="fas fa-home fa-3x"></i><br>
                    Home
                </a>
            </li>
            <li class="nav-item mr-2">
                <a class="nav-link text-dark" href="{{ url('students') }}">
                    <i class="fas fa-user fa-3x"></i><br>
                    Student
                </a>
            </li>
            <li class="nav-item mr-2">
                <a class="nav-link text-dark" href="{{ url('courses') }}">
                    <i class="fas fa-book fa-3x"></i><br>
                    Course
                </a>
            </li>
        </ul>
    </div>
</nav>
<div class="row">
    <div class="col-sm">
        @yield('page_contents')
    </div>
</div>
@endsection