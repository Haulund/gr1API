<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolController extends Controller
{
    // Read
    public function index() {
        $schools = School::all();

        return response()->json([
            "schools" => $schools
        ], 200);
    }

    //create
    public function store(Request $request) {
        $school = School::create([
            "schoolName" => $request->schoolName,
            "schoolAddress" => $request->schoolAddress
        ]);

        return response()->json([
            "school" => $school
        ], 200);
    }

    /* //delete
    public function delete(Request $request){
        $school = School::whereId($request->id)->first();
        if(!isnull ($school)){
            $school -> delete();
        }

        return response(200);
    }

    //update
    public function complete(Request $request){
        $school = School::whereId($request->id)->first();
        if(!isnull($school)){
            // $school->completed = !$school->completed;
            $school->save();
        }

        return response (200);
    }
 */
}
