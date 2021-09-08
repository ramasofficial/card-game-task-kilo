<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\DeckController;
use App\Http\Controllers\DrawCardController;
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

Route::get('/decks', [DeckController::class, 'index']);
Route::patch('/decks/{deck}/draw', [DrawCardController::class, 'draw']);


Route::prefix('cards')->group(function () {
    Route::get('/', [CardController::class, 'index']);
    Route::post('/{type}/create', [CardController::class, 'store']);
});
