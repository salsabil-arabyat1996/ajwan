<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\Admin\CategoryController;



use App\Http\Controllers\CourseController;
use App\Models\Course;
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
    return view('User.Home');
});

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



// Categories Index Page
Route::get('/admin/categories', [CategoryController::class, 'index'])->name('categories.index');

// Create Category Form
Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('categories.create');

// Store New Category
Route::post('/admin/categories', [CategoryController::class, 'store'])->name('categories.store');

// Edit Category Form
Route::get('/admin/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');

// Update Category
Route::put('/admin/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');

// Delete Category
Route::delete('/admin/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

// Display a listing of the resource
Route::get('/admin/courses', [CourseController::class, 'index'])->name('Admin.courses.index');

// Show the form for creating a new resource
Route::get('/admin/courses/create', [CourseController::class, 'create'])->name('courses.create');

// Store a newly created resource in storage
Route::post('/admin/courses', [CourseController::class, 'store'])->name('courses.store');

// Display the specified resource
Route::get('/admin/courses/{course}', [CourseController::class, 'show'])->name('courses.show');

// Show the form for editing the specified resource
Route::get('/admin/courses/{course}/edit', [CourseController::class, 'edit'])->name('Admin.courses.edit');

// Update the specified resource in storage
Route::put('/admin/courses/{course}', [CourseController::class, 'update'])->name('courses.update');

// Remove the specified resource from storage
Route::delete('/admin/courses/{course}', [CourseController::class, 'destroy'])->name('courses.destroy');
Route::resource('single', SinglePageController::class);
