<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
      $users = User::all();
      return view('backend.users.index', compact('users'));
    }

    public function edit($id)
    {
      $user = User::whereId($id)->firstOrFail();
      $roles = Role::all();
      $selectedRoles = $user->roles()->pluck('name')->toArray();
      return view('backend.users.edit', compact('user', 'roles', 'selectedRoles'));
    }
}
