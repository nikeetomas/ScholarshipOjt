@extends('layouts.master')

@section('title')
 Edit Scholarship | MMSU Scholarship
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit Scholarship</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="/scholarship-update/{{ $sdetail->id }}" method="POST">
                                
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}  

                                 <div class="form-group">
                                 <label>Scholarship Type</label>
                                 <input type="text" name="scholarship_type" value="{{ $scholarships->scholarship_type }}" class="form-control">
                                 </div>

                                 <div class="form-group">
                                 <label>Scholarship</label>
                                <input type="text" name="scholarship" value="{{ $scholarships->scholarship }}" class="form-control">
                                </div>

                                <div class="form-group">
                                <label>Discount</label>
                                <input type="text" name="discount" value="{{ $scholarships->discount }}" class="form-control">
                                </div>

                                <div class="form-group">
                                <label>Sem Charged</label>
                                <input type="text" name="sem_charged" value="{{$scholarships->sem_charged }}" class="form-control">
                                </div>

                                <div class="form-group">
                                <label>Funded by</label>
                                <input type="text" name="funded_by" value="{{ $scholarships->funded_by }}" class="form-control">
                                </div>

                                <div class="form-group">
                                <label>Applicable Policy</label>
                                <input type="text" name="appli_poli" value="{{    $sdetails->appli_poli }}" class="form-control">
                                </div>

                                <div class="form-group">
                                <label>Qualification</label>
                                <input type="text" name="qualification" value="{{    $sdetails->qualification }}" class="form-control">
                                </div>

                                <div class="form-group">
                                <label>Amount of Grant/Stipend</label>
                                <input type="text" name="amount_of_grant" value="{{    $sdetails->amount_of_grant }}" class="form-control">
                                </div>

                                <div class="form-group">
                                <label>General Guideline</label>
                                <input type="text" name="gen_guideline" value="{{    $sdetails->gen_guideline }}" class="form-control">
                                </div>

                                <div class="form-group">
                                <label>Contact Information</label>
                                <input type="text" name="contact_info" value="{{    $sdetails->contact_info }}" class="form-control">
                                </div>

                                <div class="form-group">
                                <label>Active</label>
                                <input type="text" name="active" value="{{ $scholarships->active }}" class="form-control">
                                </div>

                                <button type="submit" class="btn btn-success">Update</button>
                                <a href="/scholarship" class="btn btn-danger">Cancel</a>

                        </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection

@section('scripts')

@endsection