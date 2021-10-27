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
              <a href="scholarships/scholarship-create"  type="submit" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Scholarship</a>
              <h4 class="card-title"> Scholarships </h4>
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
                      <th>ID</th>
                      <th>Scholarship <br> Type</th>
                      <th>Scholarship</th>
                      <th>Discount</th>
                      <th>Sem <br> Charged</th>
                      <th>Funded <br> By</th>
                      <th>Status</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </thead>
                    <tbody>
                      @foreach ( $scholarships as $row)
                      <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->scholarship_type }}</td>
                        <td>{{ $row->scholarship }}</td>
                        <td>{{ $row->discount }}</td>
                        @if ($row->sem_charged == 1)
                        <td>1st Semester</td>
                        @elseif($row->sem_charged == 2)
                        <td> 2nd Semester</td>
                        @elseif($row->sem_charged == 3)
                        <td>Mid Year</td>
                        @elseif($row->sem_charged == 12)
                        <td>1st Semester <br> 2nd Semester</td> 
                        @elseif ($row->sem_charged == 123)
                        <td>1st Semester <br>2nd Semester <br> Mid Year</td>
                        @else
                        <td>--NONE--</td>
                        @endif
                        <td>{{ $row->funded_by }}</td>          
                        @if($row->active == 1)
                        <td>Active</td>
                      @else ($row->active == 0)
                      <td> Inactive</td>
                      @endif
                    

                        <td> 
                          <a href="/scholarhip-edit/{{ $row->id }}" class="btn btn-success">Edit</a>
                        </td>

                        <td> 
                          <form action="/scholarship-delete/{{ $row->id }}" method="POST">
                          {{ csrf_field() }}
                          {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                        </td>
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