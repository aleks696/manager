<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Http\Controllers\PasswordController;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login',[Controller::class, 'login'])->name('login');
Route::post('/login',[Controller::class, 'loginPost'])->name('login.post');
Route::get('/registration', [Controller::class, 'registration'])->name('registration');
Route::post('/registration', [Controller::class, 'registrationPost'])->name('registration.post');
Route::get('/logout',[Controller::class, 'logout'])->name('logout');
Route::get('/about', [Controller::class, 'about'])->name('about');
Route::group(['middleware' => 'auth'], function (){
    Route::get('/profile', [Controller::class, 'profile'])->name('profile');
    Route::get('/saved-passwords', [PasswordController::class, 'savedPasswords'])->name('saved-passwords-post');
    Route::get('/generate-password', [PasswordController::class, 'generatePasswordPost'])->name('generate-password-post');
    Route::post('/generate-password', [PasswordController::class, 'generatePassword'])->name('generate-password');
    Route::post('/save-password', [PasswordController::class, 'savePassword'])->name('save-password');
    Route::get('/generated-page', [PasswordController::class, 'generatedPage'])->name('generated-page');
    Route::delete('/delete-password/{id}', [PasswordController::class, 'deletePassword'])->name('delete-password');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
