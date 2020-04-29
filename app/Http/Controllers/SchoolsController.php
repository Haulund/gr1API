<?php

namespace App\Http\Controllers;

use App\School;
use Illuminate\Http\Request;

class SchoolsController extends Controller
{
    // Read
    public function index() {
        $school = School::all();
        //$school = School::get();
        
        return response()->json([
            "schools" => $school
        ], 200);
    }

    //create
    public function store(Request $request) {
        $school = School::create([
            "school_name" => $request->school_name,
            "school_address" => $request->school_address
        ]);

        return response()->json([
            "schools" => $school
        ], 200);
    }

    //delete
    public function delete(Request $request){
        $school = School::where('school_id', $request->school_id)->first();
        if(!is_null ($school)){
            $school->delete();
            return response('det virker');
        } else {
            return response('kiks');
        }

        return response(200);
    }

    //update
    public function update(Request $request){
        $school = School::where('school_id', $request->school_id)->first();
        if(!is_null ($school)){
            $school->update(['school_name' => $request->school_name, 'school_address' => $request->school_address]);

            return response($school);
        } else {
            return response('kiks');
        }

        return response (200);
    }
}
