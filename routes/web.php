<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\FaqSectionSettingController;
use App\Http\Controllers\Admin\FooterGridFourController;
use App\Http\Controllers\Admin\FooterGridOneController;
use App\Http\Controllers\Admin\FooterGridThreeController;
use App\Http\Controllers\Admin\FooterGridTwoController;
use App\Http\Controllers\Admin\FooterInfoController;
use App\Http\Controllers\Admin\FooterSocialLinkController;
use App\Http\Controllers\Admin\GeneralSettingController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ProjectCategoryController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ProjectOrderController;
use App\Http\Controllers\Admin\ProjectScreenshotController;
use App\Http\Controllers\Admin\ProjectSectionSettingController;
use App\Http\Controllers\Admin\ProjectToolController;
use App\Http\Controllers\Admin\RunningLogoController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\ServiceSectionSettingController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SmallTitleController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\TestimonialSectionSettingController;
use App\Http\Controllers\Admin\ToolController;
use App\Http\Controllers\Admin\WorkflowSectionSettingController;
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

    Route::resource('hero-running-logo', RunningLogoController::class);

    /** Service Section Setting Route */
    Route::resource('service-section-setting', ServiceSectionSettingController::class);

    /** Service Route */
    Route::resource('services', ServicesController::class);

    /** Project Category Route */
    Route::resource('projects-category', ProjectCategoryController::class);

    /** Project Route */
    Route::resource('projects', ProjectController::class);

    /** Portfolio Section Setting Route */
    Route::resource('projects-section-setting', ProjectSectionSettingController::class);

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

    // route Footer Grid One
    Route::post('footer-grid-one-title', [FooterGridOneController::class, 'handleTitle'])->name('footer-grid-one-title');
    Route::resource('footer-grid-one', FooterGridOneController::class);

    // route Footer Grid Two
    Route::post('footer-grid-two-title', [FooterGridTwoController::class, 'handleTitle'])->name('footer-grid-two-title');
    Route::resource('footer-grid-two', FooterGridTwoController::class);

    // route Footer Grid Three
    Route::post('footer-grid-three-title', [FooterGridThreeController::class, 'handleTitle'])->name('footer-grid-three-title');
    Route::resource('footer-grid-three', FooterGridThreeController::class);

    // route Footer Grid Four
    Route::post('footer-grid-four-title', [FooterGridFourController::class, 'handleTitle'])->name('footer-grid-four-title');
    Route::resource('footer-grid-four', FooterGridFourController::class);

    /** Footer Social Link Route */
    Route::resource('footer-social', FooterSocialLinkController::class);

    /** Workflow Section Setting Route */
    Route::resource('workflow-section-setting', WorkflowSectionSettingController::class);

    /** Testimonial Section Setting Route */
    Route::resource('testimonial-section-setting', TestimonialSectionSettingController::class);

    /** faq Section Setting Route */
    Route::resource('faq-section-setting', FaqSectionSettingController::class);

    /** faq question Route */
    Route::resource('faq-question', FaqController::class);

    /** Settings Route */
    Route::get('settings', SettingController::class)->name('settings.index');

    /** General setting Route */
    Route::resource('general-setting', GeneralSettingController::class);

    // /** Seo setting Route */
    // Route::resource('seo-setting', SeoSettingController::class);

    /** Testimonial Route */
    Route::resource('testimonial', TestimonialController::class);
});
