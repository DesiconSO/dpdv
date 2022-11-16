<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProposalController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::resources(
        [
            'client' => ClientController::class,
            'proposal' => ProposalController::class,
            'product' => ProductController::class,
            'discount' => DiscountController::class,
        ]
    );

    Route::post('/send', [DiscountController::class, 'DiscountList'])->name('discount.list');
});

Route::get('/teste', [ProductController::class, 'teste']);

require __DIR__.'/auth.php';
