<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //数据库表结构里未生成时间戳，这里需要使用 public $timestamps = false; 进行设置
    public $timestamps = false;

    protected $fillable = [
        'name','description',
    ];
}
