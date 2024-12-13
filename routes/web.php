<?php
use App\Http\Controllers\Admin\AdminAboutController;
use App\Http\Controllers\Admin\AdminSkillController;
use App\Http\Controllers\Admin\AdminCertificateController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminProjectController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/defaultroot', function () {
    return view('home');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin/dashboard', [AdminController::class, 'index'])->middleware('auth', 'admin');
Route::get('/admin/index', [PostController::class, 'index'])->middleware('auth','admin');



Route::prefix('admin')->group(function () {
    Route::resource('posts', PostController::class);

});


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('skill', [SkillController::class, 'index'])->name('skill');
Route::get('project', [ProjectController::class, 'index'])->name('project');
Route::get('certificate', [CertificateController::class, 'index'])->name('certificate');
Route::get('contact', [ContactController::class, 'index'])->name('contact');

Route::resource('admin/dashboard/home', AdminHomeController::class);
Route::resource('admin/dashboard/about', AdminAboutController::class);
Route::resource('admin/dashboard/skill', AdminSkillController::class) ;
Route::resource('admin/dashboard/certificate', AdminCertificateController::class);
Route::resource('admin/dashboard/project', AdminProjectController::class);
Route::resource('admin/dashboard/contact', AdminContactController::class);



require __DIR__.'/auth.php';

