<?php

namespace App\Http\Controllers;

use App\Assignment;
use Illuminate\Http\Request;

class AssignmentsController extends Controller
{
    // Read
    public function index() {
        $assignments = Assignment::all();
        
        return response()->json([
            "assignments" => $assignments
        ], 200);
    }

    //create
    public function store(Request $request) {
        $assignments = Assignment::create([
            "ass_name" => $request->ass_name,
            "course_id" => $request->course_id,
            "ass_deadline" => $request->ass_deadline,
            "ass_desc" => $request->ass_desc
        ]);

        return response()->json([
            "assignments" => $assignments
        ], 200);
    }

    //delete
    public function delete(Request $request){
        $assignments = Assignment::where('ass_id', $request->ass_id)->first();
        if(!is_null ($assignments)){
            $assignments->delete();
            return response('det virker');
        } else {
            return response('kiks');
        }

        return response(200);
    }

    //update
    public function update(Request $request){
        $assignments = Assignment::where('ass_id', $request->ass_id)->first();
        if(!is_null ($assignments)){
            $assignments->update(['ass_name' => $request->ass_name, "ass_deadline" => $request->ass_deadline, "ass_desc" => $request->ass_desc]);

            return response($assignments);
        } else {
            return response('kiks');
        }

        return response (200);
    }
}
