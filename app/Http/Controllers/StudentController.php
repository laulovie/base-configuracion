<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use inertia\Inertia;
class StudentController extends Controller
{
    //
    public function index()
{
    // $estudiantes = Student::all();
    // dd($estudiantes); ['estudiantes' => $estudiantes]

    return Inertia::render('Auth/Student/Index');

}

public function create()
{
    // $estudiantes = Student::all();
    // dd($estudiantes); ['estudiantes' => $estudiantes]
    return Inertia::render('Auth/Student/Create');

}
}