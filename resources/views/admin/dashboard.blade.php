@extends('layouts.admin_template')
@section('page_contents')
<h2>Dashboard</h2>
<div class="card-deck">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title border-bottom text-primary"><i class="fas fa-user fa-lg"></i> Student Management</h3>
            <p class="card-text">View students, add new student and edit student information</p>
            <div class="text-right">
                <a href="{{ url('students') }}" class="btn btn-primary">Open Student Management <i
                        class="fas fa-chevron-circle-right fa-lg"></i> </a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h3 class="card-title border-bottom text-primary"><i class="fas fa-book fa-lg"></i> Course Management</h3>
            <p class="card-text">View course, add new course and edit course information</p>
            <div class="text-right">
                <a href="{{ url('courses') }}" class="btn btn-primary">Open Course Management <i
                        class="fas fa-chevron-circle-right fa-lg"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection