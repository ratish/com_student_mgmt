<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StudentFormRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.student.index', ['students' => Student::orderBy('first_name')->orderBy('last_name')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.student.create', ['student' => null]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentFormRequest $request)
    {
        $student = new Student;
        $student = $this->formatStudentData($student, $request);
        $student->save();

        $request->session()->flash('feedback', 'Student added successfully!');
        return redirect('students');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::where('id', $id)->first();
        $student->matriculation_date = date('m/d/Y', strtotime($student->matriculation_date));
        return view('admin.student.edit', [
            'id' => $id,
            'student' => $student
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentFormRequest $request, $id)
    {
        $student = Student::where('id', $id)->first();
        $student = $this->formatStudentData($student, $request);
        $student->save();
        $request->session()->flash('feedback', 'Student updated successfully!');
        return redirect('students');
    }

    private function formatStudentData($student, $request)
    {
        $student->first_name = $request->input('firstName');
        $student->last_name = $request->input('lastName');
        $student->matriculation_date = date('Y-m-d', strtotime($request->input('matriculationDate')));
        $student->currently_enrolled = $request->input('currentlyEnrolled');

        return $student;
    }
}