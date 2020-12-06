@extends('layouts.admin_template')
@section('page_contents')
<div class="card">
    <div class="card-body">
        @if(session('feedback'))
        <div class="alert alert-success">{{ session('feedback') }}</div>
        @endif
        <div class="float-right"><a href="{{ url('students/create') }}" class="btn btn-primary">Add New Student</a>
        </div>
        <h4 class="card-title">List of Current Students</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Matriculation Date</th>
                    <th>Currently Enrolled</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @php
                $i = 1;
                @endphp
                @foreach ($students as $student)
                <tr>
                    <td>{{ $i++ }}.</td>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ date('m/d/Y', strtotime($student->matriculation_date)) }}</td>
                    <td>{{ ($student->currently_enrolled == 'y') ? 'Yes' : 'No' }}</td>
                    <td><a href="{{ url('students/' . $student->id . '/edit') }}">Edit</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection