<?php
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware;
use App\Http\Middleware\EnsureTokenIsValid;
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

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('/test',TestController::class);


// returns the home page with all test
Route::get('/', TestController::class .'@index')->name('test.index');
// returns the form for adding a id
Route::get('/test/create', TestController::class . '@create')->name('test.create');
// adds a id to the database
Route::post('/test', TestController::class .'@store')->name('test.store')->middleware('EnsureToken');
// returns a page that shows a full id
Route::get('/test/{id}', TestController::class .'@show')->name('test.show');
// returns the form for editing a id
Route::get('/test/{id}/edit', TestController::class .'@edit')->name('test.edit');
// updates a id
Route::put('/test/{id}', TestController::class .'@update')->name('test.update');
// deletes a id
Route::delete('/test/{id}', TestController::class .'@destroy')->name('test.destroy');