<?php

namespace App\Http\Controllers\test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StringtestController extends Controller
{
    public function pregmatch(){
        $str = "data:[1,2,3,4,54,6]";

        $html  =  "<b>bold text</b><a href=howdy.html>click me</a><script> var str=data:[1,2,3,4,56,7]</script>" ;

        $patten = "/(<([\w]+)[^>]*>)(.*?)(<\/\\2>)/";

        preg_match_all ( $patten ,  $html ,  $matches);

        $patten = "/\[.*\]/";
        $str = "var str=data:[1,21,2]";
        var_dump(preg_match($patten,$str,$result));

        var_dump($result);

        $returnStr = $this->getVarInjs($html,$patten);

        var_dump($returnStr);
    }

    function getVarInjs($str,$patten,$withType = true)
    {
        //$patten_js  = $withType?"'<\s*script[^>]*[^/]>(.*?)<\s*/\s*script\s*>'is":"'<\s*script\s*>(.*?)<\s*/\s*script\s*>'is";
        $patten_js = '/<script\>([\w\W]*)<\/script>/iU';
        preg_match_all($patten_js, $str, $matches);


        foreach($matches[1] as $m)
        {
            //过滤取值
            var_dump($m);
            preg_match($patten,$m,$result);
            var_dump($result);
            if(!empty($result[1]))
                return $result[1];
        }
        return false;
    }

    public function jsonchange(){
        $str = '{label:"WKA 000002",value:"000002" }';
        var_dump($str);
        $str = str_replace(['label','value'],['"label"','"value"'],$str);
        var_dump($str);
        $json = json_decode($str);
        var_dump($json);
    }
}
