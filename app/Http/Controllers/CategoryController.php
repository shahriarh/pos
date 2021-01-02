<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function create()
    {
      return view('admin.pages.category.create');
    }
    public function store(Request $request)
    { 
      $request->validate([
        'name'         => 'required|max:150',

      ]);

      $category = new Category;
  
      $category->name = $request->name;
     
      $category->save();
  
      return redirect()->route('category.create');
    }


    public function index()
    {
      $Categories = Category::orderBy('id', 'desc')->get();
      return view('admin.pages.category.list', compact('Categories'));
    }
}
