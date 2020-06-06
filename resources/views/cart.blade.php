@extends('layouts.app')

@section('content')
@if (Auth::check())
  @if (Auth::user()->is_admin == 1)
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">Cart</div>
            <div class="card-body">
              @if (session("status"))
                <div class="alert alert-success" role="alert">
                  {{session("status")}}
                </div>
              @endif
              <p>cart</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endif
@endif
@endsection
