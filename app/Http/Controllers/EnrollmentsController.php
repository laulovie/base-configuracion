<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enrollments;
use Inertia\Inertia;

class EnrollmentsController extends Controller
{
    public function index()
{
    return Inertia::render('Auth/Enrollments/Index');
}

public function create()
{
    return Inertia::render('Auth/Enrollments/Create');
}
}
