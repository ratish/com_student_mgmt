@extends('layouts.admin_template')
@section('page_contents')
<div class="card mt-4">
    <div class="card-header">Add New Student</div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            Please review the errors on the form.
        </div>
        @endif
        <form method="post" action="<?= url('students');?>" name="addStudentForm" id="addStudentForm">
            @csrf
            <input type="hidden" name="formType" id="formType" value="create">
            @include('admin.student.partials.form_fields')
            <div class="text-right">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection