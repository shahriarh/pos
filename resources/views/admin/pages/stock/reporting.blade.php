@extends('admin.adminmaster')

@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="card ">
      <div class="card-header">
        Stock Report 
      </div>
      <div class="card-body">
       
        <table class="table table-hover table-striped">
          <thead>
            <tr>
              <th>Date</th>
              <th>Dayly Production</th>
              <th>Sample Issue</th>
              <th>Broken </th>
              <th>Stock to Depo </th>
              <th>Todays Sales Qty</th>
              <th>Return qty from Depo</th>
              <th>Closing Stock </th>
             
            </tr>
          </thead>

          <tbody>
          
          @foreach($Stocks as $row)
          @php ($closingStock = [])
            <tr>
              <td>{{ $row->created_at }}</td>
              <td>{{ $row->todays_stock }}</td> 
              <td>{{ $row->sample_issue }}</td> 
              <td>{{ $row->broken }}</td> 
              <td>{{ $row->todays_sales }}</td>

              <!-- datewise sales quantity -->
              <td>
              @foreach($data as $row)
              
              {{ $row->todays_qty }}
              
               @endforeach  
               </td>
               <td></td>
              <td>{{ $closingStock[] =$row->todays_stock-$row->sample_issue-$row->broken-$row->todays_sales }}</td> 
              
            </tr>
           
            @endforeach  

            <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Sum of sales qty: {{$depo_sale_qty_sum}}</td>
            <td></td>

            <td>Sum of Closing Stocks: {{$Sum_Closing_Stocks}}</td>
           

            </tr>
          </tbody>


        </table>
      </div>
    </div>

  </div>
</div>
<!-- main-panel ends -->
@endsection
