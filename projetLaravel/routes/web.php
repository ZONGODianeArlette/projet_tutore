<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\tableauBordController;

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

Route::get('/', [tableauBordController::class, "index"])->name("admin.tableauBord");
Route::get('/mot', [tableauBordController::class, "mot"])->name("admin.list_mot");
Route::get('/utilisateur', [tableauBordController::class, "utilisateur"])->name("admin.list_utilisateur");





