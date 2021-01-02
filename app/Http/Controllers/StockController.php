<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Stock;
Use App\Sale;
Use App\Product;
Use App\PacketSize;
use DB;
class StockController extends Controller
{
    public function create()
    {
      $Products = Product::orderBy('id', 'asc')->get();
      $PacketSizes = PacketSize::orderBy('id', 'asc')->get();
      return view('admin.pages.stock.create',compact('Products','PacketSizes'));
    }
    public function store(Request $request)
    {
  
      $request->validate([
        'product_id'         => 'required|max:150',
        'packet_id'        => 'required',
        'price'        => 'required',
        'product_route'        => 'required',
        'todays_stock'        => 'required',
        'sample_issue'        => 'required',
        'broken'        => 'required',
        'todays_sales'        => 'required',
      ]);

      $Stocks = new Stock;
  
      $Stocks->product_id = $request->product_id;
      $Stocks->packet_id = $request->packet_id;
      $Stocks->price = $request->price;
      $Stocks->product_route = $request->product_route;
      $Stocks->todays_stock = $request->todays_stock;
      $Stocks->sample_issue = $request->sample_issue;
      $Stocks->broken = $request->broken;
      $Stocks->todays_sales = $request->todays_sales;
    
      $Stocks->save();
        
      //$course->users()->sync($request->users,false);
  
      return redirect()->route('stock.create');
    }

    public function report()
    {
      $Stocks = Stock::orderBy('id', 'asc')->get();
      $Sales = Sale::orderBy('id', 'asc')->get();
      //$closing_stock = 
      $todays_stock_sum = DB::table("stocks")->get()->sum("todays_stock");
      $broken_sum = DB::table("stocks")->get()->sum("broken");
      $sample_issue_sum = DB::table("stocks")->get()->sum("sample_issue");
      $todays_sales_sum = DB::table("stocks")->get()->sum("todays_sales");
      $depo_sale_qty_sum = DB::table("sales")->get()->sum("todays_qty");
      $Sum_Closing_Stocks =$todays_stock_sum - $broken_sum -  $sample_issue_sum +  ($todays_sales_sum - $depo_sale_qty_sum) ;

      return view('admin.pages.stock.reporting',compact('Stocks','Sales','Sum_Closing_Stocks'));
      
    }
}
