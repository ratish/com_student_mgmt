@extends('layouts.admin_template')
@section('page_contents')
<x-back-button :url="url('enrollments/' . $course_id)">Back to Enrolled Students for {{ $courseName }}</x-back-button>
<div class="card mt-4">
    <div class="card-header">Enroll Students to Course : <span class="text-info">{{ $courseName }}</span></div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            Please review the errors on the form.
        </div>
        @endif
        <form method="post" action="<?= url('enrollments/' . $course_id . '/store');?>" name="enrollmentForm"
            id="enrollmentForm">
            @csrf
            <?php $fieldID = 'studentsToEnroll[]'; ?>
            <div class="form-group">
                <label for="<?= $fieldID ?>">
                    Select students to enroll:
                    <small class="form-text text-muted">(use CTRL key to select multiple
                        students)</small>
                </label>
                <select class="form-control" id="<?= $fieldID ?>" name=<?= $fieldID ?> multiple="multiple" size="10">
                    @foreach ($notEnrolledStudents as $student)
                    <option value="{{ $student->id }}">{{ $student->first_name }} {{ $student->last_name }}</option>
                    @endforeach
                </select>
                @error('studentsToEnroll')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-primary btn-lg"
                    {{ (count($notEnrolledStudents) < 1) ? 'disabled' : '' }}>Enroll</button>
            </div>
        </form>
    </div>
</div>
@endsection