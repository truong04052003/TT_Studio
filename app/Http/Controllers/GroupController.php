<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Role;
use Illuminate\Support\Facades\Log;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::paginate(4);
        $users = User::get();
        $param = [
            'groups' => $groups,
            'users' => $users
        ];
        return view('admin.groups.index', compact('groups'));
    }
    public function create()
    {
        $groups = Group::all();
        return view('admin.groups.create', compact('groups'));
    }
    public function store(Request $request)
    {
        try {
            $group = new Group();
            $group->name = $request->name;
            $group->save();
            toast('Thêm Quyền Thành Công!', 'success', 'top-right');
            return redirect()->route('group.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('group.index');
        }
    }
    public function edit($id)
    {
        $group = Group::find($id);
        return view('admin.groups.edit', compact('group'));
    }
    public function trash()
    {
        $groups = Group::onlyTrashed()->get();
        return view('admin.groups.trash', compact('groups'));
    }
    public function restore($id)
    {
        $group = Group::withTrashed()->find($id);
        try {
            $group->restore();
            toast('Khôi phục thành công', 'success', 'top-right');
            return redirect()->route('group.index');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('group.index');
        }
    }
    public function update(Request $request, $id)
    {
        try {
            $group = Group::find($id);
            $group->name = $request->name;
            $group->save();
            toast('Sửa Quyền Thành Công!', 'success', 'top-right');
            return redirect()->route('group.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('group.index');
        }
    }
    public function destroy($id)
    {
        try {
            $group = Group::find($id);
            $group->delete();
            toast('Nhóm Quyền Đã Đưa Vào Thùng Rác!', 'success', 'top-right');
            return redirect()->route('group.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có lỗi xảy ra!', 'error', 'top-right');
            return redirect()->route('group.index');
        }
    }
    public function forcedelete($id)
    {
        try {
            $group = Group::withTrashed()->find($id);
            $group->forceDelete();
            toast('Xóa Vĩnh Viễn Thành Công!', 'success', 'top-right');
            return redirect()->route('group.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('group.index');
        }
    }
    public function detail($id)
    {
        $group = Group::find($id);

        $current_user = Auth::user();
        $userRoles = $group->roles->pluck('id', 'name')->toArray();
        $roles = Role::all()->toArray();
        $group_names = [];
        /////lấy tên nhóm quyền
        foreach ($roles as $role) {
            $group_names[$role['group_name']][] = $role;
        }
        $params = [
            'group' => $group,
            'userRoles' => $userRoles,
            'roles' => $roles,
            'group_names' => $group_names,
        ];
        return view('admin.groups.detail', $params);
    }
    public function group_detail($id, Request $request)
    {
        $group = Group::find($id);
        $group->roles()->detach();
        $group->roles()->attach($request->roles);
        toast('Cấp quyền thành công', 'success', 'top-right');
        return redirect()->route('group.index');
    }
}
