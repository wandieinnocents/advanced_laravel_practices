<?php
namespace App\Http\Controllers;

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
    // dd("adfaf");
    return view('welcome');
});


Route::get('posts', [PostController::class, 'index'])->name('posts.index');
Route::delete('posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::get('posts/restore/{id}', [PostController::class, 'restore'])->name('posts.restore');
Route::get('posts/restore-all', [PostController::class, 'restoreAll'])->name('posts.restoreAll');
// force delete/parmanently delete
Route::delete('posts/force-delete/{id}', [PostController::class, 'forceDelete'])->name('posts.force-delete');
// filter posts by date range
Route::get('/filter_posts_by_date', [PostController::class, 'filter_posts_by_date'])->name('filter_posts_by_date');
// multiple rows
Route::get('/multiple_rows/create', [MultipleRowController::class, 'create'])->name('multiple_rows.create');
Route::post('/multiple_rows/store', [MultipleRowController::class, 'store'])->name('multiple_rows.store');




// post reports
Route::get('/posts_report', [PostsReportController::class, 'generatePdf'])->name('print_posts_pdf');
// print report by date range
Route::get('/print_posts_report_by_date', [PostsReportController::class, 'print_posts_report_by_date_range'])->name('print_posts_report_by_date');

// multi step product form

Route::get('products', [ProductController::class,'index'])->name('products.index');
  
Route::get('products/create-step-one', [ProductController::class,'createStepOne'])->name('products.create.step.one');

Route::post('products/create-step-one', [ProductController::class,'postCreateStepOne'])->name('products.create.step.one.post');

Route::get('products/create-step-two', [ProductController::class,'createStepTwo'])->name('products.create.step.two');

Route::post('products/create-step-two', [ProductController::class,'postCreateStepTwo'])->name('products.create.step.two.post');

Route::get('products/create-step-three', [ProductController::class,'createStepThree'])->name('products.create.step.three');

Route::post('products/create-step-three', [ProductController::class,'postCreateStepThree'])->name('products.create.step.three.post');



// end multi step products form