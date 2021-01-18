@extends('admin.adminmaster')

@section('content')
<div id="app" class="container">
<div class="card card-sucess">
    <div class="card-header">
    <h3 class="card-title">Add Sales -  {{Auth::user()->name}} Bogura Depot</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form id="insert_form" action="{{route('addsale')}}" method="post" enctype="multipart/form-data">
                @csrf
    <hr>            
    <div class="input field">
        <table class="table table-border" id="table-field">
            <tr>
                <th>Select Employee</th>
                <th>Select a Product</th>
                <th>Todays Quantity</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Net Price</th>
                <th>Add or Remove</th>
            </tr>
            <tr>
                <td>
                    <select class="form-control" name="emp_id">
                    <option value=""> Select Employee </option>
                    @foreach ($Employees as $row)
                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                    @endforeach
                </select>
                </td>
                <td>
                <select class="form-control" name="stock_id">
                    <option value=""> Select a Product </option>
                    @foreach ($Products as $row)
                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                    @endforeach
                </select>
                </td>
                <td>
                    <input class="form-control" type="text" name="todays_qty" class="form-control" id="exampleInputEmail1" placeholder="Enter quantity">
                </td>
                <td>
                    <input class="form-control" type="number" name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter price">
                </td>
                <td>
                    <input class="form-control" type="number" name="discount" class="form-control" id="exampleInputEmail1" placeholder="Enter discount">
                </td>
                <td>
                    <input class="form-control" type="number" name="netprice" class="form-control" id="exampleInputEmail1" placeholder="Enter value">
                </td>
                <td><input class="btn btn-success" type="button" id="add" name="add" value="Add"></td>
            </tr>    
        </table>
 
       
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary" id="save">Submit</button>
    </div>
    </form>
    </div> 
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
 $(document).ready(function(){
    var html = '<tr><td><select class="form-control" name="emp_id"><option value=""> Select Employee </option>@foreach ($Employees as $row)<option value="{{ $row->id }}">{{ $row->name }}</option> @endforeach</select></td><td><select class="form-control" name="stock_id"><option value=""> Select a Product </option> @foreach ($Products as $row)<option value="{{ $row->id }}">{{ $row->name }}</option>@endforeach</select></td><td><input class="form-control" type="text" name="todays_qty" class="form-control" id="exampleInputEmail1" placeholder="Enter name"></td><td><input class="form-control" type="number" name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter code"></td><td><input class="form-control" type="number" name="discount" class="form-control" id="exampleInputEmail1" placeholder="Enter category"></td><td><input class="form-control" type="number" name="netprice" class="form-control" id="exampleInputEmail1" placeholder="Enter value"></td><td><input class="btn btn-danger" type="button" id="remove" name="remove" value="remove"></td></tr> ';

        var x = 1;
        $('#add').click(function(){
            $('#table-field').append(html);
        });
        $('#table-field').on('click','#remove',function(){
            $(this).closest('tr').remove();
        });
 });
</script>


@endsection