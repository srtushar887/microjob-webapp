<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::get('/', [Controllers\FrontendController::class,'index'])->name('front');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('/user-custom-register', [Controllers\Auth\CustomLoginController::class, 'user_custom_register'])->name('user.custom.register');
Route::post('/user-custom-login', [Controllers\Auth\CustomLoginController::class, 'user_custom_login'])->name('user.login.submit');

Route::group(['middleware' => ['auth']], function () {
    Route::prefix('user')->group(function () {
        Route::get('/dashboard', [Controllers\User\UserController::class, 'index'])->name('user.dashboard');

        //user post job
        Route::get('/post-job', [Controllers\User\UserJobController::class, 'post_job'])->name('user.post.job');
        Route::post('/post-job-get-all-main-cat', [Controllers\User\UserJobController::class, 'post_job_get_all_main_cat'])->name('user.post.job.get.all.main.category');
        Route::post('/post-job-get-all-sub-cat', [Controllers\User\UserJobController::class, 'post_job_get_all_sub_cat'])->name('user.post.job.get.all.sub.category');
        Route::post('/post-job-get-sub-cat-price', [Controllers\User\UserJobController::class, 'post_job_get_sub_cat_price'])->name('user.post.job.get.sub.category.price');
        Route::post('/post-job-save', [Controllers\User\UserJobController::class, 'post_job_save'])->name('user.post.job.save');

        //user find job
        Route::get('/find-job', [Controllers\User\UserJobController::class, 'find_job'])->name('user.find.job');
        Route::post('/find-job-get-all', [Controllers\User\UserJobController::class, 'find_job_get_all'])->name('user.find.job.get.all');
        Route::get('/find-job-get-all', [Controllers\User\UserJobController::class, 'find_job_get_all_next']);
        Route::get('/job-details/{id}', [Controllers\User\UserJobController::class, 'job_details'])->name('user.find.job.details');

        //apply job
        Route::get('/job-apply/{id}', [Controllers\User\UserJobController::class, 'job_apply'])->name('user.job.apply');
        Route::post('/job-apply-submit', [Controllers\User\UserJobController::class, 'job_apply_submit'])->name('user.job.apply.submit');

        //apply members
        Route::get('/job-apply-members/{id}', [Controllers\User\UserJobController::class, 'job_apply_members'])->name('user.job.apply.memebers');
        Route::post('/job-apply-members-change-status', [Controllers\User\UserJobController::class, 'job_apply_members_change_status'])->name('user.job.apply.memebers.change.status');

        //deposit
        Route::get('/deposit', [Controllers\User\UserDepositController::class, 'deposit'])->name('user.deposit');
        Route::post('/deposit-save', [Controllers\User\UserDepositController::class, 'deposit_save'])->name('user.deposit.save');
    });
});
// ===================  admin section

Route::prefix('admin')->group(function () {
    Route::get('/login', [Controllers\Auth\AdminLoginController::class,'showLoginform'])->name('admin.login');
    Route::post('/login', [Controllers\Auth\AdminLoginController::class,'login'])->name('admin.login.submit');
    Route::get('/logout', [Controllers\Auth\AdminLoginController::class,'logout'])->name('admin.logout');
});


Route::group(['middleware' => ['auth:admin']], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [Controllers\Admin\AdminController::class, 'index'])->name('admin.dashboard');

        //general settings
        Route::get('/general-settings', [Controllers\Admin\AdminController::class, 'general_settings'])->name('admin.general.settings');
        Route::post('/general-settings-save', [Controllers\Admin\AdminController::class, 'general_settings_save'])->name('admin.general.settings.save');

        //region & country
        Route::get('/region-country', [Controllers\Admin\AdminRegionController::class, 'region_country'])->name('admin.region.country');
        Route::get('/region-country-get', [Controllers\Admin\AdminRegionController::class, 'region_country_get'])->name('admin.region.country.get');
        Route::post('/region-country-get', [Controllers\Admin\AdminRegionController::class, 'region_country_get_all'])->name('admin.region.country.get.all');
        Route::post('/country-get', [Controllers\Admin\AdminRegionController::class, 'country_get_all'])->name('admin.country.get.all');
        Route::post('/main-category-by-country', [Controllers\Admin\AdminRegionController::class, 'main_category_by_country'])->name('admin.main.category.by.country');


        //main category
        Route::get('/main-category', [Controllers\Admin\AdminCategoryController::class, 'main_category'])->name('admin.job.main.category');
        Route::get('/main-category-get', [Controllers\Admin\AdminCategoryController::class, 'main_category_get'])->name('admin.job.main.category.get');
        Route::post('/main-category-save', [Controllers\Admin\AdminCategoryController::class, 'main_category_save'])->name('admin.job.main.category.save');
        Route::post('/main-category-single', [Controllers\Admin\AdminCategoryController::class, 'main_category_single'])->name('admin.job.main.category.single');
        Route::post('/main-category-update', [Controllers\Admin\AdminCategoryController::class, 'main_category_update'])->name('admin.job.main.category.update');
        Route::post('/main-category-delete', [Controllers\Admin\AdminCategoryController::class, 'main_category_delete'])->name('admin.job.main.category.delete');

        //sub category
        Route::get('/sub-category', [Controllers\Admin\AdminCategoryController::class, 'sub_category'])->name('admin.job.sub.category');
        Route::post('/sub-category-get-main-cat', [Controllers\Admin\AdminCategoryController::class, 'sub_category_get_maincat'])->name('admin.job.sub.category.getmaincat');
        Route::get('/sub-category-get', [Controllers\Admin\AdminCategoryController::class, 'sub_category_get'])->name('admin.job.sub.category.get');
        Route::post('/sub-category-save', [Controllers\Admin\AdminCategoryController::class, 'sub_category_save'])->name('admin.job.sub.category.save');
        Route::post('/sub-category-single', [Controllers\Admin\AdminCategoryController::class, 'sub_category_single'])->name('admin.job.sub.category.single');
        Route::post('/sub-category-update', [Controllers\Admin\AdminCategoryController::class, 'sub_category_update'])->name('admin.job.sub.category.update');
        Route::post('/sub-category-delete', [Controllers\Admin\AdminCategoryController::class, 'sub_category_delete'])->name('admin.job.sub.category.delete');



    });
});
