@extends('admin.adminmaster')

@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-header">
         Date wise Report
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
          
             
             <tr>
             @foreach ($sales as $row)
              <td>{{ $row->created_at }}</td>
              <td>{{ $row->todays_qty }}</td>
              <td>{{ $row->price }}</td>
              <td>{{ $row->discount }}</td>
              <td>{{ $row->netprice }}</td>

             @endforeach
            </tr>     
           
          </tbody>


        </table>
      </div>
    </div>

  </div>
</div>
<!-- main-panel ends -->
@endsection

       