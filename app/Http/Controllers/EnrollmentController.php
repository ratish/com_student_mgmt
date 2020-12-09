<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use App\Http\Requests\EnrollmentFormRequest;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($course_id)
    {
        $course = Course::find($course_id);

        return view('admin.enrollment.index', ['course' => $course]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($course_id)
    {
        $course = new Course;
        $courseName = $course::where('id', $course_id)->first()->course_name;
        $enrolledStudents = $course->getCourseEnrolledStudents($course_id);

        return view('admin.enrollment.create', [
            'course_id' => $course_id,
            'courseName' => $courseName,
            'notEnrolledStudents' => Student::whereNotIn('id', $enrolledStudents)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EnrollmentFormRequest $request, $courseID)
    {
        $studentsToEnroll = $request->input('studentsToEnroll');
        $course = Course::find($courseID);
        $course->students()->attach($studentsToEnroll);

        $request->session()->flash('feedback', 'Student(s) enrolled to course successfully!');

        return redirect('enrollments/' . $courseID);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($courseID, $studentID)
    {
        $course = Course::find($courseID);
        $course->students()->detach($studentID);

        Request()->session()->flash('feedback', 'Student unenrolled from course successfully!');

        return redirect('enrollments/' . $courseID);
    }
}