@extends('layouts.admin_template')
@section('page_contents')
<div class="card mt-4">
    <div class="card-header">Edit Course</div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            Please review the errors on the form.
        </div>
        @endif
        <form method="post" action="<?= url('courses/' . $id);?>" name="editCourseForm" id="editCourseForm">
            @csrf
            @method('PUT')
            <input type="hidden" name="formType" id="formType" value="edit">
            @include('admin.course.partials.form_fields')
            <div class="text-right">
                <button type="submit" class="btn btn-primary btn-lg">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection