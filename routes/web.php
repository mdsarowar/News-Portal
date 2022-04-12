<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\SubCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\frontviewController;

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
    return view('frontend.home.home');
});
Route::get('/category_page',[frontviewController::class,'categoryPage'])->name('category_page');
Route::get('/contact_page',[frontviewController::class,'contactPage'])->name('contact_page');
Route::post('/contact_post',[frontviewController::class,'contactPost'])->name('contact_post');


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {return view('admin.home.home');})->name('dashboard');

    //Category module
    Route::get('/add_category',[CategoryController::class,'addCategory'])->name('add_category');
    Route::post('/new_category',[CategoryController::class,'newCategory'])->name('new_category');
    Route::get('/manage_category',[CategoryController::class,'manageCategory'])->name('manage_category');
    Route::get('/category_status_change/{id}',[CategoryController::class,'categoryStatusChange'])->name('category_status_change');
    Route::get('/edit_category/{id}',[CategoryController::class,'editCategory'])->name('edit_category');
    Route::post('/update_category/{id}',[CategoryController::class,'updateCategory'])->name('update_category');
    Route::get('/delete_category/{id}',[CategoryController::class,'deleteCategory'])->name('delete_category');

//sub Category module
    Route::get('/add_sub_category',[SubCategoryController::class,'addSubCategory'])->name('add_sub_category');
    Route::post('/new_sub_category',[SubCategoryController::class,'newSubCategory'])->name('new_sub_category');
    Route::get('/manage_sub_category',[SubCategoryController::class,'manageSubCategory'])->name('manage_sub_category');
    Route::get('/sub_category_status_change/{id}',[SubCategoryController::class,'SubcategoryStatusChange'])->name('sub_category_status_change');
    Route::get('/edit_sub_category/{id}',[SubCategoryController::class,'editSubCategory'])->name('edit_sub_category');
    Route::post('/update_sub_category/{id}',[SubCategoryController::class,'updateSubCategory'])->name('update_sub_category');
    Route::get('/delete_sub_category/{id}',[SubCategoryController::class,'deleteSubCategory'])->name('delete_sub_category');

//News module
    Route::get('/add_news',[NewsController::class,'addNews'])->name('add_news');
    Route::post('/new_news',[NewsController::class,'newNews'])->name('new_news');
    Route::get('/manage_news',[NewsController::class,'manageNews'])->name('manage_news');
    Route::get('/news_status_change/{id}',[NewsController::class,'NewsStatusChange'])->name('news_status_change');
    Route::get('/edit_news/{id}',[NewsController::class,'editNews'])->name('edit_news');
    Route::post('/update_news/{id}',[NewsController::class,'updateNews'])->name('update_news');
    Route::get('/delete_news/{id}',[NewsController::class,'deleteNews'])->name('delete_news');

});
