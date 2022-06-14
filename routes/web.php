<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SystemuserController;

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



Route::get('/systemuser/message',[SystemuserController::class,'create'])->name('systemuser.message');
Route::post('/systemuser/message',[SystemuserController::class,'createSubmit'])->name('systemuser.message');
Route::get('/aboutus',[PagesController::class,'aboutus'])->name('aboutus');
Route::get('/workbased',[PagesController::class,'workbased'])->name('workbased');
Route::get('/ourwork',[PagesController::class,'ourwork'])->name('ourwork');
