<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $background = App\Post::where('slug', '=', 'background_header')->firstOrFail();
    // $infos = App\Post::where('slug', '=', 'infos')->firstOrFail();
    $category = App\Category::whereName('websites')->firstOrFail();
    $websites = App\Post::where('category_id',$category->id)->get();
    return view('index', compact('background', 'websites'));
})->name('home');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
