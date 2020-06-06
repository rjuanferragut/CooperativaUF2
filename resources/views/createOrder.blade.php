@extends('layouts.app')

@section('content')
@if (Auth::check())
  @if (Auth::user()->is_admin == 1)
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">Order Creation</div>
            <div class="card-body">
              <form class="" action="{{ route('order.create') }}" method="get">
                @csrf
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="id_user">User</label>
                    <select class="custom-select" name="id_user" required>
                      @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                      @endforeach
                    </select>
                  </div>
                  @foreach ($products as $product)
                  <div class="form-group col-md-1">
                    <label for="input{{$product->name}}">{{ $product->name }}</label>
                    <input type="quantity" class="form-control" id="input{{$product->name}}" name="number">
                  </div>
                  @endforeach

                  <div class="form-group col-md-12">
                    <label for="inputTotal">total</label>
                    <input type="total" class="form-control" id="inputTotal" name="total" disabled>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputComments">comments</label>
                    <input type="text" class="form-control" id="inputComments" name="comments">
                  </div>
                </div>
                <button type="submit" class="btn btn-success float-right">Save</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endif
@endif
@endsection
