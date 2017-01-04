<?php

namespace App\Http\Controllers\test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArraytestController extends Controller
{
    //
    public function index(){
        $arr2 = array('1','2','3');

        array_walk($arr2,function($value){echo $value.'----<br/>';});
    }

    public function reduce(){
        $arr = array(1,2,3,4,5,6);

        //echo array_reduce($arr,function($v1,$v2){return $v1.'--'.$v2.'--<br/>';});

        echo array_reduce($arr,function($v1,$v2){ echo $v1.'---'.$v2.'--<br/>'; return $v1+$v2;},3);

    }

    public function closuredump(){
        $test = function () {
            echo 'hello world';
        };



        $this->closure_dump($test);
    }

    public function reverse(){
        $arr = array(1,2,3,4,5,6);

        var_dump($arr);
        $arr = array_reverse($arr);
        var_dump($arr);
    }

    public function calluserfunc(){
        call_user_func(function($v1,$v2){echo $v1.'...'.$v2.'...<br/>';},3,10);

        $arr = array(1,2,3,4,5);
        call_user_func_array(function(){ var_dump(func_get_args());  },$arr);
    }

    function closure_dump($closure) {
        try {
            $func = new \ReflectionFunction($closure);
        } catch (ReflectionException $e) {
            echo $e->getMessage();
            return;
        }

        $start = $func->getStartLine() - 1;

        $end =  $func->getEndLine() - 1;

        $filename = $func->getFileName();

        echo implode("", array_slice(file($filename),$start, $end - $start + 1));
    }
}
