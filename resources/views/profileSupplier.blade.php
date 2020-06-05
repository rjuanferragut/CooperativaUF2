@extends('layouts.app')

@section('content')
@if (Auth::check())
  @if (Auth::user()->is_admin == 1)
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">Supplier Managment</div>
            <div class="card-body">
              <form class="" action="{{ route('supplier.update', $supplier->id) }}" method="post">
                @csrf
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" id="inputName" name="name" value="{{ $supplier->name }}">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputEmail">Mail</label>
                    <input type="email" class="form-control" id="inputEmail" name="email" value="{{ $supplier->email }}" required>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputPhone">Phone</label>
                    <input type="number" class="form-control" id="inputPhone" name="phone" value="{{ $supplier->phone }}" required>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputDescription">Description</label>
                    <input type="text" class="form-control" id="inputDescription" name="description" value="{{ $supplier->description }}" required>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" name="address" value="{{ $supplier->address }}" required>
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
