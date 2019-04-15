<?php

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

use App\Notifications\DemoNotification;
use App\User;

Route::get('/', function () {
    $user = User::find(1);
    $user->notify(new DemoNotification());
    dd("Sent");
});
