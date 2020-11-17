<?php


use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\PartnersController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\TariffsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [FrontController::class, 'index'])->name('index');
Route::post('/', [FrontController::class, 'sendMailService'])->name('send.form');
Route::get('/service/{slug}', [FrontController::class, 'show'])->name('service.show');
Route::post('/service/{id}', [FrontController::class, 'sendMailTariffs'])->name('send.form.tariffs');


Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function () {
    Route::get('', [AdminController::class, 'index']);
    Route::get('/main', [MainController::class, 'edit'])->name('main.form');
    Route::put('/main', [MainController::class, 'update'])->name('main.form.update');
    Route::get('/about', [AboutController::class, 'edit'])->name('about.edit');
    Route::put('/about', [AboutController::class, 'update'])->name('about.update');
    Route::get('/contact', [ContactController::class, 'edit'])->name('contact.edit');
    Route::put('/contact', [ContactController::class, 'update'])->name('contact.update');


    Route::resource('/tariffs', TariffsController::class);
    Route::resource('/services', ServicesController::class);
    Route::resource('/users', UsersController::class);
    Route::resource('/partners', PartnersController::class);
});


Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

