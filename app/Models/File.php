<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    /**
     * 该模型是否被自动维护时间戳
     *
     * @var bool
     */
     public $timestamps = true;
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
        'obj_type',
        'obj_id',
        'file_category_id',
        'ext',
        'sort',
        'name',
        'path',
        'md5',
        'size',
        'status'
    ];
}