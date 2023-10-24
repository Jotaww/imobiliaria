<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\GoogleController;
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


Route::get('/', [SiteController::class, 'viewHome']);
Route::get('/imovel/{id}', [SiteController::class, 'viewProperty']);
Route::post('/imovel/{id}', [SiteController::class, 'registerInfos']);
Route::get('/catalogo/casa', [SiteController::class, 'viewCatalog'])->name('catalogo');

Route::group(['middleware' => ['ceo']], function () {
    Route::get('/ceo', [AdminController::class, 'viewCeo']);
});

Route::group(['middleware' => ['admin']], function () {
    Route::get('/lista/usuario', [AdminController::class, 'viewUserList']);
    Route::get('/registrar/usuario', [AdminController::class, 'viewUserCreate']);
    Route::post('/registrar/usuario', [AdminController::class, 'userCreate']);
    Route::get('/editar/usuario/{id}', [AdminController::class, 'viewUserEdit']);
    Route::put('/editar/usuario/{id}', [AdminController::class, 'userEdit']);
    Route::put('/atualizar/senha/{id}', [AdminController::class, 'userEditPassword']);
    Route::delete('/deletar/usuario/{id}', [AdminController::class, 'userDelete']);

    Route::get('/lista/imovel', [AdminController::class, 'viewPropertiesList']);
    Route::get('/registrar/imovel', [AdminController::class, 'viewCreateProperty']);
    Route::post('/registrar/imovel', [AdminController::class, 'createProperty']);
    Route::get('/editar/imovel/{id}', [AdminController::class, 'viewEditProperty']);
    Route::put('/editar/imovel/{id}', [AdminController::class, 'editProperty']);
    Route::delete('/deletar/imovel/{id}', [AdminController::class, 'deleteProperty']);
});

Route::group(['middleware' => ['commercial']], function () {
    Route::get('/lista/cliente', [AdminController::class, 'viewClientList']);
    Route::get('/registrar/cliente', [AdminController::class, 'viewClientCreate']);
    Route::post('/registrar/cliente', [AdminController::class, 'clientCreate']);
    Route::get('/editar/cliente/{id}', [AdminController::class, 'viewclientEdit']);
    Route::put('/editar/cliente/{id}', [AdminController::class, 'clientEdit']);
    Route::delete('/deletar/cliente/{id}', [AdminController::class, 'clientDelete']);

    Route::get('/registrar/venda', [AdminController::class, 'viewRegisterSale']);
    Route::post('/registrar/venda/{clientId}/{propertyId}', [AdminController::class, 'registerSale']);

    Route::get('/lista/pendente', [AdminController::class, 'viewPendingList']);
    Route::get('/atualizar/pendente/{pendingId}', [AdminController::class, 'updatePending']);
    Route::delete('/deletar/pendente/{id}', [AdminController::class, 'clientPending']);
    
});

Route::group(['middleware' => ['financial']], function () {
    Route::get('/lista/venda', [AdminController::class, 'viewSaleList']);
    Route::get('/moderar/venda/{clientId}/{propertyId}/{saleId}', [AdminController::class, 'moderateSale']);
    Route::post('/confirmar/venda/{clientId}/{propertyId}/{saleId}', [AdminController::class, 'confirmSale']);
    Route::delete('/deletar/venda/{id}', [AdminController::class, 'deleteSale']);
});

/* Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); */

require __DIR__.'/auth.php';
