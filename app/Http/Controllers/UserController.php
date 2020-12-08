<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $student = Student::find(Auth::id());

        return view('user.index', ['courses' => $student->courses]);
    }
}