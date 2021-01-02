@extends('admin.adminmaster')

@section('content')
<div class="container">
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">All Courses</h3>

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
           

            <div class="input-group-append">
              <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              
              <th>#</th>
              <th>Name</th>
              <th>Address</th>
              <th>Action</th>
           
            </tr>
          </thead>
          <tbody>
          
          @foreach($depoes as $depo)
            <tr>
              <td>#</td>
              <td>{{ $depo->name }}</td>
              <td>{{ $depo->address }} $</td>
              <td>
              
              <a href="{{ route('enrolform', $course->id) }}" class="btn btn-success">Enroll</a>

              </td>
              
            </tr>
            @endforeach  
           
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
        
</div>
</div>
@endsection
