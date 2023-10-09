<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
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

Route::get('/', function () {return view('welcome');})->name('welcome');
Route::get('/prueba', function () {return view('prueba');})->name('prueba');

Route::get('/login-google', function () {
    return Socialite::driver('google')->redirect();
})->name('login-google');
 
Route::get('/google-callback', function () {
    $user = Socialite::driver('google')->user();
 
    $validate = User::where('external_id', $user->id)->where('external_auth', 'google')->first();
    if ($validate) {
        dd($user);
        Auth::login($user);
    }else{
        $userNew=User::create([
            'name' => $user->name,
            'email' => $user->email,
            'avatar' => $user->avatar,
            'external_id' => $user->id,
            'external_auth' => 'google'
        ]);
        Auth::login($userNew);
    }

    return redirect(route('home'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
