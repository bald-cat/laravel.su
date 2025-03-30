<?php

use App\Http\Controllers\GithubWebHookController;
use App\Http\Controllers\WebHookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/webhook/telegram', [WebHookController::class, 'telegram'])->name('webhook.telegram');

Route::post('/webhook/github/release', [GithubWebHookController::class, 'release'])->name('webhook.github.release');
