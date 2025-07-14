<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Supplier;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $products = Product::with('supplier_id)')->get();
        $products = Product::all();
        $getSuppliers = Supplier::all();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $suppliers = Supplier::all();
        return view('products.create', compact('suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductStoreRequest $request)
    {

        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->sku = $request->sku;
        $product->supplier_id = $request->supplier;
        $product->price = $request->price;
        $product->save();

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        $suppliers = Supplier::all();
        return view('products.edit', compact('product', 'suppliers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->sku = $request->sku;
        $product->supplier_id = $request->supplier;
        $product->price = $request->price;
        $product->save();

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index');
    }

     // trash
    public function trashindex()
    {
        $getSuppliers = Supplier::all();
        $products = Product::onlyTrashed()->get();

        return view('products.trash', compact('products'));
    }

    // restore
    public function restore(string $id)
    {
        $products = Product::onlyTrashed()->findOrFail($id);

        $products->restore();
        return redirect()->back();
    }

    // permanet delete
    public function permanentDelete(string $id)
    {
        $products = Product::onlyTrashed()->findOrFail($id);

        $products->forceDelete();
        return redirect()->back();
    }
}
