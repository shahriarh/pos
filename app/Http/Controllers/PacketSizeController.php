<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PacketSize;
use App\Product;

class PacketSizeController extends Controller
{
    public function create()
    {
      $Products = Product::orderBy('id', 'asc')->get();
      return view('admin.pages.packetsize.create',compact('Products'));
    }
    public function index()
    {
      $PacketSizes = PacketSize::orderBy('id', 'desc')->get();
      return view('admin.pages.packetsize.list', compact('PacketSizes'));
    }
}
