<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Course;
use App\Models\Department;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Department::create([
            'id' => 1,
            'name' => 'Computer Science',
        ]);

        User::create([
            'name' => 'test',
            'nim' => '123412341234',
            'email' => 'test@test.com',
            'password' => bcrypt('password'),
            'department_id' => 1,
        ]);

        Course::create([
            'name' => 'Basic Programming',
            'code' => 'BP',
            'credit' => 3,
            'department_id' => 1
        ]);
    }
}
