<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Http\Requests\CourseFormRequest;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.course.index', ['courses' => Course::orderBy('course_name')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.course.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseFormRequest $request)
    {
        $course = new Course;
        $course = $this->formatCourseData($course, $request);
        $course->save();

        $request->session()->flash('feedback', 'Course added successfully!');
        return redirect('courses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = course::where('id', $id)->first();
        $course->start_date = date('m/d/Y', strtotime($course->start_date));
        return view('admin.course.edit', [
            'id' => $id,
            'course' => $course
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CourseFormRequest $request, $id)
    {
        $course = Course::where('id', $id)->first();
        $course = $this->formatCourseData($course, $request);
        $course->save();
        $request->session()->flash('feedback', 'Course updated successfully!');
        return redirect('courses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function formatCourseData($course, $request)
    {
        $course->course_name = $request->input('courseName');
        $course->course_description = $request->input('courseDescription');
        $course->start_date = date('Y-m-d', strtotime($request->input('startDate')));
        $course->weeks = $request->input('weeks');

        return $course;
    }
}