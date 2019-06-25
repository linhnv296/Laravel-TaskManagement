<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    function index(){
        $customers = DB::table('users')->get();
        return view('.modules.customer.index', compact('customers'));
    }

    function create(){
        return view('.modules.customer.create');
    }
    function edit(){
        return view('.modules.customer.edit');
    }
    function show(){
        return view('.modules.customer.show');
    }
}

