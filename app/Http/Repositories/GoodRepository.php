<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/11
 * Time: 17:06
 */

namespace App\Http\Repositories;


use App\Good;

class GoodRepository extends Repository
{
    static $tag = 'good';

    public function model()
    {
        \Log::info('goods Repository model');
        return app(Good::class);
    }

    public function getAll()
    {
        \Log::info('goods Repository getAll');
        $goods = $this->remember('goods.all',function(){
            return Good::all();
        });

        return $goods;
    }

    public function search($val)
    {
        $goods = $this->remember('goods.search.'.$val,function ($val){
            return Good::where('code','like','%'.$val.'%');
        });

        return $goods;
    }

    public function tag()
    {
        return GoodRepository::$tag;
    }

}