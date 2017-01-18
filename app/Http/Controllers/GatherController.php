<?php

namespace App\Http\Controllers;

use App\Codetemp;
use App\Temp1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use QL\QueryList;

class GatherController extends Controller
{
    //2016-10-27----
//58.81----
//17.30----
//-21.59----
//15.06----
//13.72----
//-25.47----
//1.07----
//7.56----
//0.00----
//1.30----
//62.10----
    public function index(){
        //$page = "https://laravel-china.org/users/2233/topics?page=1";
        //http://data.10jqka.com.cn/financial/yjgg/op/code/code/002437/page/2/ajax/1/
        $code = '000568';
        $page = "http://data.10jqka.com.cn/financial/yjgg/op/code/code/600676/ajax/1/";

        $rule = array(
            'title'=>['td','text'],
           // 'url'=>['.list-group-item>a','href']
        );

        //$rang = ".list-group>li";

        $data = QueryList::Query($page,$rule,'','UTF-8','GB2312',true)->getData(function($item){return $item;});
        //var_dump($data);
        $arr = array();
        $goods_arr = array();
        foreach ($data as $key=>$item) {
            //echo $item['title'].'----<br/>';
            echo (($key%15)+ord('a'));
            $arr[chr(($key%15)+ord('a'))] = $item['title'];
            if(($key)%15 == 14){
                echo $key.'----';
                unset($arr['o']);
                $arr['code'] = $code;
                //Temp1::create($arr);
                //$goods_arr[] = $arr;
                var_dump($arr);
            }
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

    public function getall(){
       // set_time_limit(0);
        echo '----';
        $codearr = Codetemp::where('id','>',2696)->get();
        //$codearr = DB::select("select * from codetemps");
        //$codearr = Codetemp::all();
       // var_dump($codearr);
        foreach ($codearr as $item){
            //echo $item['code'].'---<br/>';
            //$code = $item['code'];
            $code = $item->code;

            //sleep(5);
            echo $code.'---<br/>';
            //$page = "http://data.10jqka.com.cn/financial/yjgg/op/code/code/603999/ajax/1/";
           // $page = "http://data.10jqka.com.cn/financial/yjgg/op/code/code/".$code."/ajax/1/";
            $page = "http://data.10jqka.com.cn/financial/yjgg/op/code/code/".$code."/page/2/ajax/1/";
            //echo $page.'---<br/>';

            $rule = array(
                'title'=>['td','text'],
                // 'url'=>['.list-group-item>a','href']
            );

            //$rang = ".list-group>li";

            $data = QueryList::Query($page,$rule,'','UTF-8','GB2312',true)->getData(function($item){return $item;});
            //var_dump($data);
            //$data = array();
            $arr = array();
            $goods_arr = array();
            foreach ($data as $key=>$item) {
                //echo $item['title'].'----<br/>';
                //echo (($key%15)+ord('a'));
                $arr[chr(($key%15)+ord('a'))] = $item['title'];
                if(($key)%15 == 14){
                    //echo $key.'----';
                    unset($arr['o']);
                    $arr['code'] = $code;
                    //Temp1::create($arr);
                    //$goods_arr[] = $arr;
                    //var_dump($arr);
                }
            }
        }
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
           $data = array(
               'code'=> $item->value,
           );
          // Codetemp::create($data);
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
