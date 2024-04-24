<?php

use App\Http\Controllers\private\admin\TableauBordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\public\PublicController;

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

Route::get('/admin-tableau-de-bord', [TableauBordController::class, "index"])->name("admin.tableauBord");
Route::get('/', [PublicController::class, "index"])->name("public.index");
//  Route::get('/utilisateur', [tableauBordController::class, "utilisateur"])->name("admin.list_utilisateur");





