<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SystemuserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;

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

Route::get('/', [PagesController::class,'home'])->name('home');


//sendmessage
Route::get('/systemuser/message',[SystemuserController::class,'create'])->name('systemuser.message');
Route::post('/systemuser/message',[SystemuserController::class,'createSubmit'])->name('systemuser.message');
Route::get('/systemuser/response',[SystemuserController::class,'response'])->name('systemuser.response');

Route::get('/aboutus',[PagesController::class,'aboutus'])->name('aboutus');
Route::get('/workbased',[PagesController::class,'workbased'])->name('workbased');
Route::get('/ourwork',[PagesController::class,'ourwork'])->name('ourwork');

//login
Route::get('/login',[LoginController::class,'Login'])->name('login');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

//admin dash
Route::get('/admin/admindash', [PagesController::class,'adminDash'])->name('adminDash');

Route::get('/admin/postadd',[PostController::class,'post'])->name('admin.postadd');
Route::post('/admin/postadd',[PostController::class,'postadd'])->name('admin.postadd');

Route::get('/admin/postaddlist',[PostController::class,'list'])->name('admin.postaddlist');
Route::get('/admin/postaddedit/{id}/{title}',[PostController::class,'edit']);
Route::post('/admin/postaddedit',[PostController::class,'editSubmit'])->name('admin.postaddedit');
Route::get('/admin/delete/{id}/{title}',[PostController::class,'delete']);