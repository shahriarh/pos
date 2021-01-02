@extends('admin.adminmaster')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<div id="app" class="container">
<div class="card card-sucess">
    <div class="card-header">
    <h3 class="card-title">Add Product in Stock </h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('stock.create')}}" method="post" enctype="multipart/form-data">
                @csrf
    <div class="card-body">   
        <div class="form-group">
              <label for="division_id">Select a Product </label>
              <select class="form-control" name="product_id">
                <option value=""> Select a Product </option>
                @foreach ($Products as $row)
                  <option value="{{ $row->id }}">{{ $row->name }}</option>
                @endforeach
              </select>
        </div>
        <div class="form-group">
              <label for="division_id">Select a Packet Size for this Product</label>
              <select class="form-control" name="packet_id">
                <option value="">Please select a Packet for this Prouct</option>
                @foreach ($PacketSizes as $row)
                  <option value="{{ $row->id }}">{{ $row->size }}</option>
                @endforeach
              </select>
        </div>
       
        <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input type="number" step="any" name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter price">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Product Route</label>
            <input type="text" name="product_route" class="form-control" id="exampleInputEmail1" placeholder="Enter route">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Today's  Production </label>
            <input type="number" name="todays_stock" class="form-control" id="exampleInputEmail1" placeholder="Enter stock quantity">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Sample Issue </label>
            <input type="number" name="sample_issue" class="form-control" id="exampleInputEmail1" placeholder="Enter issue quantity">
        </div>
       
        <div class="form-group">
            <label for="exampleInputEmail1"> Broken</label>
            <input type="number" name="broken" class="form-control" id="exampleInputEmail1" placeholder="Enter broken quantity">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"> Today's Sales Quantity</label>
            <input type="number" name="todays_sales" class="form-control" id="exampleInputEmail1" placeholder="Enter today's sales quantity">
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