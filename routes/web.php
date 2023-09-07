<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\ProtectionController;
use App\Http\Controllers\SinglePageController;
use App\Http\Controllers\CourseController;
use App\Models\Course;
use App\Models\Category;

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


 Route::get('/', function () {
    $courses = Course::all();
    $categories = Category::pluck('name', 'id');

    return view('User.Home',compact('courses', 'categories'));
 });
Auth::routes();
Route::get('/dashboard', [ProtectionController::class, 'index'])->name('dashboard');
Route::get('/home', [ProtectionController::class, 'index'])->name('User.Home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//  Route::get('/logout', 'Auth\LoginController@logout')->name('logout');


Route::match(['GET', 'POST'], '/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');
Route::middleware(['auth'])->group ( function() {


} );
Route::resource('course',CourseController::class);
Route::resource('single', SinglePageController::class);