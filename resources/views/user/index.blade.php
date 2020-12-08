@extends('layouts.core_template')
@section('body_contents')
<div class="row">
    <div class="col-sm">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Courses Enrolled</h4>
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
                        @foreach ($courses as $course)
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
    </div>
</div>
@endsection