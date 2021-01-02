@extends('admin.adminmaster')

@section('content')
<div class="container">
<div class="card card-sucess">
    <div class="card-header">
    <h3 class="card-title">Create</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('accounts')}}" method="post" enctype="multipart/form-data">
                @csrf
    <div class="card-body">
        <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Base </label>
        <input type="text" name="phone" class="form-control" id="exampleInputPassword1" placeholder="base">
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Net Sales</label>
        <input type="text" name="email" class="form-control" id="exampleInputPassword1" placeholder="net sale">
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Outstanding</label>
        <input type="text" name="roll" class="form-control" id="exampleInputPassword1" placeholder="outstanding">
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Return Adjustment</label>
        <input type="text" name="section" class="form-control" id="exampleInputPassword1" placeholder="return outstanding">
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Net Outstanding</label>
        <input type="text" name="class" class="form-control" id="exampleInputPassword1" placeholder="net outstanding">
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Market Dues</label>
        <input type="text" name="class" class="form-control" id="exampleInputPassword1" placeholder="market dues">
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Difference between Head Office & Market </label>
        <input type="text" name="class" class="form-control" id="exampleInputPassword1" placeholder="">
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Head Office Outstanding </label>
        <input type="text" name="class" class="form-control" id="exampleInputPassword1" placeholder="">
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Difference between Head Office </label>
        <input type="text" name="class" class="form-control" id="exampleInputPassword1" placeholder="">
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1" >Adjustment Details </label>
            <div class="form-group">
            <label for="exampleInputPassword1">Salery  </label>
            <input type="text" name="class" class="form-control" id="exampleInputPassword1" placeholder="">
            </div>
            <div class="form-group">
            <label for="exampleInputPassword1">Expense  </label>
            <input type="text" name="class" class="form-control" id="exampleInputPassword1" placeholder="">
            </div>
            <div class="form-group">
            <label for="exampleInputPassword1">Doctor's Service  </label>
            <input type="text" name="class" class="form-control" id="exampleInputPassword1" placeholder="class">
            </div>
        
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1" >Cash & Bank Credit </label>
            <div class="form-group">
            <label for="exampleInputPassword1">Cash  </label>
            <input type="text" name="class" class="form-control" id="exampleInputPassword1" placeholder="cash">
            </div>
            <div class="form-group">
            <label for="exampleInputPassword1">Online  </label>
            <input type="text" name="class" class="form-control" id="exampleInputPassword1" placeholder="online">
            </div>
            <div class="form-group">
            <label for="exampleInputPassword1">Others   </label>
            <input type="text" name="class" class="form-control" id="exampleInputPassword1" placeholder="other">
            </div>
        
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