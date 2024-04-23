<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Department;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\error;

class CourseController extends Controller
{
    public function detailCourseView(Course $course)
    {
        $department = Department::find($course->department_id);

        $data = [
            "course" => $course,
            "department" => $department
        ];

        return view("detailCourse", $data);
    }

    public function addCourseView()
    {
        $user = Auth::user();

        $course = Course::where("department_id", $user->department_id)->get();

        $data = [
            "course" => $course
        ];

        return view('course', $data);
    }

    public function addCourse(Course $course)
    {
        $user = Auth::user();

        $isUserJoinCourse = $course->users->find($user->id);
        if ($isUserJoinCourse) {
            return redirect()->route('home')->withErrors(['home' => 'you already join course']);
        }

        if ($course->department_id != $user->department_id) {
            return redirect()->route('home')->withErrors(['home' => 'you cannot join the course']);
        }

        try {
            DB::beginTransaction();

            $course->users()->attach($user->id);

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('home')->withErrors(['home' => 'failed add course']);
        }

        return redirect()->route('home');
    }

    public function addCourseByCode(Request $request)
    {
        $user = Auth::user();

        $course = Course::where('code', $request->courseCode)->first();

        if (!$course) {
            return redirect()->route('home')->withErrors(['home' => 'course not found']);
        }

        $isUserJoinCourse = $course->users->find($user->id);
        if ($isUserJoinCourse) {
            return redirect()->route('home')->withErrors(['home' => 'you already join course']);
        }

        if ($course->department_id != $user->department_id) {
            return redirect()->route('home')->withErrors(['home' => 'you cannot join the course']);
        }

        try {
            DB::beginTransaction();

            $course->users()->attach($user->id);

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('home')->withErrors(['home' => 'failed add course']);
        }

        return redirect()->route('home');
    }

    public function deleteCourse(Course $course)
    {
        $user = Auth::user();

        try {
            DB::beginTransaction();

            $course->users()->detach($user->id);

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('home')->withErrors(['home' => 'failed delete course']);
        }

        return redirect()->route('home');
    }
}
