<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Scholarship;
use App\Models\ScholarshipDetail;

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
     //  $scholarships = Scholarship::all();
  
       $scholarships= DB::table('scholarship_details')
       ->join ('scholarships','scholarship_details.scholarship_id','=','scholarships.id')
       ->select(['scholarship_details.*',
       'scholarships.id',
       'scholarships.scholarship_type',
       'scholarships.scholarship',
       'scholarships.discount',
       'scholarships.sem_charged',
       'scholarships.funded_by',
       'scholarships.active'])
       ->get();
       
        return view('admin.scholarship')->with('scholarships',$scholarships);
    }
    public function create()
    {
        $scholarships = Scholarship::all();
        $sdetails = ScholarshipDetail::all();
        return view ('admin.scholarship-create')->with ('scholarships',$scholarships)->with('sdetails',$sdetails);
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
        
        $scholarship_id = $scholarships->id;

        $sdetails = new ScholarshipDetail();

        $sdetails->scholarship_id=$scholarship_id;
        $sdetails->appli_poli = $request->appli_poli;
        $sdetails->qualification = $request->qualification;
        $sdetails->amount_of_grant = $request->amount_of_grant;
        $sdetails->gen_guideline = $request->gen_guideline;
        $sdetails->contact_info = $request->contact_info;
        $sdetails->save();

        

        return redirect('/scholarship')->with('status', 'Data Added Successfully');
    }
    public function scholarshipedit( $id){
       //$sdetail = Scholarship::findOrFail($id);
       
         $sdetail= DB::table('scholarship_details')
         ->join('scholarships', 'scholarship_details.scholarship_id','=','scholarships.id')
         ->where('scholarship_details.id','=', $id)
         ->select(['scholarship_details.*',
         'scholarships.id',
         'scholarships.scholarship_type',
         'scholarships.scholarship',
         'scholarships.discount',
         'scholarships.sem_charged',
         'scholarships.funded_by',
         'scholarships.active'])
         ->first();
          
        return view('admin.scholarship-edit',compact('sdetail',$sdetail));
    }

    public function scholarshipupdate(Request $request, $id){
        $request->validate([
            'scholarship_type' => 'required',
            'scholarship' => 'required',
            'discount' => 'required',
            'sem_charged' => 'required',
            'funded_by' => 'required',
            'appli_poli' => 'required',
            'qualification' => 'required',
            'amount_of_grant' => 'required',
            'general_guideline' => 'required',
            'contact_info' => 'required',
            'active' => 'required',
        ]);
  
        DB::transaction(function () use ($request, $id){
            
        $scholarships = Scholarship::find($id);
      
        $scholarships->scholarship_type = $request-> scholarship_type;
        $scholarships->scholarship = $request->scholarship;
        $scholarships->discount = $request->discount;
        $scholarships->sem_charged = $request->sem_charged;
        $scholarships->funded_by = $request->funded_by;
        $scholarships->active = $request->active;
        $scholarships->update();
        
        $scholarship_id = $scholarships->id;

        $sdetails = ScholarshipDetail::find($id);

        $sdetails->scholarship_id=$scholarship_id;
        $sdetails->appli_poli = $request->appli_poli;
        $sdetails->qualification = $request->qualification;
        $sdetails->amount_of_grant = $request->amount_of_grant;
        $sdetails->gen_guideline = $request->gen_guideline;
        $sdetails->contact_info = $request->contact_info;
        $sdetails->update();
     
    });

        return redirect('/scholarship')->with('status', 'Your Data is Updated');
    }

    public function scholarshipdelete($id){
        $sdetails = ScholarshipDetail::find($id);

      $scholarships = Scholarship ::find($sdetails->scholarship_id);
     
        $sdetails->delete();
        $scholarships->delete();
        
        return redirect('/scholarship')->with('status', 'Your Data is Deleted');
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


