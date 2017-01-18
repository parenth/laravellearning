<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels nice to relax.
|
*/

require __DIR__.'/../bootstrap/autoload.php';


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
/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/
// new 服务容器对象，并注册kernel服务 .
$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/
// 初始化 kernel （核心）对象
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
// kernel->handle  方法 把请求参数转换为输出对象response.

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);
// send 生成头和内容返回给客户端
$response->send();
// 最后处理 中间件 中terminate方法（没有定义该方法则不处理）
$kernel->terminate($request, $response);
