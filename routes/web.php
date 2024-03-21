<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ProjectCategoryController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ProjectScreenshotController;
use App\Http\Controllers\Admin\ProjectToolController;
use App\Http\Controllers\Admin\ToolController;
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

/** Frontend Routes */
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/details', [HomeController::class, 'details'])->name('home.details');
Route::get('/book', [HomeController::class, 'book'])->name('book');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {

    /** Project Category Route */
    Route::resource('projects-category', ProjectCategoryController::class);

    /** Project Route */
    Route::resource('projects', ProjectController::class);

    /** Tools Route */
    Route::resource('tools', ToolController::class);

    /** Project Tools Route */
    Route::resource('projects-tools', ProjectToolController::class);

    Route::get('tools/assign/{project}', [ProjectToolController::class, 'create'])->name('projects.assign.tool');
    Route::post('tools/assign/save/{project}', [ProjectToolController::class, 'store'])->name('projects.assign.tool.store');

    /** Project Screenshots Route */
    Route::resource('projects-screenshots', ProjectScreenshotController::class);
    Route::get('screenshots/{project}', [ProjectScreenshotController::class, 'create'])->name('projects-screenshots.create-page');
    Route::post('screenshots/save/{project}', [ProjectScreenshotController::class, 'store'])->name('projects.screenshots.store-page');
});
