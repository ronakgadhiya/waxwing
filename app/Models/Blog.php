<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'blogs';
    protected $primarykey = 'id';
    protected $fillable=[
        'categorie_id',
        'name',
        'slug',
        'img',
        'desc',
        'meta_tag',
        'meta_title',
        'meta_desc',
        'status',
        'delete_by',
        'created_by',
        'updated_by'
    ];
    protected $dates = ['deleted_at'];

    public function category()
    {
        return $this->hasOne(BlogCategory::class,'id','categorie_id');
    }
}
