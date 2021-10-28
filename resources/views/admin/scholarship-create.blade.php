@extends('layouts.master')

@section('title')
 Add Scholarship | MMSU Scholarship
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Scholarship</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">

                            <form action="/scholarship"  method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label for="">Scholarship Type</label>
                                <input type="text"  name="scholarship_type" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="">Scholarship</label>
                                <input type="text"  name="scholarship" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="">Discount</label>
                                <input type="text"  name="discount" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="">Semester Charged</label>
                                <input type="text"  name="sem_charged" class="form-control" placeholder="Press [1 - 1st Semester] [12 - 1st & 2nd Semester] [123 - 1st & 2nd Semester & Mid Year]">
                            </div>
                            <div class="form-group">
                                <label for="">Funded By</label>
                                <input type="text"  name="funded_by" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Applicable Policy</label>
                                <input type="text"  name="appli_poli" class="form-control">
                            </div> <div class="form-group">
                                <label for="">Qualification</label>
                                <input type="text"  name="qualification" class="form-control">
                            </div> <div class="form-group">
                                <label for="">Amount of Grant/Stipend/</label>
                                <input type="text"  name="amount_of_grant" class="form-control">
                            </div> <div class="form-group">
                                <label for="">General Guidelines</label>
                                <input type="text"  name="gen_guideline" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Contact Information</label>
                                <input type="text"  name="contact_info" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Active</label>
                                <input type="text" class="form-control" placeholder="Press [ 1 - Active] [ 0 - Inactive]">
                                    <input type="submit"class="btn btn-primary"></input>
                                    <a href="/scholarship" class="btn btn-danger">Cancel</a>
                            </div>
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