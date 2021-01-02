@extends('admin.adminmaster')

@section('content')
<div id="app" class="container">
<div class="card card-sucess">
    <div class="card-header">
    <h3 class="card-title">Add Sales -  {{Auth::user()->name}} Bogura Depot</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('addsale')}}" method="post" enctype="multipart/form-data">
                @csrf
    <div class="card-body">
        <div class="form-group">
              <label for="division_id">Select Employee </label>
              <select class="form-control" name="emp_id">
                <option value=""> Select Employee </option>
                @foreach ($Employees as $row)
                  <option value="{{ $row->id }}">{{ $row->name }}</option>
                @endforeach
              </select>
        </div>
        <div class="form-group">
            <label for="division_id">Select a Product </label>
            <select class="form-control" name="stock_id">
            <option value=""> Select a Product </option>
            @foreach ($Products as $row)
                <option value="{{ $row->id }}">{{ $row->name }}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Todays Quantity</label>
            <input type="text" name="todays_qty" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Date</label>
           
            <input type="text" name ="created_at" readonly value="{{Carbon\Carbon::now()->format('Y-m-d')."T".Carbon\Carbon::now()->format('H:i')}}" class="form-control" id="exampleInputEmail1">
        </div>
       

        <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input type="number" name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter code">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Discount</label>
            <input type="number" name="discount" class="form-control" id="exampleInputEmail1" placeholder="Enter category">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Net Price </label>
            <input type="number" name="netprice" class="form-control" id="exampleInputEmail1" placeholder="Enter value">
        </div>
       
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
    </div>

  
</div>



@endsection