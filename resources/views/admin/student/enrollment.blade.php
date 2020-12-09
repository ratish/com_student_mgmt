@extends('layouts.admin_template')
@section('page_contents')
<x-back-button :url="url('students')">Back to Current Students</x-back-button>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Currently Enrolled Courses for <span class="text-info">{{ $student->first_name }}</span>
        </h4>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Course Name</th>
                    <th>Course Description</th>
                    <th>Start Date</th>
                    <th>Weeks</th>
                </tr>
            </thead>
            <tbody>
                @php
                $i = 1;
                @endphp
                @foreach ($student->courses as $course)
                <tr>
                    <td>{{ $i++ }}.</td>
                    <td>{{ $course->course_name }}</td>
                    <td>{{ $course->course_description }}</td>
                    <td>{{ date('m/d/Y', strtotime($course->start_date)) }}</td>
                    <td>{{ $course->weeks }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection