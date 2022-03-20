<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', 'App\Http\Controllers\RootController');

Route::get('admin/test', 'App\Http\Controllers\Admin\Test\IndexController')->name('admin.test.index');
Route::get('admin/test/create', 'App\Http\Controllers\Admin\Test\CreateController')->name('admin.test.create');
Route::post('admin/test', 'App\Http\Controllers\Admin\Test\StoreController')->name('admin.test.store');
Route::get('admin/test/{test}', 'App\Http\Controllers\Admin\Test\ShowController')->name('admin.test.show');
Route::get('admin/test/{test}/edit', 'App\Http\Controllers\Admin\Test\EditController')->name('admin.test.edit');
Route::patch('admin/test/{test}', 'App\Http\Controllers\Admin\Test\UpdateController')->name('admin.test.update');
Route::delete('admin/test/{test}', 'App\Http\Controllers\Admin\Test\DeleteController')->name('admin.test.delete');

Route::get('admin/task', 'App\Http\Controllers\Admin\Task\IndexController')->name('admin.task.index');
Route::get('admin/task/create', 'App\Http\Controllers\Admin\Task\CreateController')->name('admin.task.create');
Route::post('admin/task', 'App\Http\Controllers\Admin\Task\StoreController')->name('admin.task.store');
Route::get('admin/task/{task}', 'App\Http\Controllers\Admin\Task\ShowController')->name('admin.task.show');
Route::get('admin/task/{task}/edit', 'App\Http\Controllers\Admin\Task\EditController')->name('admin.task.edit');
Route::patch('admin/task/{task}', 'App\Http\Controllers\Admin\Task\UpdateController')->name('admin.task.update');
Route::delete('admin/task/{task}', 'App\Http\Controllers\Admin\Task\DeleteController')->name('admin.task.delete');


Route::get('admin/session', 'App\Http\Controllers\Admin\Session\IndexController')->name('admin.session.index');
Route::get('admin/session/{session}', 'App\Http\Controllers\Admin\Session\ShowController')->name('admin.session.show');

