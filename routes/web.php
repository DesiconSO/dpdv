<?php

use App\Http\Controllers\BillPayController;
use App\Http\Controllers\BillReciveController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\FeedBackController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Dashboard;
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

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::get('/', Dashboard::class)->name('dashboard');
    Route::get('discount/export', [DiscountController::class, 'export'])->name('discount.export');
    Route::post('discount/import', [DiscountController::class, 'import'])->name('discount.import');

    Route::resources(
        [
            'proposal' => ProposalController::class,
            'product' => ProductController::class,
            'discount' => DiscountController::class,
            'feedback' => FeedBackController::class,
        ]
    );
});

Route::group(['prefix' => 'dashboard', 'middleware' => ['role:admin|seller']], function () {
    Route::resource('/client', ClientController::class, ['except' => ['index', 'create', 'store']]);
});

Route::resource('/client', ClientController::class, ['only' => ['index', 'create', 'store']]);

Route::group(['prefix' => 'dashboard', 'middleware' => ['role:admin']], function () {
    Route::resource('user', UserController::class);
    Route::resources(
        [
            'billPay' => BillPayController::class,
            'billRecive' => BillReciveController::class,
        ]
    );
});

Route::get('/teste', function () {
});

require __DIR__ . '/auth.php';
