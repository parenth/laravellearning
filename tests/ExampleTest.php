<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
       // $this->visit('/')
         //    ->see('Laravel');
        $object1 = App::make('app');
        $object2 = App::make('\Illuminate\Foundation\Application');
        $this->assertInstanceOf('\Illuminate\Foundation\Application',$object1);
        $this->assertInstanceOf('\Illuminate\Foundation\Application',$object2);

        $this->assertEquals($object1,$object2);
        $this->assertTrue($object2 == $object1);
    }
}
