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
    $estudiantes = Student::all();
    dd($estudiantes);
    return Inertia::render('Student/Index', [
        'estudiantes' => $estudiantes
    ]);
}
}