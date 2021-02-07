<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index()
    {
        // 插入数据 insert 没有插入时间戳 create有
//      $res = Test::insert([ 'title' => 'The Fault in Our Stars','phone'=>18530893662]);
//      Test::create([ 'title' => 'The Fault in Our Stars','phone'=>18530893662]);
        // 查找数据
//        $res = Test::where(['phone'=>18530893662])->get();
        // 删除数据
//        $res = Test::where(['phone'=>18530893662])->delete();
        // 更新数据
//        $res = Test::where(['phone'=>18530893662])->update(['phone'=>18530893661]);
        // 自增自减
//        $res = Test::where(['phone'=>18530893662])->increment('score',1);
//        $res = Test::where(['phone'=>18530893662])->decrement('score',1);
        // 主键查询
//        $res = Test::find('601b74206143f6676d597886');
        // 查询全部
//        $res = Test::all();
        // 分页
//        $res = Test::skip(2)
//            ->take(1)
//            ->get();
        // groupBy
//        $res = Test::groupBy('title')
//            ->get(['title', 'phone']);
        // distinct
//        $res = Test::distinct()->get(['phone']);
//        $res = Test::where(['title'=>['']])
//            ->distinct('phone')
//            ->get();
        // like
//        $res = Test::where('title','like','%1%')->get();
//        return $res;
    }
}
