<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    // Read
    public function index() {
        $departments = Department::all();
                
        return response()->json([
            "departments" => $departments
        ], 200);
    }

    //create
    public function store(Request $request) {
        $departments = Department::create([
            "dep_name" => $request->dep_name,
            "school_id" => $request->school_id,
            "dep_address" => $request->dep_address
        ]);

        return response()->json([
            "departments" => $departments
        ], 200);
    }  
    
    //delete
    public function delete(Request $request){
        $departments = Department::where('dep_id', $request->dep_id)->first();
        if(!is_null ($departments)){
            $departments->delete();
            return response('det virker');
        } else {
            return response('kiks');
        }

        return response(200);
    }

    //update
    public function update(Request $request){
        $departments = Department::where('dep_id', $request->dep_id)->first();
        if(!is_null ($departments)){
            $departments->update(['dep_name' => $request->dep_name, 'dep_address' => $request->dep_address]);

            return response($departments);
        } else {
            return response('kiks');
        }

        return response (200);
    }
}


