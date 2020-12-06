@extends('layouts.admin_template')
@section('page_contents')
<h2>Dashboard</h2>
<div class="card-deck">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title border-bottom">Student Management</h3>
            <p class="card-text">View students, add new student and edit student information</p>
            <div class="text-right">
                <a href="{{ url('students') }}" class="btn btn-primary">Open Student Management</a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h3 class="card-title border-bottom">Course Management</h3>
            <p class="card-text">View course, add new course and edit course information</p>
            <div class="text-right">
                <a href="{{ url('course') }}" class="btn btn-primary">Open Course Management</a>
            </div>
        </div>
    </div>
</div>
@endsection