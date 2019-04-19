<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'DESC')->get();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(CreateUserRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->role = $request->role;

        if ($request->hasFile('image')) {
            $avatar = $request->image;
            $path = $avatar->store('avatar', 'public');
            $user->image = $path;
        }

        $user->save();
        Session::flash('success', 'Thêm mới thành công!');
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $idUserLogin = Auth::user()->id;
        if ($user->id == 1 || $user->id == $idUserLogin) {

            Session::flash('error', 'Không thể xóa tài khoản này!');
            return redirect()->route('users.index');
        }

        $user->delete();
        Session::flash('success', 'Xóa thành công!');
        return redirect()->route('users.index');
    }

}
