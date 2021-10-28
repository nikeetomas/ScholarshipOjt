<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Scholarship;

class ScholarshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scholarships = Scholarship::all();
        return view('admin.scholarship')->with('scholarships',$scholarships);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.scholarship-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  $this->validate($request,[
        //     'scholarship_type' => 'required',
        //      'scholarship' => 'required',
        //      'discount' => 'required',
        //      'sem_charged' => 'required',
        //      'funded_by' => 'required',
        //      'chargedfull' => 'required',
        //      'active' => 'required',
        // // ]);
      
        $scholarships = new Scholarship ();
       

        $scholarships->scholarship_type = $request-> scholarship_type;
        $scholarships->scholarship = $request->scholarship;
        $scholarships->discount = $request->discount;
        $scholarships->sem_charged = $request->sem_charged;
        $scholarships->funded_by = $request->funded_by;
        
        
        $scholarships->active = $request->active;

        $scholarships->save();
        
    
        return redirect('/scholarships')->with('status', 'Data Added Successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $scholarships = Scholarship::findOrFail($id);
       
        return view('admin.scholarship-edit')->with('scholarships',$scholarships);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate([
            'scholarship_type' => 'required',
            'scholarship' => 'required',
            'discount' => 'required',
            'sem_charged' => 'required',
            'funded_by' => 'required',
            'chargedfull' => 'required',
            'active' => 'required',
      ]);
        $schlrshp = Scholarship::find($id);
        $schlrshp -> scholarship_type = $request -> scholarship_type;
        $schlrshp -> scholarship = $request -> scholarship;
        $schlrshp -> discount = $request -> discount;
        $schlrshp -> sem_charged = $request -> sem_charged;
        $schlrshp -> funded_by = $request -> funded_by;
        $schlrshp -> chargedfull = $request -> chargedfull;
        $schlrshp -> active = $request -> active;

        $schlrshp -> save();
        $request->session()->flash('status', $request->schlrshp.' Scholarship Updated!');
        return redirect('/scholarships');
        //->with('success','Scholarship Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $scholarships = Scholarship::findOrFail($id);
        $scholarships->delete();
        return redirect('/scholarships')->with('status', 'Your Data is Deleted');
          //->with('success','Scholarship Deleted');
    }
}