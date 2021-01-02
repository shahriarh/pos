<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountsController extends Controller
{
    public function accounts()
    {
        return view('admin.pages.accounts');
    }
    public function monthlysalereport()
    {
        return view('admin.pages.report');
    }
    public function report()
    {
        return view('admin.pages.salereport');
    }
}
