<?php

use Illuminate\Support\Facades\Route;
use App\Book;
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
    $book = Book::find(1);
    Debugbar:: info($book);
    return view('welcome');
});

// Route :: get( 'book/{id}' ,  'BookController@show' );
 Route :: resource ('book' ,'BookController');
 Route::post ( 'book/create' , 'BookController@store')  ->name('post.book.store');
