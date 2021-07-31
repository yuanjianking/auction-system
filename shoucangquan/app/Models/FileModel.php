<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FileModel extends Model
{
    protected $table = 'file'; //添加数据库表名
    protected $primaryKey = "file_id";//主键
    public $timestamps = false;  //关掉laravel内置时间戳
    protected $guarded = [];
}
