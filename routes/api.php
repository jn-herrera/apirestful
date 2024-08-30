<?php

use App\Http\Controllers\buyer\BuyerController;
use App\Http\Controllers\category\CategoryController;
use App\Http\Controllers\product\ProductController;
use App\Http\Controllers\seller\SellerController;
use App\Http\Controllers\transaction\TransactionController;
use App\Http\Controllers\user\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResource('buyers', BuyerController::class)->only(['index', 'show']);
Route::apiResource('categories', CategoryController::class)->except(['create', 'update']);;
Route::apiResource('products', ProductController::class)->only(['index', 'show']);
Route::apiResource('transactions', TransactionController::class)->only(['index', 'show']);
Route::apiResource('sellers', SellerController::class)->only(['index', 'show']);
Route::apiResource('users', UserController::class)->except(['create', 'update']);;
