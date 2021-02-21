<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function showForm()
    {
        return view('todos')->with('status', '明治大学');
    }
}
