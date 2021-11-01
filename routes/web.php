<?php

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
Route::middleware('checkLogin')->group(function () {


    Route::get('/home', function () {
        return view('welcome');
    });
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
});



Route::get('/login', function () {

    return view('login');
})->name('showFormLogin');

Route::post('/login', function (\Illuminate\Http\Request $request) {
    $username = $request->username;
    $password = $request->password;

    if ($username == 'admin' && $password == '123456') {
        session()->push('isLogin', true);
        return redirect()->route('users.index');
    } else {
        return redirect('login');
    }
});
