<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FooterInfoController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ProjectCategoryController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ProjectOrderController;
use App\Http\Controllers\Admin\ProjectScreenshotController;
use App\Http\Controllers\Admin\ProjectToolController;
use App\Http\Controllers\Admin\SmallTitleController;
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
Route::get('/details/{project:slug}', [HomeController::class, 'details'])->name('home.details');
Route::get('/book', [HomeController::class, 'book'])->name('home.book');
Route::post('/book/save', [HomeController::class, 'storeBook'])->name('home.book.store-book');
Route::get('/services', [HomeController::class, 'services'])->name('home.services');
Route::get('/testimonials', [HomeController::class, 'testimonials'])->name('home.testimonials');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');

Route::get('resume/download', [AboutController::class, 'resumeDownload'])->name('resume.download');



Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {

    /** Hero Route */
    Route::resource('hero', HeroController::class);
    Route::resource('small-title', SmallTitleController::class);

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

    /** Project Orders Route */
    Route::resource('projects-orders', ProjectOrderController::class);

    /** Project Screenshots Route */
    Route::resource('projects-screenshots', ProjectScreenshotController::class);
    Route::get('screenshots/{project}', [ProjectScreenshotController::class, 'create'])->name('projects-screenshots.create-page');
    Route::post('screenshots/save/{project}', [ProjectScreenshotController::class, 'store'])->name('projects.screenshots.store-page');

    /** About Route */
    Route::resource('about', AboutController::class);

    // route Footer Info
    Route::resource('footer-info', FooterInfoController::class);
});
