@extends('layouts.master')

@section('title')
    Scholarship | MMSU Scholarship
@endsection



@section('content')

<!--CRUD -->
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
              <h4 class="card-title"> Student Scholarship Record </h4>
                @if(session('status'))
                <div class="alert alert-success" role="alert">
                  {{ session('status') }}
                </div>
                @endif
              </div>

              <div class="card-body">
                <div class="table-responsive">
                  <table id="datatable" class="table">
                    <thead class=" text-primary">
                    
                    <th>First <br> Name</th>  
                    <th>Last <br> Name</th> 
                    <th>Middle <br> Name</th>  
                    <th>Section</th>
                    <th>Degree</th>
                    <th>College</th>
                    <th>Status</th>
                    <th>School <br> Year</th>
                    <th>Scholarship</th>


                    </thead>
                    <tbody>
                      @foreach ( $scholarships as $row)
                      <tr>
                         <td>{{ $row->fname }}</td>
                         <td>{{ $row->lname }}</td>
                         <td>{{ $row->mname }}</td>
                         <td>{{ $row->section }}</td>
                         <td>{{ $row->abbr}}</td>
                         <td>{{ $row->collegeabbr}}</td>
                         <td>{{ $row->status}}</td>
                         <td>{{ $row->cy}}</td>
                         <td>{{ $row->scholarship }}</td>

                       
                    
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--END OF CRUD-->
@endsection


@section('scripts')
<script>
  $(document).ready( function () {
    $('#datatable').DataTable();
});
</script>

@endsection