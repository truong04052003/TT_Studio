<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Group;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', User::class);
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }



    public function create(Request $request)
    {
        $this->authorize('create', User::class);
        $groups = Group::all();
        $users = User::all();
        return view('admin.users.create',compact('groups', 'users'));
    }

    public function store(Request $request)
    {
        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->address = $request->address;
            $user->phone = $request->phone;
            $user->gender = $request->gender;
            $user->group_id = $request->group_id;
            if ($request->hasFile('image')) {
                $get_image = $request->file('image');
                $path = 'admin/uploads/';
                $get_name_image = $get_image->getClientOriginalName();
                $name_image = current(explode('.', $get_name_image));
                $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
                $get_image->move($path, $new_image);
                $user->image = $new_image;
                $data['product_image'] = $new_image;
            }
            $user->save();
            toast('Thêm Thành Viên Thành Công!', 'success', 'top-right');
            return redirect()->route('users.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('users.index');
        }
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        $param = [
            'user' => $user,
        ];
        return view('admin.users.profile',  $param);
    }

    public function edit($id)
    {
        $this->authorize('update', User::class);
        $users = User::find($id);
        $groups = Group::get();
        $param = [
            'users' => $users,
            'groups' => $groups
        ];
        return view('admin.users.edit', $param);
    }

    public function update(Request $request, $id)
    {
        try {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->group_id = $request->group_id;
        $file = $request->image;
        if ($request->hasFile('image')) {
            $get_image = $request->file('image');
            $path = 'admin/uploads/';
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            $user->image = $new_image;
            $data['product_image'] = $new_image;
        
        }
        $user->save();
        toast('Sửa nhân viên thành công', 'success', 'top-right');
        return redirect()->route('users.index');
    } catch (\Exception $e) {
        Log::error($e->getMessage());
        toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
        return redirect()->route('users.index');
    }
    }
    public function destroy($id)
    {
        $this->authorize('delete', User::class);
        try {
            $users = User::find($id);
            $users->delete();
            toast('Xóa nhân viên thành công', 'success', 'top-right');
            return redirect()->route('users.index');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            toast('Xóa nhân viên thất bại', 'error', 'top-right');
            return redirect()->route('users.index');
        }
    }
}
