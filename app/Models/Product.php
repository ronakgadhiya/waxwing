<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'products';
    protected $primarykey = 'id';
    protected $fillable=[
        'product_id',
        'img',
        'name',
        'slug',
        'desc',
        'measurement',
        'meta_tag',
        'meta_title',
        'meta_desc',
        'status',
        'delete_by',
        'created_by',
        'updated_by'
    ];
    protected $dates = ['deleted_at'];

    public function productCategory()
    {
        return $this->hasOne(ProductCategory::class,'id','product_id');
    }
}

