@extends('layouts.app')

@section('content')
@if (Auth::check())
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">Cart</div>
            <a href="{{ url('newOrder/') }}" class="btn btn-secondary col-md-3  btn-lg btn-block" role="button" aria-pressed="true"><i class="fa fa-arrow-circle-o-left" aria-hidden="true">
 Products</i></a>

            <div class="card-body">
              @if (session("status"))
                <div class="alert alert-success" role="alert">
                  {{session("status")}}
                </div>
              @endif
              <?php $valor = 0 ?>
              @if(session('cart'))
                <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th>Product</th>
                      <th>€/Kg</th>
                      <th>Quantity</th>
                    </tr>
                  </thead>
                  @foreach(session('cart') as $id => $details)
                    <?php
                      $valor += $details['price'] * $details['quantity'];
                    ?>
                    <tr>
                      <th>{{ $details['name'] }}</th>
                      <th>{{ $details['price'] }}€</th>
                      <th>{{ $details['quantity'] }}</th>
                    </tr>
                  @endforeach
                </table>
              @endif
              <table align="right">
                <th>
                  <div class="badge badge-primary text-wrap" style="width: 10rem;">
                    <p></p>
                    <p>Total {{ $valor }}€</p>
                  </div>
                </th>
              </table>
              <form class="" action="{{ route('order.create') }}" method="get">
                <input type="number" name="total" value="{{$valor}}" hidden>
                <button  type="submit" class="btn btn-secondary col-md-3  btn-lg btn-block">Comprar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endif
@endsection
