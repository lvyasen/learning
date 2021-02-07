<?php

namespace App\Models;


use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Test extends Model
{
    use SoftDeletes;//使用软删除
    protected $collection = 'test';
    protected $fillable = ['title','phone'];//白名单
    protected $guarded = ['price'];//黑名单
    protected $dates = ['deleted_at'];//设置 mongo date
}
