<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Backend\TodoController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\HospitalController;
use App\Http\Controllers\Backend\LanguageController;
use App\Http\Controllers\Backend\AmbulanceController;
use App\Http\Controllers\Backend\BloodBankController;
use App\Http\Controllers\Backend\ContactUsController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\BloodDonorController;
use App\Http\Controllers\Backend\ActivityLogController;
use App\Http\Controllers\Backend\LoginActivityController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| All "web" routes for your application live here.
| These routes are loaded automatically by Laravel 12 from bootstrap/app.php.
|
*/

// 🔹 Cache clear route (no closure, safe for route:cache)
Route::get('cache-clear', function () {
    Artisan::call('optimize:clear');
    return redirect()->back()->with('success', ___('alert.cache_successfully_cleared.'));
})->name('cache.clear')->middleware('auth', 'hasPermission:dashboard_read');



Route::middleware(['XSS'])->group(function () {


//frontend start here

 Route::get('/',                                               [FrontendController::class, 'index'])->name('home');

    Route::get('contact-us-form',                                    [FrontendController::class, 'contact'])->name('contact');
    Route::get('category',                                    [FrontendController::class, 'category'])->name('category');
    Route::get('days',                                    [FrontendController::class, 'days'])->name('days');
    Route::get('doctor',                                    [FrontendController::class, 'doctor'])->name('doctor');
    Route::get('blogs',                                         [FrontendController::class, 'blog'])->name('blog');
    Route::get('blogs-details/{slug}',                          [FrontendController::class, 'blogDetails'])->name('blog.details');
    Route::get('about',                                         [FrontendController::class, 'about'])->name('about');
    Route::get('terms-conditions',                              [FrontendController::class, 'termsConditions'])->name('terms');
    Route::get('privacy-policy',                                [FrontendController::class, 'privacy'])->name('privacy');
    Route::get('faq',                                           [FrontendController::class, 'faq'])->name('faq');










// 🔹 Protected routes
    Route::middleware('auth')->group(function () {
    // Dashboard
    // Route::get('/', [DashboardController::class, 'index'])->name('home');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('hasPermission:dashboard_read');

    // Profile
    Route::get('profile', [ProfileController::class, 'profile'])->name('profile')->middleware('hasPermission:profile_read');
    Route::get('profile/update', [ProfileController::class, 'profileEdit'])->name('profile.update')->middleware('hasPermission:profile_update');
    Route::put('profile/update', [ProfileController::class, 'profileUpdate'])->name('profile.update')->middleware('hasPermission:profile_update');
    Route::get('password/update', [ProfileController::class, 'passwordEdit'])->name('password.update')->middleware('hasPermission:password_update');
    Route::put('password/update', [ProfileController::class, 'passwordUpdate'])->name('password.update')->middleware('hasPermission:password_update');

    // To-do
    Route::get('todo/todo_list', [TodoController::class, 'index'])->name('todo.index')->middleware('hasPermission:todo_read');
    Route::get('todo/todo_create', [TodoController::class, 'create'])->name('todo.create')->middleware('hasPermission:todo_create');
    Route::post('todo/todo_add', [TodoController::class, 'store'])->name('todo.store')->middleware('hasPermission:todo_create');
    Route::get('todo/edit/{id}', [TodoController::class, 'edit'])->name('todo.edit')->middleware('hasPermission:todo_update');
    Route::put('todo/update', [TodoController::class, 'update'])->name('todo.update')->middleware('hasPermission:todo_update');
    Route::delete('todo/delete/{id}', [TodoController::class, 'delete'])->name('todo.delete')->middleware('hasPermission:todo_delete');

    // Activity logs
    Route::get('admin/activity-logs', [ActivityLogController::class, 'index'])->name('activity.logs.index')->middleware('hasPermission:activity_logs_read');
    Route::get('admin/activity-logs/view/{id}', [ActivityLogController::class, 'view'])->name('activity.logs.view')->middleware('hasPermission:activity_logs_read');

    // Login activity
    Route::get('admin/login-activity/index', [LoginActivityController::class, 'index'])->name('login.activity.index')->middleware('hasPermission:login_activity_read');

    // Languages
    Route::get('app-language/index', [LanguageController::class, 'index'])->name('language.index')->middleware('hasPermission:language_read');
    Route::get('app-language/create', [LanguageController::class, 'create'])->name('language.create')->middleware('hasPermission:language_create');
    Route::post('app-language/store', [LanguageController::class, 'store'])->name('language.store')->middleware('hasPermission:language_create');
    Route::get('app-language/edit/{id}', [LanguageController::class, 'edit'])->name('language.edit')->middleware('hasPermission:language_update');
    Route::put('app-language/update', [LanguageController::class, 'update'])->name('language.update')->middleware('hasPermission:language_update');
    Route::delete('app-language/delete/{id}', [LanguageController::class, 'delete'])->name('language.delete')->middleware('hasPermission:language_delete');

    // Route::get('/contact-us',           [FrontendController::class, 'contactUs'])->name('frontend.contactUs');
    Route::post('/contact-us/store',    [ContactUsController::class, 'storeMessage'])->name('frontend.contactUs.store');
    Route::get('admin/contact-us/inbox',              [ContactUsController::class, 'index'])->name('contactUs.index');

    Route::get('app-language/edit/phrase/{id}', [LanguageController::class, 'editPhrase'])->name('language.edit.phrase')->middleware('hasPermission:language_phrase_update');
    Route::post('app-language/update/phrase', [LanguageController::class, 'updatePhrase'])->name('language.update.phrase')->middleware('hasPermission:language_phrase_update');
    Route::get('app-language/module/phrase', [LanguageController::class, 'modulePhrase'])->name('language.module.phrase');

    // Search
    Route::get('search', [SearchController::class, 'search'])->name('search')->middleware('hasPermission:route_search');
    Route::post('search/routes', [SearchController::class, 'searchRoute'])->name('search.route')->middleware('hasPermission:route_search');


    //Hospital
    Route::get('hospital/index', [HospitalController::class, 'index'])->name('hospital.index')->middleware('hasPermission:hospital_read');
    Route::get('hospital/create', [HospitalController::class, 'create'])->name('hospital.create')->middleware('hasPermission:hospital_create');
    Route::post('hospital/store', [HospitalController::class, 'store'])->name('hospital.store')->middleware('hasPermission:hospital_create');
    Route::get('hospital/edit/{id}', [HospitalController::class, 'edit'])->name('hospital.edit')->middleware('hasPermission:hospital_update');
    Route::put('hospital/update/{id}', [HospitalController::class, 'update'])->name('hospital.update')->middleware('hasPermission:hospital_update');
    Route::delete('hospital/delete/{id}', [HospitalController::class, 'delete'])->name('hospital.delete')->middleware('hasPermission:hospital_delete');

    //blood bank
    Route::get('bloodbank/index', [BloodBankController::class, 'index'])->name('bloodbank.index')->middleware('hasPermission:bloodbank_read');
    Route::get('bloodbank/create', [BloodBankController::class, 'create'])->name('bloodbank.create')->middleware('hasPermission:bloodbank_create');
    Route::post('bloodbank/store', [BloodBankController::class, 'store'])->name('bloodbank.store')->middleware('hasPermission:bloodbank_create');
    Route::get('bloodbank/edit/{id}', [BloodBankController::class, 'edit'])->name('bloodbank.edit')->middleware('hasPermission:bloodbank_update');
    Route::put('bloodbank/update/{id}', [BloodBankController::class, 'update'])->name('bloodbank.update')->middleware('hasPermission:bloodbank_update');
    Route::delete('bloodbank/delete/{id}', [BloodBankController::class, 'delete'])->name('bloodbank.delete')->middleware('hasPermission:bloodbank_delete');
    //blood donor
    Route::get('blooddonor/index', [BloodDonorController::class, 'index'])->name('blooddonor.index')->middleware('hasPermission:blooddonor_read');
    Route::get('blooddonor/create', [BloodDonorController::class, 'create'])->name('blooddonor.create')->middleware('hasPermission:blooddonor_create');
    Route::post('blooddonor/store', [BloodDonorController::class, 'store'])->name('blooddonor.store')->middleware('hasPermission:blooddonor_create');
    Route::get('blooddonor/edit/{id}', [BloodDonorController::class, 'edit'])->name('blooddonor.edit')->middleware('hasPermission:blooddonor_update');
    Route::put('blooddonor/update/{id}', [BloodDonorController::class, 'update'])->name('blooddonor.update')->middleware('hasPermission:blooddonor_update');
    Route::delete('blooddonor/delete/{id}', [BloodDonorController::class, 'delete'])->name('blooddonor.delete')->middleware('hasPermission:blooddonor_delete');
    //ambulance
    Route::get('ambulance/index', [AmbulanceController::class, 'index'])->name('ambulance.index')->middleware('hasPermission:ambulance_read');
    Route::get('ambulance/create', [AmbulanceController::class, 'create'])->name('ambulance.create')->middleware('hasPermission:ambulance_create');
    Route::post('ambulance/store', [AmbulanceController::class, 'store'])->name('ambulance.store')->middleware('hasPermission:ambulance_create');
    Route::get('ambulance/edit/{id}', [AmbulanceController::class, 'edit'])->name('ambulance.edit')->middleware('hasPermission:ambulance_update');
    Route::put('ambulance/update/{id}', [AmbulanceController::class, 'update'])->name('ambulance.update')->middleware('hasPermission:ambulance_update');
    Route::delete('ambulance/delete/{id}', [AmbulanceController::class, 'delete'])->name('ambulance.delete')->middleware('hasPermission:ambulance_delete');





});


});
