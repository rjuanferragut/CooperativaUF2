@extends('layouts.app')

@section('content')
@if (Auth::check())
  @if (Auth::user()->is_admin == 1)
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">product Managment</div>
            <div class="card-body">
              <form class="" action="{{ route('product.update', $product->id) }}" method="post">
                @csrf
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" id="inputName" name="name" value="{{ $product->name }}">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputPrice">Price</label>
                    <input type="price" class="form-control" id="inputPrice" name="price" value="{{ $product->price }}" required>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputDescription">Description</label>
                    <input type="text" class="form-control" id="inputDescription" name="description" value="{{ $product->description }}" required>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputSupplier">Supplier</label>
                    <input type="text" class="form-control" id="inputSupplier" name="supplier" value="{{ $supplier->name }}" disabled>
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
