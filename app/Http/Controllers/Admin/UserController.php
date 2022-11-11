<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

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
        $roles = Role::all()->pluck('name', 'id')->toArray();

        if($request->isMethod('post')) {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['nullable', 'string', 'email', 'max:255', 'unique:users'],
                'phone' => ['required', 'numeric', 'unique:users'],
                'password' => ['nullable', 'string', 'min:8'],
                'role' => ['required'],
                'status' => ['required'],
            ]);


            $user->name = $request->get('name');
            $user->email = $request->get('email');
            $user->phone = $request->get('phone');

            if($request->get('password')){
                $user->password = Hash::make($request->get('password'));
            }

            $user->status = $request->get('status') == User::STATUS_ACTIVE ? User::STATUS_ACTIVE : User::STATUS_INACTIVE;
            $user->syncRoles($request->get('role'));
            $user->update();

            return redirect()->route('admin.user')->with('success', 'Chỉnh sửa thông tin khách hàng thành công');
        }

        return view('admin.user.edit', compact('user', 'roles'));
    }
}
