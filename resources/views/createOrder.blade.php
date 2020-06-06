@extends('layouts.app')

@section('content')
@if (Auth::check())
  @if (Auth::user()->is_admin == 1)
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">Product List Order</div>
            <a href="{{ url('cart/') }}" class="btn btn-secondary col-md-3  btn-lg btn-block" role="button" aria-pressed="true"><i class="fa fa-cart-arrow-down" aria-hidden="true"> Your cart</i></a>

            <div class="card-body">
              @if (session("status"))
                <div class="alert alert-success" role="alert">
                  {{session("status")}}
                </div>
              @endif
                @foreach ($products as $product)
                  <div class="row">
                    <div class="col-12 border-bottom">
                      <h4>{{$product->name}}</h4>
                      <p>{{ \Illuminate\Support\Str::limit($product->description, 50, '...') }}</p>
                      <p><strong>Precio: </strong> {{$product->price}}</p>
                    </div>
                    <a href="{{ url('addToCart/'.$product->id) }}" class="btn btn-secondary btn-lg btn-block" role="button" aria-pressed="true"><i class="fa fa-plus-square" aria-hidden="true"></i></a>
                    <!-- <a href="{{ url('product-detail/'.$product->id) }}" class="btn btn-secondary btn-lg btn-block" role="button" aria-pressed="true">Details</a> -->
                  </div>
                @endforeach
            </div>

          </div>
        </div>
      </div>
    </div>
  @endif
@endif
@endsection
