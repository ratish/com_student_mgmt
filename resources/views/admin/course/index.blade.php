@extends('layouts.admin_template')
@section('page_contents')
<div class="card">
    <div class="card-body">
        @if(session('feedback'))
        <div class="alert alert-success">{{ session('feedback') }}</div>
        @endif
        <div class="float-right"><a href="{{ url('courses/create') }}" class="btn btn-primary">Add New Course</a>
        </div>
        <h4 class="card-title">List of Current Courses</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Course Name</th>
                    <th>Course Description</th>
                    <th>Start Date</th>
                    <th>Weeks</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @php
                $i = 1;
                @endphp
                @foreach ($courses as $course)
                <tr>
                    <td>{{ $i++ }}.</td>
                    <td>{{ $course->course_name }}</td>
                    <td>{{ $course->course_description }}</td>
                    <td>{{ date('m/d/Y', strtotime($course->start_date)) }}</td>
                    <td>{{ $course->weeks }}</td>
                    <td><a href="{{ url('courses/' . $course->id . '/edit') }}">Edit</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection