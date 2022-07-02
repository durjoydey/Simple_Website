<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SystemuserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostaddController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ApplyController;

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
Route::get('/admin/admindash', [PagesController::class,'adminDash'])->name('adminDash')->middleware('ValidUser');

//postadd
Route::get('/admin/postadd',[PostaddController::class,'postadd'])->name('admin.postadd');
Route::post('/admin/postadd',[PostaddController::class,'postaddsubmit'])->name('admin.postadd');

Route::get('/admin/postaddlist',[PostaddController::class,'list'])->name('admin.postaddlist');
Route::get('/admin/postaddedit/{id}/{title}',[PostaddController::class,'edit']);
Route::post('/admin/postaddedit',[PostaddController::class,'editSubmit'])->name('admin.postaddedit');
Route::get('/admin/delete/{id}/{title}',[PostaddController::class,'delete']);

//Career
Route::get('/career/jobadd',[CareerController::class,'jobadd'])->name('career.jobadd');
Route::post('/career/jobadd',[CareerController::class,'jobaddsubmit'])->name('career.jobadd');
Route::get('/career/joblist',[CareerController::class,'list'])->name('career.joblist');
Route::get('/career/jobedit/{id}/{title}',[CareerController::class,'edit']);
Route::post('/career/jobedit',[CareerController::class,'editSubmit'])->name('career.jobedit');
Route::get('/career/delete/{id}/{title}',[CareerController::class,'delete']);

//Apply
Route::get('/career/apply',[ApplyController::class,'apply'])->name('career.apply');
Route::post('/career/apply',[ApplyController::class,'applysubmit'])->name('career.apply');

Route::get('/career/applylist',[ApplyController::class,'list'])->name('career.applylist');
