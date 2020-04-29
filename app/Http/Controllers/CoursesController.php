<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
     // Read
     public function index() {
        $courses = Course::all();
        
        return response()->json([
            "courses" => $courses
        ], 200);
    }

    //create
    public function store(Request $request) {
        $courses = Course::create([
            "course_name" => $request->course_name,
            "sem_id" => $request->sem_id,
            "course_teacher" => $request->course_teacher
        ]);

        return response()->json([
            "courses" => $courses
        ], 200);
    }

    //delete
    public function delete(Request $request){
        $courses = Course::where('course_id', $request->course_id)->first();
        if(!is_null ($courses)){
            $courses->delete();
            return response('det virker');
        } else {
            return response('kiks');
        }

        return response(200);
    }

    //update
    public function update(Request $request){
        $courses = Course::where('course_id', $request->course_id)->first();
        if(!is_null ($courses)){
            $courses->update(['course_name' => $request->course_name, "course_teacher" => $request->course_teacher]);

            return response($courses);
        } else {
            return response('kiks');
        }

        return response (200);
    }
}
