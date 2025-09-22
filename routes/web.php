<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Backend\TodoController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\LanguageController;
use App\Http\Controllers\Backend\DashboardController;
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

// 🔹 Protected routes
Route::middleware('auth')->group(function () {
    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('home');
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

    Route::get('app-language/edit/phrase/{id}', [LanguageController::class, 'editPhrase'])->name('language.edit.phrase')->middleware('hasPermission:language_phrase_update');
    Route::post('app-language/update/phrase', [LanguageController::class, 'updatePhrase'])->name('language.update.phrase')->middleware('hasPermission:language_phrase_update');
    Route::get('app-language/module/phrase', [LanguageController::class, 'modulePhrase'])->name('language.module.phrase');

    // Search
    Route::get('search', [SearchController::class, 'search'])->name('search')->middleware('hasPermission:route_search');
    Route::post('search/routes', [SearchController::class, 'searchRoute'])->name('search.route')->middleware('hasPermission:route_search');
});
