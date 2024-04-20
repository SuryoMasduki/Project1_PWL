<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home(Request $request) {
        $user = Auth::user();

        $department = Department::where('id', $user->department_id)->first();

        $departmentCourses = Course::where('id', $user->department_id)->get();

        $userCourses = $user->courses;

        $data = [
            'user' => $user,
            'department' => $department,
            'departmentCourses' => $departmentCourses,
            'userCourses' => $userCourses
        ];

        return view('home', $data);
    }
}
