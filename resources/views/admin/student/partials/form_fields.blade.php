<?php $fieldID = 'firstName'; ?>
<div class="form-group">
    <label for="<?= $fieldID ?>">First Name</label>
    <input type="text" class="form-control" name="<?= $fieldID ?>" id="<?= $fieldID ?>"
        aria-describedby="<?= $fieldID ?>" maxlength="50" value="{{ $student->first_name ?? old($fieldID) }}">
    @error($fieldID)
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<?php $fieldID = 'lastName'; ?>
<div class="form-group">
    <label for="<?= $fieldID ?>">Last Name</label>
    <input type="text" class="form-control" name="<?= $fieldID ?>" id="<?= $fieldID ?>"
        aria-describedby="<?= $fieldID ?>" maxlength="50" value="{{ $student->last_name ?? old($fieldID) }}">
    @error($fieldID)
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<?php $fieldID = 'matriculationDate'; ?>
<div class="form-group">
    <label for="<?= $fieldID ?>">Matriculation Date</label>
    <input type="text" class="form-control" name="<?= $fieldID ?>" id="<?= $fieldID ?>"
        aria-describedby="<?= $fieldID ?>" maxlength="10" value="{{ $student->matriculation_date ?? old($fieldID) }}"
        placeholder="mm/dd/yyyy">
    @error($fieldID)
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<?php
    $fieldID = 'currentlyEnrolled';
    $enrollmentStatus = $student->currently_enrolled ?? old($fieldID);
?>
<div class="form-group">
    <label for="<?= $fieldID ?>">Currently Enrolled?</label>
    <select class="form-control" id="<?= $fieldID ?>" name=<?= $fieldID ?>>
        <option value=""></option>
        <option value="y" {{ $enrollmentStatus == 'y' ? 'selected="selected"' : '' }}>Yes</option>
        <option value="n" {{ $enrollmentStatus == 'n' ? 'selected="selected"' : '' }}>No</option>
    </select>
    @error($fieldID)
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>