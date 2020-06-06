@extends('layouts.app')

@section('content')
@if (Auth::check())
  @if (Auth::user()->is_admin == 1)
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">Product List Order</div>
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
