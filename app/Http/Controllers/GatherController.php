<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use QL\QueryList;

class GatherController extends Controller
{
    //
    public function index(){
        //$page = "https://laravel-china.org/users/2233/topics?page=1";
        $page = "http://data.10jqka.com.cn/financial/yjgg/op/code/code/000568/ajax/1/";

        $rule = array(
            'title'=>['td','text'],
           // 'url'=>['.list-group-item>a','href']
        );

        //$rang = ".list-group>li";

        $data = QueryList::Query($page,$rule,'','UTF-8','GB2312',true)->getData(function($item){return $item;});

        foreach ($data as $item) {
            echo $item['title'].'----<br/>';
        }

        //var_dump($data);


        //$page = "http://www.investdata.info/profitability/profitability!ROA.action?code=000568&indexName=%E8%B5%84%E4%BA%A7%E5%87%80%E5%88%A9%E7%8E%87";



//        $pagecontent = file_get_contents($page);
//
//        //var_dump($pagecontent);
//
//        $patten = "/\[.*\]/";
//        //$patten = "/\{.*\}/";
//        $str = $this->getVarInjs($pagecontent,$patten);
//        foreach ($str as $key=>$item){
//            $str[$key] = $this->splitstr($item);
//        }
//        $year = explode(',',$str[2]);
//        var_dump($year);
//        $score = explode(',',$str[3]);
//        var_dump($score);



    }

    public function splitstr($str){
        $str = str_replace(['[',']','{','}'],'',$str);
        return $str;
    }

    public function data(){

    }

    public function gathergoodsprice(){

        $page = "http://www.investdata.info/profitability/profitability!ROA.action?code=000568";

        $pagecontent = file_get_contents($page);

        $patten = "/\[.*\]/";

        $str = $this->getVarInjs($pagecontent,$patten);
        foreach ($str as $key=>$item){
            $str[$key] = $this->splitstr($item);
        }
        $year = explode(',',$str[2]);
        var_dump($year);
        $score = explode(',',$str[3]);
        var_dump($score);
    }

   public function gathergoods(){
        $page = "http://www.investdata.info/profitability/profitability!ROA.action?code=000568&indexName=%E8%B5%84%E4%BA%A7%E5%87%80%E5%88%A9%E7%8E%87";
//        http://data.10jqka.com.cn/financial/yjgg/op/code/code/000568/ajax/1/
//        http://data.10jqka.com.cn/financial/yjgg/op/code/code/000568/page/2/ajax/1/
        //$page = "http://data.10jqka.com.cn/financial/yjgg/op/code/code/000568/ajax/1/";
        $pagecontent = file_get_contents($page);

        $patten = "/\{.*\}/";
        $str = $this->getVarInjs($pagecontent,$patten);

        $goods = array();

        foreach ($str as $key=>$item){
            //$str[$key] = $this->splitstr($item);
            $str = str_replace(['label','value'],['"label"','"value"'],$item);
            $goods[] = json_decode($str);
        }


       foreach ($goods as $item) {
           echo $item->value.'<br/>';
        }
    }

    function getVarInjs($str,$patten,$withType = true)
    {
        $patten_js  = $withType?"'<\s*script[^>]*[^/]>(.*?)<\s*/\s*script\s*>'is":"'<\s*script\s*>(.*?)<\s*/\s*script\s*>'is";
        preg_match_all($patten_js, $str, $matches);

        foreach($matches[1] as $m)
        {
            //过滤取值
            preg_match_all($patten,$m,$result);
           // var_dump($m);

            if(!empty($result[0])){

                return $result[0];
            }

        }
        return false;
    }
}
