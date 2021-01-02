@extends('admin.adminmaster')

@section('content')
<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
        Category list 
      </div>
      <div class="card-body">
       
        <table class="table table-hover table-striped">
          <thead>
            <tr>
              <th>SL</th>
              <th>Name</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
          
          @foreach($Categories as $row)
            <tr>
              <td>#</td>
              <td>{{ $row->name }}</td> 
              <td>
              
              <a href="" class="btn btn-primary "><b>Edit</b></a>
              <a href="" class="btn btn-danger "><b>Delete</b></a>

              </td>
              
            </tr>
            @endforeach  
            
          </tbody>


        </table>
      </div>
    </div>

  </div>
</div>
<!-- main-panel ends -->
@endsection
