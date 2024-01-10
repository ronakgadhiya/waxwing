<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'sliders';
    protected $primarykey = 'id';
    protected $fillable=[
        'name',
        'img',
        'status',
        'delete_by',
        'created_by',
        'updated_by'
    ];
    protected $dates = ['deleted_at'];
}
