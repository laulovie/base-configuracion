<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use inertia\Inertia;

class TeacherController extends Controller
{
    //
    public function index()
{
    return Inertia::render('Auth/Teacher/Index');
}

public function create()
{
    return Inertia::render('Auth/Teacher/Create');
}

}
