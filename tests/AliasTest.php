<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AliasTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        // Arrange
        $container = new \Illuminate\Container\Container();

        // Actual
        $container->instance('app', function(){
            return 'app1';
        });
        $a = 0;
        $container->rebinding('app', function() use (&$a) {

            $a = 1;
        });
        // 再次绑定时，触发上一次rebinding中绑定该'app'的回调
        $container->instance('app', function () {
            return 'app2';
        });

        echo $a;

//        echo '44444';
        // Assert
        $this->assertEquals(1, $a);
    }

    public function testArrFirst()
    {
        $arr = array(
            1,2,3,4,5
        );

        $name = 3;
        $first = \Illuminate\Support\Arr::first($arr,function($value) use($name){
            return $value==$name;
        });
        $this->assertEquals(3,$first);
    }
}
