<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentsController;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/Student', [StudentController::class, 'index'])->name('student.index');
    Route::get('/Student/Create', [StudentController::class, 'create'])->name('student.create');

    Route::get('/Teacher', [TeacherController::class, 'index'])->name('teacher.index');
    Route::get('/Teacher/Create', [TeacherController::class, 'create'])->name('teacher.create');

    Route::get('/Course', [CourseController::class, 'index'])->name('course.index');
    Route::get('/Course/Create', [CourseController::class, 'create'])->name('course.create');

    Route::get('/Enrollments', [EnrollmentsController::class, 'index'])->name('enrollments.index');
    Route::get('/Enrollments/Create', [EnrollmentsController::class, 'create'])->name('enrollments.create');
});

require __DIR__.'/auth.php';