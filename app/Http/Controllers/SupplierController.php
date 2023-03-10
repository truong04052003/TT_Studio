<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\supliers\StoreSuppliersRequest;
use App\Http\Requests\supliers\UpdateSuppliersRequest;
use App\Models\Supplier;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SupplierController extends Controller
{
    public function index(Request $request)
    {
        $this->authorize('viewAny', Supplier::class);
        $suppliers = Supplier::all();
        return view('admin.suppliers.index', compact('suppliers'));
    }
    public function create()
    {
        $this->authorize('create', Supplier::class);
        return view('admin.suppliers.create');
    }

    public function store(StoreSuppliersRequest $request)
    {
        try {
            $suppliers = new Supplier();
            $suppliers->name = $request->name;
            $suppliers->email = $request->email;
            $suppliers->address = $request->address;
            $suppliers->phone = $request->phone;
            $suppliers->save();
            toast('Thêm Nhà Cung Cấp Thành Công!', 'success', 'top-right');
            return redirect()->route('suppliers.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('suppliers.index');
        }
    }

    public function edit($id)
    {
        $this->authorize('update', Supplier::class);
        $item = Supplier::find($id);
        return view('admin.suppliers.edit', compact('item'));
    }

    public function update(UpdateSuppliersRequest $request, $id)
    {
        try {
            $suppliers = Supplier::find($id);
            $suppliers->name = $request->name;
            $suppliers->email = $request->email;
            $suppliers->address = $request->address;
            $suppliers->phone = $request->phone;
            $suppliers->save();
            toast('Sửa Nhà Cung Cấp Thành Công!', 'success', 'top-right');
            return redirect()->route('suppliers.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('suppliers.index');
        }
    }

    public function destroy($id)
    {
        $this->authorize('delete', Supplier::class);
        try {
            $suppliers = Supplier::find($id);
            $suppliers->delete();
            toast('Đã Đưa Nhà Cung Cấp Vào Thùng Rác!', 'success', 'top-right');
            return redirect()->route('suppliers.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('suppliers.index');
        }
    }

    public function getTrashed()
    {
        $this->authorize('trash', Supplier::class);
        $suppliers = Supplier::onlyTrashed()->get();
        return view('admin.suppliers.trash', compact('suppliers'));
    }

    public function restore($id)
    {
        $this->authorize('restore', Supplier::class);
        try {
        $suppliers = Supplier::withTrashed()->find($id);
        $suppliers->restore();
        toast('Khôi Phục Thành Công!', 'success', 'top-right');
        return redirect()->route('suppliers.index');
    } catch (\exception $e) {
        Log::error($e->getMessage());
        toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
        return redirect()->route('suppliers.index');
    }
    }

    public function force_destroy($id)
    {
        $this->authorize('deleteforever', Supplier::class);
        try {
        $suppliers = Supplier::withTrashed()->find($id);
        $suppliers->forceDelete();
        toast('Xóa Vĩnh Viễn Nhà Cung Cấp Thành Công!', 'success', 'top-right');
        return redirect()->route('suppliers.index');
    } catch (\exception $e) {
        Log::error($e->getMessage());
        toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
        return redirect()->route('suppliers.index');
    }
    }
}
