<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{

    public function index()
    {
        $this->authorize('viewAny', Category::class);
        $items = Category::all();
        return view('admin.categories.index', compact('items'));
    }
    public function create()
    {
        $this->authorize('create', Category::class);
        return view('admin.categories.create');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ], [
            'name.required' => 'Không được để trống',
        ]);
        if ($validator->fails()) {
            return redirect()->route('categories.create')
                ->withErrors($validator)
                ->withInput();
        }
        $category = new Category();
        $category->name = $request->name;
        try {
            $category->save();
            toast('Thêm Thể Loại Thành Công!', 'success', 'top-right');
            return redirect()->route('categories.index');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('categories.index');
        }
    }

    public function show($id)
    {
    }
    public function edit($id)
    {
        $this->authorize('update', Category::class);
        $category = Category::find($id);
        return view('admin.categories.edit', compact('category'));
    }
    public function update(Request $request, $id)
    {
        try {
            $category = Category::find($id);
            $category->name = $request->name;
            $category->save();
            toast('Sửa Thể Loại Thành Công!', 'success', 'top-right');
            return redirect()->route('categories.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('categories.index');
        }
    }
    public function destroy($id)
    {
        $this->authorize('delete', Category::class);
        try {
            Category::find($id)->delete();
            toast('Thể Loại Đã Đưa Vào Thùng!', 'success', 'top-right');
            return redirect()->route('categories.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra', 'error', 'top-right');
            return redirect()->route('categories.index');
        }
    }
    public function garbagecan()
    {
        $this->authorize('trash', Category::class);
        $softs = Category::onlyTrashed()->get();
        return view('admin.categories.trash', compact('softs'));
    }
    public function restore($id)
    {
        $this->authorize('restore', Category::class);
        try {
            $softs = Category::withTrashed()->find($id);
            $softs->restore();
            toast('Khôi Phục Thể Loại Thành Công!', 'success', 'top-right');
            return redirect()->route('categories.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('categories.index');
        }
    }
    public function deleteforever($id)
    {
        $this->authorize('deleteforever', Category::class);

        try {
            $softs = Category::withTrashed()->find($id);
            $softs->forceDelete();
            toast('Xóa Vĩnh Viễn Thể Loại Thành Công!', 'success', 'top-right');
            return redirect()->route('categories.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('categories.index');
        }
    }
}
