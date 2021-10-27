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
              <h4 class="card-title"> Scholarship Details </h4>
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
                      <th>Scholarship</th>
                      <th>Discount</th>
                      <th>SemCharged</th>
                      <th>FundedBy</th>
                      <th>Percent</th>
                      <th>Fund</th>
                      <th>Fund <br> Description</th>
                   
                    </thead>
                    <tbody>
                      @foreach ( $data as $row)
                      <tr>
                      <td>{{ $row->id }}</td>
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
                       
                        <td>{{ $row->percent }}</td>
                        <td>{{ $row->fund }}</td>
                        <td>{{ $row->fund_desc }}</td>
                  
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