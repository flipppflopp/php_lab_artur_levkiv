<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//lab 1


Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello-world', function (){
    echo 'Hello world';
});

Route::get('/hello/{name}/{age}', function (string $name, int $age){
    echo "Welcome, $name, you are $age years old!";
});

Route::get('/hello/{name?}/{age?}', function (string $name =
    "Unknown", int $age = null){
        echo "Welcome, $name. ";
        if (is_null($age)) {
            echo "You did not enter the age ";
        } else {
            echo " You are $age years old!";
         }
    });

//Defining prefixes in routing

Route::prefix('hello')->group(function (){
    Route::get('/world', function (){
        echo 'Hello world';
    });
    Route::get('/{name?}/{age?}', function (string $name =
        "Unknown", int $age = null){
            echo "Welcome, $name. ";
            if (is_null($age)) {
                echo "You did not enter the age ";
            } else {
                echo " You are $age years old!";
            }
        });
    });

Route::resource('books', BookController::class);

Route::get('/tasks', 'App\Http\Controllers\TasksController@index');
Route::get('/tasks/store', 'App\Http\Controllers\TasksController@store');


Route::get('products', function () {
    return view('products');
   });

Route::get('about', function () {
    return view('about');
   });

Route::get('geo-info', function () {
    return view('geo-info');
   });

//routes to methods in user controller
Route::get('/users', 'App\Http\Controllers\UserController@index');
Route::get('/users/{userId}', 'App\Http\Controllers\UserController@show');

//The path allows to define delete HTTP method as a GET method!
Route::get('/books/{id}/delete',
'App\Http\Controllers\BookController@destroy');
