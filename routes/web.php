<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Subscribe\CreateController;
use App\Http\Controllers\Subscribe\DestroyController;
use App\Http\Controllers\Subscribe\StoreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware(['auth', 'verified'])
    ->group(function(){

        Route::get('/dashboard', DashboardController::class)->name('dashboard');

        Route::get('user/invoice/{invoice}', function(Request $request, string $invoiceId) {
            return $request->user()->downloadInvoice($invoiceId, [
                'vendor' => 'Your Company',
                'product' => 'Your Product',
                'street' => '123 Example St.',
                'location' => 'Example, NY 12345',
                'phone' => '555-555-5555',
                'email' => 'info@exmple.com',
                'url' => 'https://example.com',
                'vendor-vat' => '123456789',
            ]);
        })->name('invoices');

        Route::prefix('subscribe')
            ->as('subscribe.')
            ->middleware('redirect.subscribed')
            ->group(function(){
                Route::get('create', CreateController::class)->name('create');
                Route::post('store', StoreController::class)->name('store');
                Route::delete('destroy', DestroyController::class)->name('destroy')->withoutMiddleware('redirect.subscribed');
            });

        Route::get('basic', fn() => dd('basic'))->name('basic')->middleware('redirect.not.subscribed');
        Route::get('premium', fn() => dd('premium'))->name('premium')->middleware('redirect.not.premium');

    });



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
