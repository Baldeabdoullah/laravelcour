<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
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

Route::get('/', [PostController::class, 'index'])->name('welcome');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts/create', [PostController::class, 'store'])->name('posts.store');

Route::get('/mail', [TestController::class, 'index']);
// Route::get('/register', [PostController::class, 'register']);

Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');

Route::get('/contact', [PostController::class, 'contact'])->name('contact');




// Route::get('/posts', function () {
//     return response()->json([
//         'title' => 'mon super titre',
//         'description' => 'ma super description'
//     ]);
// });

// Route::get('articles', function () {
//     return view('articles');
// });
