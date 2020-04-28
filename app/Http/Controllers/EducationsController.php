<?php

namespace App\Http\Controllers;

use App\Education;
use Illuminate\Http\Request;

class EducationsController extends Controller
{
        // Read
        public function index() {
            $educations = Education::all();
            
            return response()->json([
                "educations" => $educations
            ], 200);
        }
    
        //create
        public function store(Request $request) {
            $educations = Education::create([
                "edu_name" => $request->edu_name,
                "dep_id" =>  $request->dep_id
            ]);
    
            return response()->json([
                "educations" => $educations
            ], 200);
        }
    
        //delete
        public function delete(Request $request){
            $educations = Education::where('edu_id', $request->edu_id)->first();
            if(!is_null ($educations)){
                $educations->delete();
                return response('det virker');
            } else {
                return response('kiks');
            }
    
            return response(200);
        }
    
        //update
        public function update(Request $request){
            $educations = Education::where('edu_id', $request->edu_id)->first();
            if(!is_null ($educations)){
                $educations->update(['education_name' => $request->education_name]);
    
                return response($educations);
            } else {
                return response('kiks');
            }
    
            return response (200);
        }
}
