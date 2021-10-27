<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;;
use App\Models\StudentRecord;

class StudentRecController extends Controller
{
   public function index(){
        $data =StudentRecord::join('student_pds', 'student_pds.student_rec_id', '=', 'student_records.student_rec_id')
                            ->join('colleges', 'colleges.student_id','=', 'student_pds.student_id')
                            ->get(['student_record.student_rec_id','student_pds.fname','student_pds.lname','student_pds.mname','colleges.college']);                        

        return view('scholars', compact('data'));
    }
}
