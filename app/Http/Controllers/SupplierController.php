<?php

namespace App\Http\Controllers;

use App\Suppliers;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('suppliers', ['suppliers' => Suppliers::all()]);
    }
    public function create()
    {
        //
    }
     public function show($id)
     {
         return view('profileSupplier', ['supplier' => Suppliers::findOrFail($id)]);
     }
    public function update(Request $request)
    {
      $supplier = Suppliers::where('id', $request->id)->first();
      Suppliers::where('id', $supplier->id)->update([
        'name'     => $request['name'],
        'email'    => $request['email'],
        'description' => $request['description'],
        'address' => $request['address'],
        'phone' => $request['phone'],
      ]);
      return redirect()->route('suppliers');
    }
    public function delete($id) {
      $supplier= Supplier::where('id', $id)->first();
      Supplier::where('id', $supplier->id)->delete();
      return redirect()->route('suppliers');
    }

}
