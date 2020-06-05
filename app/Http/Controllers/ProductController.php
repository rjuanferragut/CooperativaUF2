<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Suppliers;

class ProductController extends Controller
{

    public function index()
    {
      return view('products', ['products' => Products::all()]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show($id, Request $request)
    {
      $product = Products::where('id', $request->id)->first();
      $supplier = Suppliers::findOrFail($product->id_supplier);
      return view('productDetails', ['product' => Products::findOrFail($id), 'supplier' => $supplier]);
    }

    public function update(Request $request)
    {
      $product = Products::where('id', $request->id)->first();
      Products::where('id', $product->id)->update([
        'name'     => $request['name'],
        'price'    => $request['price'],
        'description' => $request['description'],
      ]);
      return redirect()->route('products');
    }


    public function delete($id) {
      $product= Products::where('id', $id)->first();
      Products::where('id', $product->id)->delete();
      return redirect()->route('products');
    }
}
