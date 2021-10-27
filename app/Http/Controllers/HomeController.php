<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Scholarship;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       return view('admin.dashboard');
      // return view('home');
    }

    public function scholarships(){
       $scholarships = Scholarship::all();
       // DB::table('scholarships');
        return view('admin.scholarship')->with('scholarships',$scholarships);
    }

    public function scholarshipedit(Request $request, $id){
        $scholarships = Scholarship::findOrFail($id);
        return view('admin.scholarship-edit')->with('scholarships',$scholarships);
    }

    public function scholarshipupdate(Request $request, $id){
        $request->validate([
            'scholarship_type' => 'required',
            'scholarship' => 'required',
            'discount' => 'required',
            'sem_charged' => 'required',
            'funded_by' => 'required',
            'active' => 'required',
        ]);
        $scholarships = Scholarship::find($id);
        $scholarships->scholarship_type = $request->input('scholarship_type');
        $scholarships->scholarship = $request->input('scholarship');
        $scholarships->discount = $request->input('discount');
        $scholarships->sem_charged = $request->input('sem_charged');
        $scholarships->funded_by = $request->input('funded_by');
        $scholarships->active = $request->input('active');
        $scholarships->update();

        return redirect('/scholarship')->with('status', 'Your Data is Updated');
    }

    public function scholarshipdelete($id){
        $scholarships = Scholarship::findOrFail($id);
        $scholarships->delete();

        return redirect('/scholarship')->with('status', 'Your Data is Deleted');
    }

    public function create()
    {
        return view ('admin.scholarship-create');
    }
    public function store(Request $request){
    

        $scholarships = new Scholarship ();

        $scholarships->scholarship_type = $request-> scholarship_type;
        $scholarships->scholarship = $request->scholarship;
        $scholarships->discount = $request->discount;
        $scholarships->sem_charged = $request->sem_charged;
        $scholarships->funded_by = $request->funded_by;
        $scholarships->active = $request->active;

        $scholarships->save();
        return redirect('/scholarship')->with('status', 'Data Added Successfully');
    }
    public function join(){
        $scholarships= DB::table('enrollments')
        
       ->join('student_records','student_records.id','=','enrollments.student_rec_id')
       ->join('scholarships','scholarships.id','=','enrollments.scholarship_id')
       ->join('student_pds','student_records.id','=','student_pds.student_id')
       ->join('degrees','degrees.id', '=' ,'student_records.degree_id')
       ->join('colleges','colleges.id', '=' ,'student_records.college_id')
       ->join('preferences','preferences.id','=','enrollments.pref_id')
       ->join('cys','cys.id','=','preferences.cy_id')
       
        ->select('enrollments.section', 'scholarships.scholarship','student_pds.fname','student_pds.lname'
                    ,'student_pds.mname','degrees.abbr','colleges.collegeabbr','preferences.status','cys.cy')
        ->get(['enrollments.section', 'scholarships.scholarship','student_pds.fname','student_pds.lname'
        ,'student_pds.mname','degrees.abbr','colleges.collegeabbr','preferences.status','cys.cy']);

        return view('admin.scholars', compact('scholarships'));
    }

    public function show(){
        $data= DB::table('scholarship_deductions')
        ->distinct()
         -> join('scholarships','scholarship_deductions.scholarship_id', '=', 'scholarships.id')
         -> join('fund','fund.fund_id','=','scholarship_deductions.fund_id')
    
         ->get( ['scholarships.id','scholarships.scholarship', 'scholarships.discount', 'scholarships.sem_charged',
         'scholarships.funded_by','scholarship_deductions.percent', 'scholarship_deductions.fund','fund.fund_desc']);
 
        return view('admin.scholarshiplist', compact('data'));
        
     }
}


