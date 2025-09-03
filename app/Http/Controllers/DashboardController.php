<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    function index (){

        $totalProducts = Product::where('user_id', Auth::user()->id)->get()->count();
        $totalSuppliers = Supplier::where('user_id', Auth::user()->id)->get()->count();

        return view('dashboard', compact('totalProducts', 'totalSuppliers'));
    }
}
