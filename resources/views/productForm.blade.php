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
              <form class="" action="{{ route('product.create') }}" method="post">
                @csrf
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" id="inputName" name="name">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputPrice">Price</label>
                    <input type="price" class="form-control" id="inputPrice" name="price" required>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputDescription">Description</label>
                    <input type="text" class="form-control" id="inputDescription" name="description"  required>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="id_supplier">Supplier</label>
                    <select class="custom-select" name="id_supplier" required>
                      @foreach ($suppliers as $supplier)
                        <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                      @endforeach
                    </select>
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
