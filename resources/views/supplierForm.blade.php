@extends('layouts.app')

@section('content')
@if (Auth::check())
  @if (Auth::user()->is_admin == 1)
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">New Supplier</div>
            <div class="card-body">
              <form class="" action="{{ route('supplier.create') }}" method="post">
                @csrf
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" id="inputName" name="name" required>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputEmail">Mail</label>
                    <input type="email" class="form-control" id="inputEmail" name="email" required>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputPhone">Phone</label>
                    <input type="number" class="form-control" id="inputPhone" name="phone" required>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputDescription">Description</label>
                    <input type="text" class="form-control" id="inputDescription" name="description" required>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" name="address" required>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" id="inputPassword" name="password" required>
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
