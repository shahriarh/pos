<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sale;
use App\Employee;
use App\Product;

class SaleController extends Controller
{
    public function create()
    {
      $Employees = Employee::orderBy('id', 'asc')->get();
      $Products = Product::orderBy('id', 'asc')->get();
      return view('admin.pages.sale.addsale',compact('Employees','Products'));
    }

    public function store(Request $request)
    {
  
      $request->validate([
        'emp_id'         => 'required|max:150',
        'stock_id'        => 'required',
        'todays_qty'        => 'required',
        'price'        => 'required',
        'discount'        => 'required',
        'netprice'        => 'nullable',
      ]);


      $Sales = new Sale;
  
      $Sales->emp_id = $request->emp_id;
      $Sales->stock_id = $request->stock_id;
      $Sales->todays_qty = $request->todays_qty;
      $Sales->price = $request->price;
      $Sales->discount = $request->discount;
      $Sales->netprice = $request->netprice;
    
      $course->save();
        
      //$course->users()->sync($request->users,false);
  
      return redirect()->route('course.create');
    }
    
    

    

    public function report()
    {
      $sales = Sale::orderBy('id', 'desc')->get();
      
      $products = Product::orderBy('id', 'desc')->get();
      return view('admin.pages.sale.reporting', compact('sales','products'));
    }

    public function checksalereport(Request $request)
    {
      if ($request->date) {
        $date = date('y-m-d',strtotime($request->date));
        $sales = Sale::where('created_at',$date)->get();
        return view('admin.pages.sale.checkreport', compact('sales','date'));
        
      } else {
        # code...
      }
      
    }
}
