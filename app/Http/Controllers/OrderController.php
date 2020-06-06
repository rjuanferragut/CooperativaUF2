<?php

namespace App\Http\Controllers;
use App\User;
use App\Orders;
use App\OrderDetails;
use App\Products;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('orders', ['orders' => Orders::all()]);
    }
    public function form()
    {
        return view('createOrder', ['products' => Products::all()], ['users' => User::all()]);
    }
    public function create()
    {
      $inputs = request()->all();
      dd($inputs);
      Orders::create($inputs);
      return view('orders', ['orders' => Orders::all()]);
    }

    public function cart(Request $request)
    {
        return view ("cart");
    }

    public function addToCart($id)
    {
        if(!$cart){
          $cart = [
            $id => [
              "name" => $product->name,
              "quantity" => 1,
              "price" => $product->price
            ]
          ];
          session()->put('cart', $cart);

          return redirect()->back()->with("success", "Product added to cart successfully");
        }

        if(isset($cart[$id])){
          $cart[$id]['quantity']++;
          session()->put('cart',$cart);
          return redirect()->back()->with("success", "Product added to cart successfully");
        }

        $cart[$id] = [
          "name" => $product->name,
          "quantity" => 1,
          "price" => $product->price
        ];
        session()->put('cart',$cart);
        return redirect()->back()->with("success", "Product added to cart successfully");
    }

    public function edit(Orders $orders)
    {
        //
    }

    public function update(Request $request, Orders $orders)
    {
        //
    }

    public function destroy(Orders $orders)
    {
        //
    }
}
