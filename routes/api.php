<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\MensagemController;
use App\Http\Controllers\API\TopicoController;
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

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get("mensagem", [MensagemController::class, 'index']);
Route::get("topico", [MensagemController::class, 'index']);
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::resource("topico", TopicoController::class)->except("index");
    Route::resource("mensagem", MensagemController::class)->except("index");
});
