<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table = 'galleries';
    protected $primarykey = 'id';
    protected $fillable=[
        'img',
        'status',
        'created_by',
        'updated_by'
    ];
}
