<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;
    use softDeletes;
 
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id')->withTrashed();
    }
    public function orders()
    {
        return $this->BelongsToMany(Order::class, 'order_detail', 'product_id', 'order_id');
    }
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
