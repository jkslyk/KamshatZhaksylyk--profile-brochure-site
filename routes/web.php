<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\UploadController;
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
    return view('welcome');
});

Route::get('/profile', function() {
    return view('profile');
})->name('profile');

Route::get('/about', function() {
    return view('about');
})->name('about');

Route::get('/contact', function() {
    return view('contact');
})->name('contact');

Route::get('post/create', function() {
    DB::table('post')->insert([
        'title' => 'webpage',
        'body' => 'post model'
    ]);
});

Route::get('post', function() {
    $post = Post::find(1);
    return $post;
});

Route::get('blog/index', [BlogController::class, 'index']);

Route::get('blog/create', function() {
    return view('blog.create');
});

Route::post('blog/create', [BlogController::class, 'store'])->name('add-blog');

Route::get('create/post/{id}', [BlogController::class, 'get_user']);

Route::view('/upload', 'upload');

Route::post('upload', [UploadController::class,'index']);

Route::get('mail/send','App\Http\Controllers\MailController@send');

Route::get('/profile/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('home');
});

Route::get('/about/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('labout');
});

Route::get('/contact/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('lcontact');
});