<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Faculty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Student::factory()
            ->count(50)
            ->create();
    }
}