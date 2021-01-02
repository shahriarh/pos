<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\PacketSize;

class ProductController extends Controller
{
    public function create()
    {
      $Categories = Category::orderBy('id', 'asc')->get();
      return view('admin.pages.product.addproduct',compact('Categories'));
    }

    public function store(Request $request)
    { 
      $request->validate([
        'name'         => 'required|max:150',
        'code'         => 'required|max:150',
        'category_id'  => 'required',
        'packet_id'    => 'required',
        'generickname' => 'required|max:150',
        'description'  => 'required',
        'price'        => 'required',
        'image' => 'nullable',

      ]);

      $Product = new Product;
  
      $Product->name = $Product->name;
      $Product->code = $Product->code;
      $Product->category_id = $Product->category_id;
      $Product->packet_id = $Product->packet_id;
      $Product->generickname = $Product->generickname;
      $Product->description = $Product->description;
      $Product->price = $Product->price;
      $Product->image = $Product->image;
     
      $Product->save();

      $imageName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('images'), $imageName);
  
      return redirect()->route('product.create');
    }
}
