<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    // public function view(){
      
    //         // return course::find(2)->getCourse;
    //         $data = course::all();
    
    //        return $data;
    //        return view('/table', ['data'=>$data]);
    //     } 
    // public function index(){
    //     // $data= Course::where('id', 3)->get();
    //     // dd($data->$post);
    //     $data = Course::find(3)->getStudent;
    //     return $data;
    // }
    // public function many(){
    //      $data= Course::where('id', 3)->get();
    //     $data->attach([2,3,4]);
    //     return $data;
    // }
    public function index(){
        return DB::table('courses')
        ->leftjoin('students', 'course_id', '=', 'courses.student_id')
        ->select('courses.student_id')
        ->get();
    }
}
