<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Depo;

class DepoController extends Controller
{
    public function create()
    {
      return view('admin.pages.depocreate');
    }

    public function store(Request $request)
    {
  
      $request->validate([
        'name'         => 'required|max:150',
        'price'        => 'required',
      ]);


      $course = new Course;
  
      $course->name = $request->name;
      $course->price = $request->price;
    
      $course->save();
        
      //$course->users()->sync($request->users,false);
  
      return redirect()->route('course.create');
    }

  
    public function index()
    {
      $depoes = Depo::orderBy('id', 'desc')->get();
      return view('admin.pages.depolist', compact('depoes'));
    }
}
