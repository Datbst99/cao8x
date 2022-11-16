<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {

        $users = User::paginate(15);
        $roles = Role::all()->pluck('name', 'id')->toArray();

        return view('admin.user.index', compact('users', 'roles'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $userRole = $user->roles()->pluck('id')->toArray();
        $roles = Role::all();

        return view('admin.user.edit', compact('user', 'userRole','roles'));
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id, Request $request)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required|max:25',
            'email' => ['required', Rule::unique('users')->ignore($user->id),'email'],
            'pass' => 'required|string|min:8',
        ], [
            'name.required' => 'Tên đăng nhập không được để trống',
            'name.max' => 'Tên đăng nhập không được trên 25 ký tự',
            'email.required' => 'Email không được để trống',
            'email.unique' => 'Email đã được đăng ký',
            'pass.unique' => 'Nhập mật khẩu',
            'pass.min' => 'Nhập nhiều hơn 8 ký tự',

        ]);

        $user->update([
           'name' => $request->get('name'),
           'email' => $request->get('email'),
           'password' => bcrypt($request->get('pass'))
        ]);


        return redirect()->route('admin.user')->with('success', 'Cập nhật thông tin thành công');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $user = User::findOrFail($id);

        if($user->email == config('core.admin.email')) {
            return redirect()->back()->with('error', 'Không thể xóa admin mặc định hệ thống');
        }

        $user->delete();

        return redirect()->route('admin.user')->with('success', 'Xóa tài khoản người dùng thành công');
    }

}
