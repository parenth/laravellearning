<?php

namespace App\Http\Controllers;

use App\Contracts\TestContract;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App;

class TestController extends Controller
{
    //
    public function __construct(TestContract $test)
    {
        $this->test = $test;
    }

    public function index()
    {
        $test = App::make('test');
        $this->test->callMe('TestController');
    }
}
