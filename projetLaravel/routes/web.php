<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\tableauBordController;
use App\Http\Controllers\public\utilisateurController;

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

// Route::get('/', [tableauBordController::class, "index"])->name("admin.tableauBord");
Route::get('/', [utilisateurController::class, "utilisateur"])->name("admin.utilisateur");
//  Route::get('/utilisateur', [tableauBordController::class, "utilisateur"])->name("admin.list_utilisateur");





