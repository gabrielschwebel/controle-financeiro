<?php

use App\Http\Controllers\OrigemEntradaController;
use App\Livewire\Pages\Entrada\CreateEntrada;
use App\Livewire\Pages\Entrada\HomeEntrada;
use App\Livewire\Pages\Entrada\TipoEntrada\CreateTipoEntrada;
use App\Livewire\Pages\Entrada\TipoEntrada\HomeTipoEntrada;
use App\Livewire\Pages\Settings\HomeSettings;
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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');




Route::prefix('entradas')->group(function(){
    Route::get('/', HomeEntrada::class)->name('home-entrada');
    Route::get('/new', CreateEntrada::class)->name('create-entrada');
    
})
->middleware(['auth']);

Route::prefix('settings/origem-entrada')->group(function(){
    Route::get('/', HomeTipoEntrada::class)->name('home-origem-entrada');
    Route::get('/new', CreateTipoEntrada::class)->name('create-origem-entrada');
    Route::post('/', [OrigemEntradaController::class, 'store'])->name('store-origem-entrada');
    
})
->middleware(['auth']);


Route::prefix('settings')->group(function(){
    Route::get('/', HomeSettings::class)->name('home-settings');
})
->middleware(['auth']);

require __DIR__.'/auth.php';
