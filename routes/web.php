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

Route::get('/', function () {
    return view('contacts');
    // return view('contacts', [
    //     'contacts' => \App\Models\User::all(),
    // ]);
});
// Route::get('/contacts', function () {
//     return view('contacts-partial', [
//         // 'contacts' => \App\Models\User::all(),
//         // 'contacts' => \App\Models\User::search('Dorcas')->get(),
//         'contacts' => \App\Models\User::search(
//             request('search')
//         )->get(),
//     ]);
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');