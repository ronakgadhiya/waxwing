<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'pages';
    protected $primarykey = 'id';
    protected $fillable=[
        'name',
        'img',
        'slug',
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

}
