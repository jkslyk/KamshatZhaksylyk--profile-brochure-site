<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Client;

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

Route::get('client/add', function() {
    DB::table('clients')->insert([
        'name' => 'Kamshat',
        'surname' => 'Zhaksylyk',
        'age' => 18
    ]);
});

Route::get('client', function() {
    $client = Client::find(1);
    return $client;
});
