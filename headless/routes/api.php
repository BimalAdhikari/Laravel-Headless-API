<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtappeController;

Route::get(uri: '/etappes', action: [EtappeController::class, 'index']);
Route::get(uri: '/etappes/{etappe}', action: [EtappeController::class, 'show']);