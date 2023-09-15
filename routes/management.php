<?php

use App\Http\Controllers\ChartController;
use App\Http\Controllers\GroothandelController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ProductController;
use App\Http\Livewire\Admin\Orderspagenas\Orders;
use App\Http\Livewire\Admin\Orderspagenas\Ordersdetails;

use Illuminate\Support\Facades\Route;
Route::middleware(['auth', 'user-role:management'])->group(function () {
    Route::get('/dashboard/product-sales/', [ChartController::class, 'product_sales'])->name('product_sales');
    Route::get('/dashboard/general-sales/', [ChartController::class, 'general_sales'])->name('general_sales');
    Route::get('/dashboard/register-sales/', [ChartController::class, 'sales_per_register'])->name('sales_per_register');
});