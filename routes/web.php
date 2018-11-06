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

/* 
Route::get('/hello', function () {
    return "<h1>Hello World!!!</h1>";
}); 

Route::get('/Users/{id}/{name}',function($id , $name){
    return 'This is user '.$name.' with the id '.$id;
});

Route::get('/about',function(){
    return view('pages.about');
});

*/

Route::get('/', 'PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/service','PagesController@service');

Route::resource('posts','PostsController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

//Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('/page', function () {
    return view('page',
        [
            'title' => "Page 2 - A little about the Author",
             'author' => json_encode([
                    "name" => "Fisayo Afolayan",
                    "role" => "Software Enginner",
                    "code" => "Always keeping it clean"
            ])
        ]
    );
});

// Route::get('/{any}', function(){
//     return view('vueapp');
// })->where('any', '.*');

Route::get('/{any}', 'HomeController@index')->where('any', '.*');
