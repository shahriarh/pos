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
      $Sales->todays_qty = $request->todays_qty;
    
      $course->save();
        
      //$course->users()->sync($request->users,false);
  
      return redirect()->route('course.create');
    }
    
    

    

    public function index()
    {
      $depoes = Sale::orderBy('id', 'desc')->get();
      return view('admin.pages.depolist', compact('depoes'));
    }
}
