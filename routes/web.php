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
    //return view('welcome');

    // Configuration
    //echo config('services.braintree.secret');
    //echo Config::get('services.braintree.secret');
});

Route::get('/user/{id}/post/{postId}', function ($id, $postId) {
    echo $id . ' ' . $postId;
});

// Group routing

/*
Route::get('/user/{id?}', function ($id = null) {
    echo $id;
});

Route::get('/account/change-password', function () {

});

Route::get('/account/profile', function () {

});

Route::post('/account/profile', function () {

});
*/

Route::group(['prefix' => 'account'], function () {
    Route::get('change-password', function () {
        echo 'change-password';
    });

    Route::get('profile', function () {
        echo 'profile';
    });

    Route::post('profile', function () {
        //
    });
});

// Name routing

Route::get('/redirect', function () {
    return redirect()->route('landing');
});

Route::get('/landing', function () {
    echo 'landing';
})->name('landing');

// Controller
Route::get('home', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);

// Submit a form
Route::get('contact', [
    'as' => 'contact',
    'uses' => 'HomeController@contact'
]);

Route::post('contact', [
    'as' => 'create',
    'uses' => 'HomeController@create'
]);

// View
Route::get('view/{username}', [
    'as' => 'view',
    'uses' => 'HomeController@view'
]);

// Validation
Route::get('mailing', [
    'as' => 'mailing.index',
    'uses' => 'MailingController@index'
]);

Route::post('mailing', [
    'as' => 'mailing.create',
    'uses' => 'MailingController@create'
]);

// Form request
Route::get('newsletter', [
    'as' => 'newsletter.index',
    'uses' => 'NewsletterController@index'
]);
Route::post('newsletter', [
    'as' => 'newsletter.create',
    'uses' => 'NewsletterController@create'
]);

// Redirection
Route::get('/first', [
    'as' => 'first',
    'uses' => 'HomeController@first'
]);
Route::get('/second', [
    'as' => 'second',
    'uses' => 'HomeController@second'
]);

// Json response
Route::get('/json', [
    'as' => 'json',
    'uses' => 'HomeController@json'
]);

// Send mail
Route::get('/mail', [
    'as' => 'mail',
    'uses' => 'MailController@index'
]);

// Model
// Send mail
Route::get('/seed', function (\Learn\Post $post) {
    $f = \Faker\Factory::create();
    foreach (range(1, 1000) as $i) {
        $post->create([
            'title' => $f->sentence(10),
            'body' => $f->sentence(100),
        ]);
    }
});

// Model
Route::get('/model', [
    'as' => 'model',
    'uses' => 'HomeController@model'
]);

// Create
Route::get('/model/create', [
    'as' => 'model.create',
    'uses' => 'HomeController@modelCreate'
]);
// Update
Route::get('/model/update', [
    'as' => 'model.update',
    'uses' => 'HomeController@modelUpdate'
]);
// Delete
Route::get('/model/delete', [
    'as' => 'model.delete',
    'uses' => 'HomeController@modelDelete'
]);

// Dates
Route::get('/model/get', [
    'as' => 'model.get',
    'uses' => 'HomeController@modelGet'
]);

// User
Route::get('/model/user', [
    'as' => 'model.user',
    'uses' => 'HomeController@modelUser'
]);

// Scopes
Route::get('/model/active', [
    'as' => 'model.active',
    'uses' => 'HomeController@modelActive'
]);

// Model biding
// Scopes
/*
Route::get('/post/{postId}', [
    'as' => 'post.get',
    'uses' => 'PostController@get'
]);
*/
Route::get('/post/{post}', [
    'as' => 'post.get',
    'uses' => 'PostController@get'
]);

// Pagination
Route::get('/pagination', [
    'as' => 'pagination',
    'uses' => 'HomeController@pagination'
]);
