<?php

use App\Http\Controllers\Backend\CompanySettingController;
use App\Http\Controllers\Backend\CourseController;
use App\Http\Controllers\Backend\EventController;
use App\Http\Controllers\Backend\JobController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/courses', [HomeController::class, 'courses'])->name('courses');
Route::get('/courses/{slug}', [HomeController::class, 'viewCourse'])->name('view-course');
Route::get('/jobs', [HomeController::class, 'jobs'])->name('jobs');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.dashboard');
    })->name('dashboard');
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('role/assign', [RoleController::class, 'assign'])->name('role.assign');
    Route::post('role/assign', [RoleController::class, 'storeAssign'])->name('assign.store');
    Route::resource('role', RoleController::class);
    Route::resource('user', UserController::class);


    Route::resource('course', CourseController::class);
    Route::resource('event', EventController::class);
    Route::resource('job', JobController::class);

    Route::get('settings/company-setting', [CompanySettingController::class, 'editCompanySetting'])->name('company-setting.edit');
    Route::post('settings/company-setting', [CompanySettingController::class, 'updateCompanySetting'])->name('company-setting.update');
});

require __DIR__.'/auth.php';
