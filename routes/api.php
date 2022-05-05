<?php

use App\Http\Controllers\WebmentionStorageController;
use App\Http\Middleware\VerifyWebhookSecret;
use Illuminate\Support\Facades\Route;

Route::post('/', WebmentionStorageController::class)->middleware(VerifyWebhookSecret::class);
