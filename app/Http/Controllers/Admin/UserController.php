<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(15);

        return view('admin.user.index', compact('users'));
    }

    public function edit($id, Request $request)
    {
        $user = User::findOrFail($id);

        return view('admin.user.edit', compact('user'));
    }
}
