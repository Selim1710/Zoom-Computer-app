<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function manageOrder(){
        return view('admin.layouts.order.order_table');
    }
}