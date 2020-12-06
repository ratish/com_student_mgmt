<?php $fieldID = 'courseName'; ?>
<div class="form-group">
    <label for="<?= $fieldID ?>">Course Name</label>
    <input type="text" class="form-control" name="<?= $fieldID ?>" id="<?= $fieldID ?>"
        aria-describedby="<?= $fieldID ?>" maxlength="50" value="{{ $course->course_name ?? old($fieldID) }}">
    @error($fieldID)
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<?php $fieldID = 'courseDescription'; ?>
<div class="form-group">
    <label for="<?= $fieldID ?>">Course Description</label>
    <textarea type="text" class="form-control" name="<?= $fieldID ?>" id="<?= $fieldID ?>"
        aria-describedby="<?= $fieldID ?>">{{ $course->course_description ?? old($fieldID) }}</textarea>
    @error($fieldID)
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<?php $fieldID = 'startDate'; ?>
<div class="form-group">
    <label for="<?= $fieldID ?>">Start Date</label>
    <input type="text" class="form-control" name="<?= $fieldID ?>" id="<?= $fieldID ?>"
        aria-describedby="<?= $fieldID ?>" maxlength="10" value="{{ $course->start_date ?? old($fieldID) }}"
        placeholder="MM/DD/YYYY">
    @error($fieldID)
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<?php $fieldID = 'weeks'; ?>
<div class="form-group">
    <label for="<?= $fieldID ?>">Weeks</label>
    <input type="text" class="form-control" name="<?= $fieldID ?>" id="<?= $fieldID ?>"
        aria-describedby="<?= $fieldID ?>" maxlength="3" value="{{ $course->weeks ?? old($fieldID) }}"
        placeholder="Duration in weeks">
    @error($fieldID)
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>