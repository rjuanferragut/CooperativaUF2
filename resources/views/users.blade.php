@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>

                <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Mail</th>
                          <th scope="col">Is Admin</th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($users as $user)
                        <tr>
                          <th scope="row">{{ $user->id }}</th>
                          <td>{{ $user->name }}</td>
                          <td>{{ $user->email }}</td>
                          <td>{{ $user->is_admin }}</td>
                          <td>
                            @if (Auth::check())
                              @if (Auth::user()->is_admin == 1)
                                <a href="{{ route('user', $user->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                <a href="{{ route('user.delete', $user->id) }}"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
