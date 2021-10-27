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
                                <input type="text"  name="scholarship_type" class="form-control" id="inputEmail4">
                            </div>
                            <div class="form-group">
                                <label for="">Scholarship</label>
                                <input type="text"  name="scholarship" class="form-control" id="inputEmail4">
                            </div>
                            <div class="form-group">
                                <label for="">Discount</label>
                                <input type="text"  name="discount" class="form-control" id="inputEmail4">
                            </div>
                            <div class="form-group">
                                <label for="">Semester Charged</label>
                                <input type="text"  name="sem_charged" class="form-control" id="inputEmail4">
                            </div>
                            <div class="form-group">
                                <label for="">Funded By</label>
                                <input type="text"  name="funded_by" class="form-control" id="inputEmail4">
                            </div>
                            <div class="form-group">
                                <label for="">Active</label>
                                <input type="text" class="form-control">
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