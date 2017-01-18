<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/11
 * Time: 16:08
 */

namespace App\Http\Repositories;


use App\Goods_price;

class GoodsPriceRepository extends Repository
{
    static $tag = "goods_price";

    public function model()
    {
        return app(Goods_price::class);
    }

    public function getAll()
    {
        $goods_prices = $this->remember('goods_price.all',function(){
            return Goods_price::all();
        });

        return $goods_prices;
    }

    public function getGoodsPrice($id)
    {
        $goods_price = $this->remember('goods_price.one.'.$id,function($id){
            return Goods_price::where('id',$id)->get();
        });
        if (!$goods_price)
            abort(404);
        return $goods_price;
    }

    public function getGoodsPriceByCode($code)
    {
        $goods_prices = $this->remember('goods_price.code.'.$code,function($code){
            return Goods_price::where('code',$code)->get();
        });

        return $goods_prices;
    }

    public function tag()
    {
        return GoodsPriceRepository::$tag;
    }



}