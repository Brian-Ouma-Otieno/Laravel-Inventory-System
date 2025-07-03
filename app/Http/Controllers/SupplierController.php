<?php

namespace App\Http\Controllers;

use App\Http\Requests\SupplierStoreRequest;
use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = Supplier::all();

        return view('suppliers.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SupplierStoreRequest $request)
    {
        $supplier = new Supplier();
        $supplier->name = $request->name;
        $supplier->contact_person = $request->contact_person;
        $supplier->phone = $request->phone;
        $supplier->email = $request->email;
        $supplier->address = $request->address;
        $supplier->save();

        return redirect()->route('suppliers.index');
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
        $supplier = Supplier::findOrFail($id);
        return view('suppliers.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SupplierStoreRequest $request, string $id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->name = $request->name;
        $supplier->contact_person = $request->contact_person;
        $supplier->phone = $request->phone;
        $supplier->email = $request->email;
        $supplier->address = $request->address;
        $supplier->save();

        return redirect()->route('suppliers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();

        return redirect()->route('suppliers.index');
    }

    // trash
    public function trashindex()
    {
        $suppliers = Supplier::onlyTrashed()->get();

        return view('suppliers.trash', compact('suppliers'));
    }

    // restore
    public function restore(string $id)
    {
        $suppliers = Supplier::onlyTrashed()->findOrFail($id);

        $suppliers->restore();
        return redirect()->back();
    }

    // permanet restore
    public function permanentDelete(string $id)
    {
        $suppliers = Supplier::onlyTrashed()->findOrFail($id);

        $suppliers->forceDelete();
        return redirect()->back();
    }
}
