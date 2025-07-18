<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index (){

        $totalProducts = Product::count();
        $totalSuppliers = Supplier::count();

        return view('dashboard', compact('totalProducts', 'totalSuppliers'));
    }
}
