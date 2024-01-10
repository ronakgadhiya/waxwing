<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductInquiry extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'product_inquiries';
    protected $primarykey = 'id';
    protected $guarded = [];
    protected $dates = ['deleted_at'];

    public function productName()
    {
        return $this->hasOne(Product::class,'id','product_id');
    }
}
