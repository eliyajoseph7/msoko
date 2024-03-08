<?php

use App\Livewire\Pages\Admin\Client\AdminClients;
use App\Livewire\Pages\Admin\Dashboard\Dashboards;
use App\Livewire\Pages\Admin\Product\AdminProducts;
use App\Livewire\Pages\Admin\User\Users;
use App\Livewire\Pages\Public\About\Abouts;
use App\Livewire\Pages\Public\Home\Home;
use App\Livewire\Pages\Public\Product\AllProducts;
use App\Livewire\Pages\Public\Service\Services;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Home::class)->name('home');
Route::get('/about-us', Abouts::class)->name('about');
Route::get('/products', AllProducts::class)->name('products');
Route::get('/services', Services::class)->name('services');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('dashboard', Dashboards::class)
        ->name('dashboard');

    Route::get('products', AdminProducts::class)
        ->name('admin_products');

    Route::get('clients', AdminClients::class)
        ->name('clients');
    Route::get('users', Users::class)
        ->name('users');
});
// ->middleware(['auth', 'verified']);

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('register', function () {
    return redirect()->route('login');
});
require __DIR__ . '/auth.php';
