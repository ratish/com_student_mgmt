@extends('layouts.core_template')
@section('body_contents')
<div class="row">
    <div class="col-sm border-bottom">
        <h1>{{ config('app.name') }}</h1>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto text-center">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">
                    <i class="fas fa-home fa-3x"></i><br>
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('students') }}">
                    <i class="fas fa-user fa-3x"></i><br>
                    Student
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('courses') }}">
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