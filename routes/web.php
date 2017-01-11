<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
// User Auth
Auth::routes();
Route::get('/test',function(){
    $arr = array(1,2,3,4);
    //echo end($arr).'.....';
    //array_walk($arr,create_function('$value','echo $value'));
    //$arr2 = array('1','2','3');
    //array_walk($arr2, create_function('$value', 'echo $value;'));
    return debug_backtrace();
});
Route::get('/auth/github', ['uses' => 'Auth\AuthController@redirectToGithub', 'as' => 'github.login']);
Route::get('/auth/github/callback', ['uses' => 'Auth\AuthController@handleGithubCallback', 'as' => 'github.callback']);
Route::get('/github/register', ['uses' => 'Auth\AuthController@registerFromGithub', 'as' => 'github.register']);
Route::post('/github/store', ['uses' => 'Auth\AuthController@store', 'as' => 'github.store']);

// Site route
Route::get('/', ['uses' => 'HomeController@index', 'as' => 'index']);
Route::get('/projects', ['uses' => 'HomeController@projects', 'as' => 'projects']);
Route::get('/search', ['uses' => 'HomeController@search', 'as' => 'search']);
Route::get('/achieve', ['uses' => 'HomeController@achieve', 'as' => 'achieve']);

// Post
Route::get('/blog', ['uses' => 'PostController@index', 'as' => 'post.index']);
Route::get('/blog/{slug}', ['uses' => 'PostController@show', 'as' => 'post.show']);

//gather
Route::get('gather',['uses' => 'GatherController@index', 'as'=>'gather.index']);
Route::get('gather/gathergoods',['uses' => 'GatherController@gathergoods', 'as'=>'gather.gathergoods']);
Route::get('gather/gathergoodsprice',['uses' => 'GatherController@gathergoodsprice', 'as'=>'gather.gathergoodsprice']);
Route::get('gather/getall',['uses' => 'GatherController@getall', 'as'=>'gather.getall']);

// Category
Route::get('/category/{name}', ['uses' => 'CategoryController@show', 'as' => 'category.show']);
Route::get('/category', ['uses' => 'CategoryController@index', 'as' => 'category.index']);

// Tag
Route::get('/tag/{name}', ['uses' => 'TagController@show', 'as' => 'tag.show']);
Route::get('/tag', ['uses' => 'TagController@index', 'as' => 'tag.index']);

// User
Route::get('/user/{name}', ['uses' => 'UserController@show', 'as' => 'user.show']);
Route::get('/notifications', ['uses' => 'UserController@notifications', 'as' => 'user.notifications']);
Route::patch('/user/upload/avatar', ['uses' => 'UserController@uploadAvatar', 'as' => 'user.upload.avatar']);
Route::patch('/user/upload/profile', ['uses' => 'UserController@uploadProfile', 'as' => 'user.upload.profile']);
Route::patch('/user/upload/info', ['uses' => 'UserController@update', 'as' => 'user.update.info']);

// Comment
Route::get('/commentable/{commentable_id}/comments', ['uses' => 'CommentController@show', 'as' => 'comment.show']);
Route::resource('comment', 'CommentController', ['only' => ['store', 'destroy', 'edit', 'update']]);


// SiteMap
Route::get('sitemap', 'SiteMapController@index');
Route::get('sitemap.xml', 'SiteMapController@index');

Route::group(['prefix' => 'test'],function (){
    Route::get('/arraytest',['uses' => 'test\ArraytestController@index','as' => 'Arraytest.index']);
    Route::get('/arraytest/reduce',['uses' => 'test\ArraytestController@reduce','as' => 'Arraytest.reduce']);
    Route::get('/arraytest/closuredump',['uses' => 'test\ArraytestController@closuredump','as' => 'Arraytest.closuredump']);
    Route::get('/arraytest/reverse',['uses' => 'test\ArraytestController@reverse','as' => 'Arraytest.reverse']);
    Route::get('/arraytest/calluserfunc',['uses' => 'test\ArraytestController@calluserfunc','as' => 'Arraytest.calluserfunc']);

    Route::get('/stringtest/pregmatch',['uses' => 'test\StringtestController@pregmatch','as' => 'Stringtest.pregmatch']);
    Route::get('/stringtest/jsonchange',['uses' => 'test\StringtestController@jsonchange','as' => 'Stringtest.jsonchange']);
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {

    /**
     * admin url
     */
    Route::get('/', ['uses' => 'AdminController@index', 'as' => 'admin.index']);
    Route::get('/settings', ['uses' => 'AdminController@settings', 'as' => 'admin.settings']);
    Route::post('/settings', ['uses' => 'AdminController@saveSettings', 'as' => 'admin.save-settings']);
    Route::post('/upload/image', ['uses' => 'ImageController@uploadImage', 'as' => 'upload.image']);
    Route::delete('/delete/file', ['uses' => 'FileController@deleteFile', 'as' => 'delete.file']);
    Route::post('/upload/file', ['uses' => 'FileController@uploadFile', 'as' => 'upload.file']);


    /**
     * admin uri
     */
    Route::get('/posts', ['uses' => 'AdminController@posts', 'as' => 'admin.posts']);
    Route::get('/comments', ['uses' => 'AdminController@comments', 'as' => 'admin.comments']);
    Route::get('/tags', ['uses' => 'AdminController@tags', 'as' => 'admin.tags']);
    Route::get('/users', ['uses' => 'AdminController@users', 'as' => 'admin.users']);
    Route::get('/pages', ['uses' => 'AdminController@pages', 'as' => 'admin.pages']);
    Route::get('/categories', ['uses' => 'AdminController@categories', 'as' => 'admin.categories']);
    Route::get('/images', ['uses' => 'ImageController@images', 'as' => 'admin.images']);
    Route::get('/files', ['uses' => 'FileController@files', 'as' => 'admin.files']);

    /**
     * comment
     */
    Route::post('/comment/{comment}/restore', ['uses' => 'CommentController@restore', 'as' => 'comment.restore']);

    /***
     * post
     */

    Route::post('/post/{post}/restore', ['uses' => 'PostController@restore', 'as' => 'post.restore']);
    Route::get('/post/{slug}/preview', ['uses' => 'PostController@preview', 'as' => 'post.preview']);
    Route::post('/post/{post}/publish', ['uses' => 'PostController@publish', 'as' => 'post.publish']);

    /**
     * tag
     */
    Route::delete('/tag/{tag}', ['uses' => 'TagController@destroy', 'as' => 'tag.destroy']);
    Route::post('/tag', ['uses' => 'TagController@store', 'as' => 'tag.store']);

    /**
     * admin resource
     */
    Route::resource('post', 'PostController', ['except' => ['show', 'index']]);
    Route::resource('category', 'CategoryController', ['except' => ['index', 'show', 'create']]);
    Route::resource('page', 'PageController', ['except' => ['show', 'index']]);

});

/*
 * must last
 */
Route::get('/{name}', ['uses' => 'PageController@show', 'as' => 'page.show']);