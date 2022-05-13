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

Route::get('/cache_clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');


//    header("Cache-Control: no-cache, must-revalidate");
//    header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
//    header("Content-Type: application/xml; charset=utf-8");

});


Route::get('/', [Controllers\FrontendController::class, 'index'])->name('front');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//account active
Route::get('/user-active-account/{link}', [App\Http\Controllers\ActivationController::class, 'user_active_account'])->name('user.activate.account');


Route::post('/user-custom-register', [Controllers\Auth\CustomLoginController::class, 'user_custom_register'])->name('user.custom.register');
Route::post('/user-custom-login', [Controllers\Auth\CustomLoginController::class, 'user_custom_login'])->name('user.login.submit');


//forgot password
Route::get('/forgot-password', [Controllers\ActivationController::class, 'forgot_password'])->name('forgot.password');
Route::post('/forgot-password-submit', [Controllers\ActivationController::class, 'forgot_password_submit'])->name('forgot.password.submit');
Route::get('/forgot-password-verify', [Controllers\ActivationController::class, 'forgot_password_verify_code'])->name('forgot.password.verify.code');
Route::post('/forgot-password-verify-code-check', [Controllers\ActivationController::class, 'forgot_password_verify_code_check'])->name('forgot.password.verify.code.submit');
Route::get('/forgot-password-change-password/{link}', [Controllers\ActivationController::class, 'forgot_password_change_password'])->name('forgot.password.change.pass');
Route::post('/forgot-password-change-password-save', [Controllers\ActivationController::class, 'forgot_password_change_password_save'])->name('forgot.password.change.pass.save');

Route::group(['middleware' => ['auth']], function () {
    Route::prefix('user')->group(function () {
        Route::get('/dashboard', [Controllers\User\UserController::class, 'index'])->name('user.dashboard');

        //user post job
        Route::get('/post-job', [Controllers\User\UserJobController::class, 'post_job'])->name('user.post.job');
        Route::post('/post-job-get-all-main-cat', [Controllers\User\UserJobController::class, 'post_job_get_all_main_cat'])->name('user.post.job.get.all.main.category');
        Route::post('/post-job-get-all-sub-cat', [Controllers\User\UserJobController::class, 'post_job_get_all_sub_cat'])->name('user.post.job.get.all.sub.category');
        Route::post('/post-job-get-sub-cat-price', [Controllers\User\UserJobController::class, 'post_job_get_sub_cat_price'])->name('user.post.job.get.sub.category.price');
        Route::post('/post-job-save', [Controllers\User\UserJobController::class, 'post_job_save'])->name('user.post.job.save');

        //job edit
        Route::get('/job-edit/{id}', [Controllers\User\UserJobController::class, 'job_edit'])->name('user.job.edit');
        Route::post('/job-update', [Controllers\User\UserJobController::class, 'job_update'])->name('user.job.update');

        //user find job
        Route::get('/find-job', [Controllers\User\UserJobController::class, 'find_job'])->name('user.find.job');
        Route::post('/find-job-get-all', [Controllers\User\UserJobController::class, 'find_job_get_all'])->name('user.find.job.get.all');
        Route::get('/find-job-get-all', [Controllers\User\UserJobController::class, 'find_job_get_all_next']);
        Route::get('/job-details/{id}', [Controllers\User\UserJobController::class, 'job_details'])->name('user.find.job.details');
        Route::post('/job-report-submit', [Controllers\User\UserJobController::class, 'job_report_submit'])->name('user.report.job');

        //user find job filter
        Route::post('/job-find-coun-by-reg', [Controllers\User\UserJobController::class, 'job_find_coun_by_reg'])->name('user.job.find.coun.by.reg');
        Route::post('/job-find-mcat-by-reg', [Controllers\User\UserJobController::class, 'job_find_mcat_by_reg'])->name('user.job.find.mcat.by.reg');
        Route::post('/job-find-scat-by-mcat', [Controllers\User\UserJobController::class, 'job_find_scat_by_mcat'])->name('user.job.find.scat.by.mcat');

        //apply job
        Route::get('/job-apply/{id}', [Controllers\User\UserJobController::class, 'job_apply'])->name('user.job.apply');
        Route::post('/job-apply-submit', [Controllers\User\UserJobController::class, 'job_apply_submit'])->name('user.job.apply.submit');

        //apply members
        Route::get('/job-apply-members/{id}', [Controllers\User\UserJobController::class, 'job_apply_members'])->name('user.job.apply.memebers');
        Route::post('/job-apply-members-change-status', [Controllers\User\UserJobController::class, 'job_apply_members_change_status'])->name('user.job.apply.memebers.change.status');
        Route::post('/job-apply-members-report', [Controllers\User\UserJobController::class, 'job_apply_members_report'])->name('user.job.apply.memebers.submit.report');

        //my jobs
        Route::get('/my-jobs', [Controllers\User\UserJobController::class, 'my_jobs'])->name('user.my.jobs');

        //deposit
        Route::get('/deposit', [Controllers\User\UserDepositController::class, 'deposit'])->name('user.deposit');
        Route::post('/deposit-save', [Controllers\User\UserDepositController::class, 'deposit_save'])->name('user.deposit.save');
        Route::post('/dep-get-details', [Controllers\User\UserDepositController::class, 'deposit_gate_get_details'])->name('user.deposit.get.gateway.details');

        //withdraw
        Route::get('/withdraw', [Controllers\User\UserWindrawController::class, 'withdraw'])->name('user.withdraw');
        Route::post('/withdraw-save', [Controllers\User\UserWindrawController::class, 'withdraw_save'])->name('user.withdraw.save');

        //transaction
        Route::get('/transaction', [Controllers\User\UserTransactionController::class, 'all_transaction'])->name('user.all.transaction');

        //notifications
        Route::get('/notifications', [Controllers\User\UserNotificationsController::class, 'notifications'])->name('user.all.notification');
        Route::post('/notifications-status-change', [Controllers\User\UserNotificationsController::class, 'notifications_status_change'])->name('user.all.notification.update.status');

        //profile
        Route::get('/my-profile', [Controllers\User\UserController::class, 'my_profile'])->name('user.profile');
        Route::post('/my-profile-update', [Controllers\User\UserController::class, 'my_profile_update'])->name('user.profile.update');

        //change password
        Route::get('/change-password', [Controllers\User\UserController::class, 'change_password'])->name('user.change.password');
        Route::post('/change-password-update', [Controllers\User\UserController::class, 'change_password_update'])->name('user.change.password.update');
    });
});
// ===================  admin section

Route::prefix('admin')->group(function () {
    Route::get('/login', [Controllers\Auth\AdminLoginController::class, 'showLoginform'])->name('admin.login');
    Route::post('/login', [Controllers\Auth\AdminLoginController::class, 'login'])->name('admin.login.submit');
    Route::get('/logout', [Controllers\Auth\AdminLoginController::class, 'logout'])->name('admin.logout');
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
        Route::post('/main-category-by-region', [Controllers\Admin\AdminRegionController::class, 'main_category_by_region'])->name('admin.main.category.by.region');


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

        //all jobs
        Route::get('/all-jobs', [Controllers\Admin\AdminJobController::class, 'all_jobs'])->name('admin.all.jobs');
        Route::get('/all-jobs-get', [Controllers\Admin\AdminJobController::class, 'all_jobs_get'])->name('admin.all.jobs.get');
        Route::get('/job-details/{id}', [Controllers\Admin\AdminJobController::class, 'job_details'])->name('admin.job.details');
        Route::post('/job-details-update', [Controllers\Admin\AdminJobController::class, 'job_details_update'])->name('admin.job.details.update');

        //pending jobs
        Route::get('/pending-jobs', [Controllers\Admin\AdminJobController::class, 'pending_jobs'])->name('admin.pending.jobs');
        Route::get('/pending-jobs-get', [Controllers\Admin\AdminJobController::class, 'pending_jobs_get'])->name('admin.pending.jobs.get');

        //pending jobs
        Route::get('/approved-jobs', [Controllers\Admin\AdminJobController::class, 'approved_jobs'])->name('admin.approved.jobs');
        Route::get('/approved-jobs-get', [Controllers\Admin\AdminJobController::class, 'approved_jobs_get'])->name('admin.approved.jobs.get');


        //rejected jobs
        Route::get('/rejected-jobs', [Controllers\Admin\AdminJobController::class, 'rejected_jobs'])->name('admin.rejected.jobs');
        Route::get('/rejected-jobs-get', [Controllers\Admin\AdminJobController::class, 'rejected_jobs_get'])->name('admin.rejected.jobs.get');


        //payment gateway
        Route::get('/payment-gateway', [Controllers\Admin\AdminGatewayController::class, 'payment_gateway'])->name('admin.payment.gateway');
        Route::get('/payment-gateway-edit/{id}', [Controllers\Admin\AdminGatewayController::class, 'payment_gateway_edit'])->name('admin.payment.gateway.edit');
        Route::post('/payment-gateway-update', [Controllers\Admin\AdminGatewayController::class, 'payment_gateway_update'])->name('admin.payment.gateway.update');

        //deposit
        Route::get('/all-deposit', [Controllers\Admin\AdminDepositController::class, 'all_deposit'])->name('admin.all.deposit');
        Route::get('/all-deposit-get', [Controllers\Admin\AdminDepositController::class, 'all_deposit_get'])->name('admin.all.deposit.get');

        Route::get('/pending-deposit', [Controllers\Admin\AdminDepositController::class, 'pending_deposit'])->name('admin.pending.deposit');
        Route::get('/pending-deposit-get', [Controllers\Admin\AdminDepositController::class, 'pending_deposit_get'])->name('admin.pending.deposit.get');

        Route::get('/approved-deposit', [Controllers\Admin\AdminDepositController::class, 'approved_deposit'])->name('admin.approved.deposit');
        Route::get('/approved-deposit-get', [Controllers\Admin\AdminDepositController::class, 'approved_deposit_get'])->name('admin.approved.deposit.get');

        Route::get('/rejected-deposit', [Controllers\Admin\AdminDepositController::class, 'rejected_deposit'])->name('admin.rejected.deposit');
        Route::get('/rejected-deposit-get', [Controllers\Admin\AdminDepositController::class, 'rejected_deposit_get'])->name('admin.rejected.deposit.get');


        Route::post('/deposit-change-status', [Controllers\Admin\AdminDepositController::class, 'deposit_change_status'])->name('admin.deposit.status.change');
        Route::post('/deposit-delete', [Controllers\Admin\AdminDepositController::class, 'deposit_delete'])->name('admin.deposit.delete');

        //withdraw
        Route::get('/all-withdraw', [Controllers\Admin\AdminWithdrawController::class, 'all_withdraw'])->name('admin.all.withdraw');
        Route::get('/all-withdraw-get', [Controllers\Admin\AdminWithdrawController::class, 'all_withdraw_get'])->name('admin.all.withdraw.get');
        Route::post('/withdraw-status-update', [Controllers\Admin\AdminWithdrawController::class, 'withdraw_status_change'])->name('admin.withdraw.status.change');
        Route::post('/withdraw-delete', [Controllers\Admin\AdminWithdrawController::class, 'withdraw_delete'])->name('admin.withdraw.delete');

        //pending withdraw
        Route::get('/pending-withdraw', [Controllers\Admin\AdminWithdrawController::class, 'pending_withdraw'])->name('admin.pending.withdraw');
        Route::get('/pending-withdraw-get', [Controllers\Admin\AdminWithdrawController::class, 'pending_withdraw_get'])->name('admin.pending.withdraw.get');

        //approved withdraw
        Route::get('/approved-withdraw', [Controllers\Admin\AdminWithdrawController::class, 'approved_withdraw'])->name('admin.approved.withdraw');
        Route::get('/approved-withdraw-get', [Controllers\Admin\AdminWithdrawController::class, 'approved_withdraw_get'])->name('admin.approved.withdraw.get');

        //rejected withdraw
        Route::get('/rejected-withdraw', [Controllers\Admin\AdminWithdrawController::class, 'rejected_withdraw'])->name('admin.rejected.withdraw');
        Route::get('/rejected-withdraw-get', [Controllers\Admin\AdminWithdrawController::class, 'rejected_withdraw_get'])->name('admin.rejected.withdraw.get');

        //all users
        Route::get('/all-users', [Controllers\Admin\AdminUsersController::class, 'all_users'])->name('admin.all.users');
        Route::get('/all-users-get', [Controllers\Admin\AdminUsersController::class, 'all_users_get'])->name('admin.get.all.users');
        Route::get('/user-details/{id}', [Controllers\Admin\AdminUsersController::class, 'user_details'])->name('admin.user.details');
        Route::post('/user-details-update', [Controllers\Admin\AdminUsersController::class, 'user_details_update'])->name('admin.user.profile.update');
        Route::get('/user-change-password/{id}', [Controllers\Admin\AdminUsersController::class, 'user_change_password'])->name('admin.user.change.password');
        Route::post('/user-change-password-update', [Controllers\Admin\AdminUsersController::class, 'user_change_password_update'])->name('admin.user.change.password.update');

        //all sub admin
        Route::get('/all-sub-admins', [Controllers\Admin\AdminSubAdminController::class, 'all_sub_admins'])->name('admin.all.subadmin');
        Route::get('/all-sub-admins-get', [Controllers\Admin\AdminSubAdminController::class, 'all_sub_admins_get'])->name('admin.get.all.subadmins');
        Route::post('/sub-admins-save', [Controllers\Admin\AdminSubAdminController::class, 'sub_admins_save'])->name('admin.sub.admin.save');
        Route::post('/sub-admins-single', [Controllers\Admin\AdminSubAdminController::class, 'sub_admins_single'])->name('admin.sub.admin.get.single');
        Route::post('/sub-admins-update', [Controllers\Admin\AdminSubAdminController::class, 'sub_admins_update'])->name('admin.sub.admin.update');
        Route::post('/sub-admins-delete', [Controllers\Admin\AdminSubAdminController::class, 'sub_admins_delete'])->name('admin.sub.admin.delete');

        //job report
        Route::get('/job-report', [Controllers\Admin\AdminReportController::class, 'job_report'])->name('admin.job.report');
        Route::get('/job-report-get', [Controllers\Admin\AdminReportController::class, 'job_report_get'])->name('admin.job.report.get');

        //job task report
        Route::get('/job-task-report', [Controllers\Admin\AdminReportController::class, 'job_task_report'])->name('admin.job.task.report');

    });
});


//========sub admin
Route::prefix('sub-admin')->group(function () {
    Route::get('/login', [Controllers\Auth\SubAdminLoginController::class, 'showLoginform'])->name('subadmin.login');
    Route::post('/login', [Controllers\Auth\SubAdminLoginController::class, 'login'])->name('subadmin.login.submit');
    Route::get('/logout', [Controllers\Auth\SubAdminLoginController::class, 'logout'])->name('subadmin.logout');
});


Route::group(['middleware' => ['auth:subadmin']], function () {
    Route::prefix('sub-admin')->group(function () {
        Route::get('/', [Controllers\SubAdmin\SubAdminController::class, 'index'])->name('subadmin.dashboard');

        //all jobs
        Route::get('/all-jobs', [Controllers\SubAdmin\SubAdminJobController::class, 'all_jobs'])->name('subadmin.all.jobs');
        Route::get('/all-jobs-get', [Controllers\SubAdmin\SubAdminJobController::class, 'all_jobs_get'])->name('subadmin.all.jobs.get');
        Route::get('/job-details/{id}', [Controllers\SubAdmin\SubAdminJobController::class, 'job_details'])->name('subadmin.job.details');
        Route::post('/job-details-update', [Controllers\SubAdmin\SubAdminJobController::class, 'job_details_update'])->name('subadmin.job.details.update');

        //pending jobs
        Route::get('/pending-jobs', [Controllers\SubAdmin\SubAdminJobController::class, 'pending_jobs'])->name('subadmin.pending.jobs');
        Route::get('/pending-jobs-get', [Controllers\SubAdmin\SubAdminJobController::class, 'pending_jobs_get'])->name('subadmin.pending.jobs.get');

        //pending jobs
        Route::get('/approved-jobs', [Controllers\SubAdmin\SubAdminJobController::class, 'approved_jobs'])->name('subadmin.approved.jobs');
        Route::get('/approved-jobs-get', [Controllers\SubAdmin\SubAdminJobController::class, 'approved_jobs_get'])->name('subadmin.approved.jobs.get');


        //rejected jobs
        Route::get('/rejected-jobs', [Controllers\SubAdmin\SubAdminJobController::class, 'rejected_jobs'])->name('subadmin.rejected.jobs');
        Route::get('/rejected-jobs-get', [Controllers\SubAdmin\SubAdminJobController::class, 'rejected_jobs_get'])->name('subadmin.rejected.jobs.get');


        //deposit
        Route::get('/all-deposit', [Controllers\SubAdmin\SubAdminDepositController::class, 'all_deposit'])->name('subadmin.all.deposit');
        Route::get('/all-deposit-get', [Controllers\SubAdmin\SubAdminDepositController::class, 'all_deposit_get'])->name('subadmin.all.deposit.get');

        Route::get('/pending-deposit', [Controllers\SubAdmin\SubAdminDepositController::class, 'pending_deposit'])->name('subadmin.pending.deposit');
        Route::get('/pending-deposit-get', [Controllers\SubAdmin\SubAdminDepositController::class, 'pending_deposit_get'])->name('subadmin.pending.deposit.get');

        Route::get('/approved-deposit', [Controllers\SubAdmin\SubAdminDepositController::class, 'approved_deposit'])->name('subadmin.approved.deposit');
        Route::get('/approved-deposit-get', [Controllers\SubAdmin\SubAdminDepositController::class, 'approved_deposit_get'])->name('subadmin.approved.deposit.get');

        Route::get('/rejected-deposit', [Controllers\SubAdmin\SubAdminDepositController::class, 'rejected_deposit'])->name('subadmin.rejected.deposit');
        Route::get('/rejected-deposit-get', [Controllers\SubAdmin\SubAdminDepositController::class, 'rejected_deposit_get'])->name('subadmin.rejected.deposit.get');


        Route::post('/deposit-change-status', [Controllers\SubAdmin\SubAdminDepositController::class, 'deposit_change_status'])->name('subadmin.deposit.status.change');
        Route::post('/deposit-delete', [Controllers\SubAdmin\SubAdminDepositController::class, 'deposit_delete'])->name('subadmin.deposit.delete');


        //withdraw
        Route::get('/all-withdraw', [Controllers\SubAdmin\SubAdminWithdrawController::class, 'all_withdraw'])->name('subadmin.all.withdraw');
        Route::get('/all-withdraw-get', [Controllers\SubAdmin\SubAdminWithdrawController::class, 'all_withdraw_get'])->name('subadmin.all.withdraw.get');
        Route::post('/withdraw-status-update', [Controllers\SubAdmin\SubAdminWithdrawController::class, 'withdraw_status_change'])->name('subadmin.withdraw.status.change');
        Route::post('/withdraw-delete', [Controllers\SubAdmin\SubAdminWithdrawController::class, 'withdraw_delete'])->name('subadmin.withdraw.delete');

        //pending withdraw
        Route::get('/pending-withdraw', [Controllers\SubAdmin\SubAdminWithdrawController::class, 'pending_withdraw'])->name('subadmin.pending.withdraw');
        Route::get('/pending-withdraw-get', [Controllers\SubAdmin\SubAdminWithdrawController::class, 'pending_withdraw_get'])->name('subadmin.pending.withdraw.get');

        //approved withdraw
        Route::get('/approved-withdraw', [Controllers\SubAdmin\SubAdminWithdrawController::class, 'approved_withdraw'])->name('subadmin.approved.withdraw');
        Route::get('/approved-withdraw-get', [Controllers\SubAdmin\SubAdminWithdrawController::class, 'approved_withdraw_get'])->name('subadmin.approved.withdraw.get');

        //rejected withdraw
        Route::get('/rejected-withdraw', [Controllers\SubAdmin\SubAdminWithdrawController::class, 'rejected_withdraw'])->name('subadmin.rejected.withdraw');
        Route::get('/rejected-withdraw-get', [Controllers\SubAdmin\SubAdminWithdrawController::class, 'rejected_withdraw_get'])->name('subadmin.rejected.withdraw.get');

        //all users
        Route::get('/all-users', [Controllers\SubAdmin\SubAdminUsersController::class, 'all_users'])->name('subadmin.all.users');
        Route::get('/all-users-get', [Controllers\SubAdmin\SubAdminUsersController::class, 'all_users_get'])->name('subadmin.get.all.users');
        Route::get('/user-details/{id}', [Controllers\SubAdmin\SubAdminUsersController::class, 'user_details'])->name('subadmin.user.details');
        Route::post('/user-details-update', [Controllers\SubAdmin\SubAdminUsersController::class, 'user_details_update'])->name('subadmin.user.profile.update');
        Route::get('/user-change-password/{id}', [Controllers\SubAdmin\SubAdminUsersController::class, 'user_change_password'])->name('subadmin.user.change.password');
        Route::post('/user-change-password-update', [Controllers\SubAdmin\SubAdminUsersController::class, 'user_change_password_update'])->name('subadmin.user.change.password.update');


    });
});
