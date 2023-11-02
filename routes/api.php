<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\API\UUIDController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'uuid'], function () {
    Route::get('list', [UUIDController::class, 'list'])->name('api.uuid.list');
    Route::post('generate', [UUIDController::class, 'generate'])->name('api.uuid.generate');
    Route::get('retrieve/{id}', [UUIDController::class, 'retrieve'])->name('api.uuid.retrieve');
});