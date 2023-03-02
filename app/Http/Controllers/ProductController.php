<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Exports\ProductExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;



class ProductController extends Controller
{
    public function index()
    {
        $items  = Product::with('category')->paginate(4);
        if ($key = request()->key) {
            $items  = Product::with('category')->where('name', 'like', '%' . $key . '%')->paginate(4);
        }
        return view('admin.products.index', compact('items'));
    }
    public function create()
    {
        $items = Category::all();
        return view('admin.products.create', compact('items'));
    }
    public function store(Request $request)
    {
        // dd(1);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required',
            'image' => 'required',
            'description' => 'required',
        ], [
            'name.required' => 'Không được để trống',
            'price.required' => 'Vui lòng nhập giá',
            'image.required' => 'Vui lòng chọn ảnh',
            'description.required' => 'Không được để trống'
        ]);
        if ($validator->fails()) {
            return redirect()->route('products.create')
                ->withErrors($validator)
                ->withInput();
        }
        // Luu
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        if ($request->hasFile('image')) {
            //lấy file
            $get_image = $request->file('image');
            //lấy tên file
            $get_name_image = $get_image->getClientOriginalName();
            $path = 'admin/uploads/';
            //xóa đuôi
            $name_image = current(explode('.', $get_name_image));
            //thay đuôi thành jpg
            $new_image = $name_image . '.' . $get_image->getClientOriginalExtension();
            //đưa ảnh vào thư mụa public/uploads
            $get_image->move($path, $new_image);
            //gán ảnh
            $product->image = $new_image;
            //lưu ảnh
        }
        try {
            $product->save();
            toast('Thêm Sản Phẩm Thành Công!', 'success', 'top-right');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('products.create')->with('error', 'Da co loi xay ra');
        }
        return redirect()->route('products.index');
    }
    public function show($id)
    {
        $productshow = Product::findOrFail($id);
        return view('admin.products.show', compact('productshow'));
    }
    public function edit($id)
    {

        $product = Product::find($id);
        $items = Category::all();
        return view('admin.products.edit', compact('product', 'items'));
    }
    public function update(Request $request, $id)
    {

        try {
            $product = Product::find($id);
            $product->name = $request->name;
            $product->price = $request->price;
            $product->category_id = $request->category_id;
            if ($request->hasFile('image')) {
                $get_image = $request->file('image');
                $path = 'admin/uploads/';
                $get_name_image = $get_image->getClientOriginalName();
                $name_image = current(explode('.', $get_name_image));
                $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
                $get_image->move($path, $new_image);
                $product->image = $new_image;
                $data['product_image'] = $new_image;
            }
            $product->description = $request->description;
            $product->save();
            toast('Sửa Sản Phẩm Thành Công!', 'success', 'top-right');
            return redirect()->route('products.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('products.index');
        }
    }
    //xóa 
    public function destroy($id)
    {
        try {
            $products = Product::find($id);
            $products->delete();
            toast('Sản Phẩm Đã Đưa Vào Thùng Rác!', 'success', 'top-right');
            return redirect()->route('products.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra', 'error', 'top-right');
            return redirect()->route('products.index');
        }
    }

    //thùng rác
    public function garbagecan()
    {
        $softs = Product::onlyTrashed()->get();
        return view('admin.products.trash', compact('softs'));
    }
    //khôi phục
    public function restore($id)
    {
        try {
            $softs = Product::withTrashed()->find($id);
            $softs->restore();
            toast('Khôi Phục Sản Phẩm Thành Công!', 'success', 'top-right');
            return redirect()->route('products.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('products.index');
        }
    }
    //xóa vĩnh viễn
    public function deleteforever($id)
    {
        try {
            $softs = Product::withTrashed()->find($id);
            $softs->forceDelete();
            toast('Xóa Vĩnh Viễn Thành Công!','success','top-right');
            return redirect()->route('products.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('products.index');
        }
    }
    //tìm kiếm
    public function search(Request $request)
    {
        $products = Product::where('name', 'Like', '%' . $request->search . '%')
            ->orwhere('price', $request->search)
            ->get();
        return view('admin.product.search', compact('products'));
    }
    public function Excel()
    {
        return Excel::download(new ProductExport, 'users.xlsx');
    }

 
}
