<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Course;

class AcademicPeriod extends Model
{
    /** @use HasFactory<\Database\Factories\AcademicPeriodFactory> */
    use HasFactory;

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
}