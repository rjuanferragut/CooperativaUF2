@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">orders</div>

                <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">User</th>
                          <th scope="col">Total</th>
                          <th scope="col">Comments</th>

                          <th scope="col">
                            @if (Auth::check())
                              <a href="{{ route('order.form') }}"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            @endif
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($orders as $order)
                        <tr>
                          <th scope="row">{{ $order->id }}</th>
                          <td>{{ $order->user_id }}</td>
                          <td>{{ $order->total }}</td>
                          <td>{{ $order->comments }}</td>
                          <td>
                          @if (Auth::check())
                            @if (Auth::user()->is_admin == 1)
                              <!-- <a href="{{ route('order', $order->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a> -->
                              <a href="{{ route('order.delete', $order->id) }}"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
