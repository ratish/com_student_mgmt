<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function students()
    {
        return $this->belongsToMany('App\Models\Student');
    }

    public function getCourseEnrolledStudents($course_id)
    {
        $course = self::find($course_id);
        $students = $course->students;
        return $students->map(function ($item) {
            return $item['id'];
        });
    }
}