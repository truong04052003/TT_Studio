<?php

namespace App\Exports;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductExport implements FromCollection
{
    
    public function collection()
    {
        return DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->select(
                'products.name',
                'products.price',
                'categories.name as cateName',
                'products.image',
                'products.created_at',
                'products.updated_at',
            )->get();
    }
    public function headings(): array {
        return ["Tên Sản Phẩm", "Giá(VND)", "Thể loại","Ảnh", "Ngày Nhập", "Ngày Sửa"];
    }
 
  
}
