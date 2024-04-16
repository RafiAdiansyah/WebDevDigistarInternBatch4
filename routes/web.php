<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewInstallController;
use App\Http\Controllers\ModifyController;
use App\Http\Controllers\UserManageController;

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

//Home
Route::get('/', function () {
    return view('landingPage');
});
Route::get('home', [AuthController::class, 'home']);

//Login Route
Route::get('login', [AuthController::class, 'login']);
Route::post('loginAction', [AuthController::class, 'loginAction']);

//Register Route
Route::get('register', [AuthController::class, 'register']);
Route::post('registerAction', [AuthController::class, 'registerAction']);

//Logout Route
Route::get('logoutAction', [AuthController::class, 'logoutAction']);

//New Install Route
Route::get('new_install', [NewInstallController::class, 'index']);
Route::get('new_install/show/{id}', [NewInstallController::class, 'show']);
Route::get('new_install/edit/{id}', [NewInstallController::class, 'edit']);
Route::get('new_install/search', [NewInstallController::class, 'search']);
Route::put('new_install/update/{id}', [NewInstallController::class, 'update']);
Route::delete('new_install/delete/{id}', [NewInstallController::class, 'destroy']);
Route::get('inputnewinstall', [AuthController::class, 'inputnewinstall']);
Route::post('inputnewinstall_action', [AuthController::class, 'inputnewinstall_action']);

//Modify Route
Route::get('modify', [ModifyController::class, 'index']);
Route::get('modify/show/{id}', [ModifyController::class, 'show']);
Route::get('modify/edit/{id}', [ModifyController::class, 'edit']);
Route::get('modify/search', [ModifyController::class, 'search']);
Route::put('modify/update/{id}', [NewInstallController::class, 'update']);
Route::delete('modify/delete/{id}', [ModifyController::class, 'destroy']);
Route::get('inputmodify', [AuthController::class, 'inputmodify']);
Route::post('input_modify_action', [AuthController::class, 'input_modify_action']);

//Suspend-Resume Route
Route::get('suspend_resume', [AuthController::class, 'suspend_resume']);

//Validation Route
Route::get('validation', [AuthController::class, 'validation']);

//Disconnect Route
Route::get('disconnect', [AuthController::class, 'disconnect']);

//Assurance Route
Route::get('assurance', [AuthController::class, 'assurance']);

//Service ID Route
Route::get('service_id', [AuthController::class, 'service_id']);

//Data Teknis Route
Route::get('dataTeknis', [AuthController::class, 'dataTeknis']);

//Project Route
Route::get('project', [AuthController::class, 'project']);

//User Management Route
Route::get('User', [UserManageController::class, 'index']);
Route::get('User/show/{id}', [UserManageController::class, 'show']);