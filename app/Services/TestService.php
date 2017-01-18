<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/18
 * Time: 9:16
 */

namespace App\Services;

use App\Contracts\TestContract;

class TestService implements TestContract
{
    public function callMe($controller)
    {
        // TODO: Implement callMe() method.
        dd('Call Me From TestServiceProvider In '.$controller);
    }

}