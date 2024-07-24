<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\ProductController;
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
Route::get('/post', function () {
    //truy vấn lấy tất
    $data = Post::all()->toArray();
    $data = Post::query()->get();
    //where
    $data = Post::query()->where('id', '>=', '1')->get();
    //thêm
    $post = new Post();
    $post->title = "Bai viet so 2";
    $post->content = "Noi dung bai viet so 2";
    $post->save();
    //sửa
    $post = Post::query()->find(2);
    $post->title = "Bai viet so 3";
    $post->content = "Noi dung bai viet so 3";
    $post->save();
    //xóa
    $post = Post::query()->find(2)->delete();
    dd($data);
    //return view('welcome');
});

Route::prefix('products')->name('product.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/create', [ProductController::class, 'create'])->name('create');
    Route::post('/store', [ProductController::class, 'store'])->name('createPost');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [ProductController::class, 'update'])->name('editPost');
    Route::get('/destroy/{id}', [ProductController::class, 'destroy'])->name('destroy');
});
Route::prefix('category')->name('category.')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('/create', [CategoryController::class, 'create'])->name('create');
    Route::post('/store', [CategoryController::class, 'createPost'])->name('createPost');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [CategoryController::class, 'update'])->name('editPost');
    Route::get('/destroy/{id}', [CategoryController::class, 'destroy'])->name('destroy');
});