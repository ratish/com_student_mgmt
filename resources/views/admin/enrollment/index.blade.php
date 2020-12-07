@extends('layouts.admin_template')
@section('page_contents')
<x-back-button :url="url('courses')">Back to Current Courses</x-back-button>
<div class="card">
    <div class="card-body">
        @if(session('feedback'))
        <div class="alert alert-success">{{ session('feedback') }}</div>
        @endif
        <div class="float-right"><a href="{{ url('enrollments/' . $course->id . '/create') }}"
                class="btn btn-primary">Enroll Students</a>
        </div>
        <h4 class="card-title">Currently Enrolled Students for <span class="text-info">{{ $course->course_name }}</span>
        </h4>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @php
                $i = 1;
                @endphp
                @foreach ($course->students as $student)
                <tr>
                    <td>{{ $i++ }}.</td>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>
                        <form action="{{ url('enrollments/' . $course->id . '/unenroll/' . $student->id) }}"
                            method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" name="unenrollBtn" class="btn btn-link">Unenroll</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection