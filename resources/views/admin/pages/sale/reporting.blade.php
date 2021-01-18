@extends('admin.adminmaster')

@section('content')
<div class="main-panel">

  <div class="row">
    <div class="col-sm-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Search By Date</h5>
          <form action="{{route('sales.checksalereport')}}" method="POST">
          @csrf
          <label for="">Take a date</label>
          <input type="date" class="form-control" name="date">
         <br>
          <button type="submit" class="btn btn-primary">Search</button>
         </form>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Search By Month</h5>
          <form>
          
          <label for="">Select Month</label>
          <select class="form-control"  name="month">
            
            <option value="January">January</option>
            <option value="February">February</option>
            <option value="March">March</option>
            <option value="April">April</option>
            <option value="May">May</option>
            <option value="June">June</option>
            <option value="July">July</option>
            <option value="August">August</option>
            <option value="September">September</option>
            <option value="October">October</option>
            <option value="November">November</option>
            <option value="December">December</option>
          </select>
          <label for="">Select Year</label>
          <select name="year" id="" class="form-control">
            <option value="2020">2020</option>
            <option value="2021">2021</option>
          </select>
          <br>
          <button type="submit" class="btn btn-primary">Search</button>
          </form>
         
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Search By Year</h5>
          <form action="">
          <label for="">Select Year</label>
          <select name="year" id="" class="form-control">
            <option value="2020">2020</option>
            <option value="2021">2021</option>
          </select>
          <br>
          <button type="submit" class="btn btn-primary">Search</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Search By Time duration</h5>
          <p class="card-text">With supporting text below as a natural lead-in to </p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>

  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
         Sales Report
      </div>
      <div class="card-body">
       
        <table class="table table-hover table-striped">
          <thead>
            <tr>
              <th>Date</th>
              <th>Sales Qty</th>
              <th>Amount (Price)</th>
              <th>Discount</th>
              <th>Net Price</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($sales as $row)
            @php ($totals = [])
            <tr>
              
              <td>{{ $row->created_at }}</td>
              <td>{{ $row->todays_qty }}</td>
              <td>{{ $row->price }}</td>
              <td>{{ $row->discount }}</td>
              <td>{{ $row->netprice }}</td>
             
            </tr>
             @endforeach
             
             <tr>
              <td></td>
              <td>Sum of Sales quantity: {{App\Sale::sum('todays_qty')}}</td>
              <td>{{App\Sale::sum('price')}}</td>
              <td>{{App\Sale::sum('discount')}}</td>
              <td>{{App\Sale::sum('netprice')}}</td>
            </tr>  
            
           
          </tbody>


        </table>
      </div>
    </div>

  </div>
</div>
<!-- main-panel ends -->
@endsection
