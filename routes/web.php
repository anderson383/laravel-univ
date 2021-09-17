<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidosController;



Route::resource('/pedidos', PedidosController::class);

