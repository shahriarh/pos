@extends('admin.adminmaster')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<div id="app" class="container">
<div class="card card-sucess">
    <div class="card-header">
    <h3 class="card-title">Add Product </h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('product.add')}}" method="post" enctype="multipart/form-data">
                @csrf
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
        </div>    
        <div class="form-group">
              <label for="division_id">Select a Category for this Product</label>
              <select class="form-control" name="category_id">
                <option value="">Please select a Category for the Prouct</option>
                @foreach ($Categories as $row)
                  <option value="{{ $row->id }}">{{ $row->name }}</option>
                @endforeach
              </select>
        </div>
       
        <div class="form-group">
            <label for="exampleInputEmail1">Code</label>
            <input type="text" name="code" class="form-control" id="exampleInputEmail1" placeholder="Enter code">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Generick Name </label>
            <input type="text" name="generickname" class="form-control" id="exampleInputEmail1" placeholder="Enter category">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Description </label>
            <input type="text" name="description" class="form-control" id="exampleInputEmail1" placeholder="Enter description">
        </div>
        <div class="form-group row">
            <label for="avatar" class="col-md-4 col-form-label text-md-right">Please Upload Product Image</label>
            <span class="text-small text-info"></span>
            <div class="col-md-6">
                <input id="password" type="file" class="form-control @error('image') is-invalid @enderror" name="image" >

                @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"> Price</label>
            <input type="number" name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter Price">
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