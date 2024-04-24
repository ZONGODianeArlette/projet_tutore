<?php

use App\Http\Controllers\private\admin\TableauBordController;
use App\Http\Controllers\private\user\UserTableauBordController;
use App\Http\Controllers\public\AuthController;
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
Route::get('/user-tableau-de-bord', [UserTableauBordController::class, "index"])->name("user.tableauBord");
Route::get('/', [PublicController::class, "index"])->name("public.index");
//  Route::get('/utilisateur', [tableauBordController::class, "utilisateur"])->name("admin.list_utilisateur");

#Auth Controller
Route::get('/inscription', [AuthController::class, 'inscription'])->name('public.inscription');
Route::post('/inscription/action', [AuthController::class, 'inscriptionAction'])->name('public.inscription-action');
Route::get('/connexion', [AuthController::class, 'connexion'])->name('public.connexion');
Route::post('/connexion/action', [AuthController::class, 'connectionAction'])->name('public.connexion-action');
Route::post('/deconnexion', [AuthController::class, 'deconnexion'])->name('deconnexion');
#End Auth Controller



