<?php

namespace App\Http\Controllers;

use App\Semester;
use Illuminate\Http\Request;

class SemestersController extends Controller
{
    // Read
    public function index() {
        $Semesters = Semester::all();
        
        return response()->json([
            "Semesters" => $Semesters
        ], 200);
    }

    //create
    public function store(Request $request) {
        $Semesters = Semester::create([
            "sem_name" => $request->sem_name,
            "edu_id" => $request->edu_id
        ]);

        return response()->json([
            "Semesters" => $Semesters
        ], 200);
    }

    //delete
    public function delete(Request $request){
        $Semesters = Semester::where('sem_id', $request->sem_id)->first();
        if(!is_null ($Semesters)){
            $Semesters->delete();
            return response('det virker');
        } else {
            return response('kiks');
        }

        return response(200);
    }

    //update
    public function update(Request $request){
        $Semesters = Semester::where('sem_id', $request->sem_id)->first();
        if(!is_null ($Semesters)){
            $Semesters->update(['sem_name' => $request->sem_name]);

            return response($Semesters);
        } else {
            return response('kiks');
        }

        return response (200);
    }
}
