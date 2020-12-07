@extends('layouts.admin_template')
@section('page_contents')
<x-back-button :url="url('courses')">Back to Current Courses</x-back-button>
<div class="card mt-4">
    <div class="card-header">Add New Course</div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            Please review the errors on the form.
        </div>
        @endif
        <form method="post" action="<?= url('courses');?>" name="addCourseForm" id="addCourseForm">
            @csrf
            <input type="hidden" name="formType" id="formType" value="create">
            @include('admin.course.partials.form_fields')
            <div class="text-right">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection