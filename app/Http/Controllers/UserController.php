<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function index()
    {
        return view('users', ['users' => User::all()]);
    }
    public function show($id)
    {
        return view('profile', ['user' => User::findOrFail($id)]);
    }
    public function update(Request $request) {
      $user = User::where('id', $request->id)->first();
      User::where('id', $user->id)->update([
        'name'     => $request['name'],
        'email'    => $request['email'],
        'is_admin' => $request['is_admin'],
      ]);
      return redirect()->route('users');
    }
}
