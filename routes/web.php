<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;
use App\Http\Controllers\PostController;

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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/', function() {
    return view('user');
})->name('user');

Route::get('/website', function() {
    return view('website');
})->name('website');

Route::get('/Assem', function() {
    return view('Assem');
})->name('Assem');

Route::get('post/add', function(){
    DB::table('post')->insert([
        'title' => 'SDU',
        'body' => 'Suleyman Demirel University (SDU)'
    ]);
   
});
Route::get('post', [PostController::class, 'index']);
Route::get('post/create',function(){
    return view('post.create');
});

Route::post('post/create',[PostController::class, 'store'])->name('add-post');
Route::get('post/{id}', [PostController::class, 'get_post']);

Route::view('/upload','upload');
Route::post('upload',[UploadController::class,'index']);

Route::get('mail/send','App\Http\Controllers\MailController@send');







