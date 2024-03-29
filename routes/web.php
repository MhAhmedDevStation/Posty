<?php


use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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
    return view('home');
})->name('home');
// Route::group([
//     'prefix'     => 'account',
//     'as'         => 'account.',
//     'middleware' => 'auth',
// ], function () {
//     Route::get('overview', [AccountController::class, 'index'])
//         ->name('overview');
// });
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/send-test-email', [DashboardController::class, 'sendTestEmail']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/events', [EventController::class,   'index'])->name('events');
Route::post('/events', [EventController::class,   'store']);
Route::put('/events/update/{id}', [EventController::class, 'updateAndRefresh'])->name('events.updateAndRefresh');
Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');


// Route::delete('/events/{event}', 'EventController@destroy')->name('events.destroy');

Route::put('/events/{event}', [EventController::class, 'update'])->name('events.update');
Route::get('/events/{id}', 'EventController@GetById')->name('events.getById');
Route::put('/events/{id}', 'EventController@update')->name('events.update');


// Show contact form
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact');
// Handle form submission
Route::post('/contact', [ContactController::class, 'submitForm']);


Route::get('/exams', [ExamController::class, 'index'])->name('exams');
Route::post('/exams/upload', [ExamController::class, 'processUpload'])->name('exams.processUpload');
Route::get('/exams/export', [ExamController::class, 'export'])->name('exams.export');

Route::get('set-language/{locale}', [LanguageController::class, 'setLanguage'])->name('set.language');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
