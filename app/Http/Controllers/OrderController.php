<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show(){
        return view('all_orders');
    }

    public function store(){
        return view('create_order');
    }
}
