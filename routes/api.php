<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\CommentaireController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/annonces', [AnnonceController::class, 'index']);
Route::post('/addannonces', [AnnonceController::class, 'create']);
Route::put('/updateannonces/{id}', [AnnonceController::class, 'update']);
Route::delete('/deleteannonces/{id}', [AnnonceController::class, 'delete']);
Route::get('/showannonces/{id}', [AnnonceController::class, 'show']);
Route::get('/searchannonces/{titre}', [AnnonceController::class, 'search']);

Route::get('/commentaires', [CommentaireController::class, 'index']);
Route::post('/addcommentaires', [CommentaireController::class, 'create']);
Route::put('/updatecommentaires/{id}', [CommentaireController::class, 'update']);
Route::delete('/deletecommentaires/{id}', [CommentaireController::class, 'delete']);
Route::get('/showcommentaires/{id}', [CommentaireController::class, 'show']);


