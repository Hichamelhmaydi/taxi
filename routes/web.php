<?php

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

Route::get('/', function () {
    return view('welcome');
});
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
// Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/chauffeur/dashboard', [ChauffeurController::class, 'index'])
//     ->name('chauffeur.dashboard')
//     ->middleware('role:chauffeur');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // المسار للمستخدمين العاديين (الركاب)
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    // المسار للسائقين
    Route::get('/dashboard', [ChauffeurController::class, 'index'])
        ->name('chauffeur.dashboard')
        ->middleware('role:chauffeur');  // التحقق من دور السائق
});
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth:sanctum', 'verified'])->name('dashboard');
// Route::get('/dashboard', function () {
//     return view('dashboard');    