@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Suppliers</div>

                <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Mail</th>
                          <th scope="col">Phone</th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($suppliers as $supplier)
                        <tr>
                          <th scope="row">{{ $supplier->id }}</th>
                          <td>{{ $supplier->name }}</td>
                          <td>{{ $supplier->email }}</td>
                          <td>{{ $supplier->phone }}</td>
                          <td>
                             <a href="{{ route('supplier', $supplier->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                             <a href="{{ route('supplier.delete', $supplier->id) }}"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
