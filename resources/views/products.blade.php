@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Products</div>

                <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Price</th>
                          <th scope="col">
                            @if (Auth::check())
                              @if (Auth::user()->is_admin == 1)
                                <a href="{{ route('product.form') }}"><i class="fa fa-plus" aria-hidden="true"></i></a>
                              @endif
                            @endif
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($products as $product)
                        <tr>
                          <th scope="row">{{ $product->id }}</th>
                          <td>{{ $product->name }}</td>
                          <td>{{ $product->price }}</td>
                          <td>
                          @if (Auth::check())
                            @if (Auth::user()->is_admin == 1)
                              <a href="{{ route('product', $product->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                              <a href="{{ route('product.delete', $product->id) }}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            @endif
                          @endif
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
