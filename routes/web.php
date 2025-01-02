<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Manage\ManageExpensesCategoryController;
use App\Http\Controllers\Manage\ManageExpensesReceiverController;
use App\Http\Controllers\Manage\ManageProductsController;
use App\Http\Controllers\Manage\ManageSchoolYearController;
use App\Http\Controllers\Manage\ManageStudentsController;
use App\Http\Controllers\Manage\ManageTuitionController;
use App\Http\Controllers\Manage\ManageYearLevelController;
use App\Http\Controllers\Manage\ManageUsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/manage/expenses/category', [ManageExpensesCategoryController::class, 'index'])->name('manageec.index');
    Route::post('/manage/expenses/category', [ManageExpensesCategoryController::class, 'store'])->name('manageec.store');
    Route::get('/manage/expenses/category/create', [ManageExpensesCategoryController::class, 'create'])->name('manageec.create');
    Route::get('/manage/expenses/category/search', [ManageExpensesCategoryController::class, 'search'])->name('manageec.search');
    Route::get('/manage/expenses/category/{category}', [ManageExpensesCategoryController::class, 'show'])->name('manageec.show');
    Route::patch('/manage/expenses/category/{category}', [ManageExpensesCategoryController::class, 'update'])->name('manageec.update');
    Route::delete('/manage/expenses/category/{category}', [ManageExpensesCategoryController::class, 'destroy'])->name('manageec.destroy');
    Route::get('/manage/expenses/category/{category}/edit', [ManageExpensesCategoryController::class, 'edit'])->name('manageec.edit');

    Route::get('/manage/expenses/receiver', [ManageExpensesReceiverController::class, 'index'])->name('manageer.index');
    Route::post('/manage/expenses/receiver', [ManageExpensesReceiverController::class, 'store'])->name('manageer.store');
    Route::get('/manage/expenses/receiver/create', [ManageExpensesReceiverController::class, 'create'])->name('manageer.create');
    Route::get('/manage/expenses/receiver/search', [ManageExpensesReceiverController::class, 'search'])->name('manageer.search');
    Route::get('/manage/expenses/receiver/{receiver}', [ManageExpensesReceiverController::class, 'show'])->name('manageer.show');
    Route::patch('/manage/expenses/receiver/{receiver}', [ManageExpensesReceiverController::class, 'update'])->name('manageer.update');
    Route::delete('/manage/expenses/receiver/{receiver}', [ManageExpensesReceiverController::class, 'destroy'])->name('manageer.destroy');
    Route::get('/manage/expenses/receiver/{receiver}/edit', [ManageExpensesReceiverController::class, 'edit'])->name('manageer.edit');

    Route::get('/manage/products', [ManageProductsController::class, 'index'])->name('manageproducts.index');
    Route::post('/manage/products', [ManageProductsController::class, 'store'])->name('manageproducts.store');
    Route::get('/manage/products/create', [ManageProductsController::class, 'create'])->name('manageproducts.create');
    Route::get('/manage/products/search', [ManageProductsController::class, 'search'])->name('manageproducts.search');
    Route::get('/manage/products/{products}', [ManageProductsController::class, 'show'])->name('manageproducts.show');
    Route::patch('/manage/products/{products}', [ManageProductsController::class, 'update'])->name('manageproducts.update');
    Route::delete('/manage/products/{products}', [ManageProductsController::class, 'destroy'])->name('manageproducts.destroy');
    Route::get('/manage/products/{products}/edit', [ManageProductsController::class, 'edit'])->name('manageproducts.edit');
    
    Route::get('/manage/school/year', [ManageSchoolYearController::class, 'index'])->name('managesy.index');
    Route::post('/manage/school/year', [ManageSchoolYearController::class, 'store'])->name('managesy.store');
    Route::get('/manage/school/year/create', [ManageSchoolYearController::class, 'create'])->name('managesy.create');
    Route::get('/manage/school/year/search', [ManageSchoolYearController::class, 'search'])->name('managesy.search');
    Route::get('/manage/school/year/{year}', [ManageSchoolYearController::class, 'show'])->name('managesy.show');
    Route::patch('/manage/school/year/{year}', [ManageSchoolYearController::class, 'update'])->name('managesy.update');
    Route::delete('/manage/school/year/{year}', [ManageSchoolYearController::class, 'destroy'])->name('managesy.destroy');
    Route::get('/manage/school/year/{year}/edit', [ManageSchoolYearController::class, 'edit'])->name('managesy.edit');

    Route::get('/manage/students', [ManageStudentsController::class, 'index'])->name('managestudents.index');
    Route::post('/manage/students', [ManageStudentsController::class, 'store'])->name('managestudents.store');
    Route::get('/manage/students/create', [ManageStudentsController::class, 'create'])->name('managestudents.create');
    Route::get('/manage/students/search', [ManageStudentsController::class, 'search'])->name('managestudents.search');
    Route::get('/manage/students/{students}', [ManageStudentsController::class, 'show'])->name('managestudents.show');
    Route::patch('/manage/students/{students}', [ManageStudentsController::class, 'update'])->name('managestudents.update');
    Route::delete('/manage/students/{students}', [ManageStudentsController::class, 'destroy'])->name('managestudents.destroy');
    Route::get('/manage/students/{students}/edit', [ManageStudentsController::class, 'edit'])->name('managestudents.edit');

    Route::get('/manage/tuition', [ManageTuitionController::class, 'index'])->name('managetuition.index');
    Route::post('/manage/tuition', [ManageTuitionController::class, 'store'])->name('managetuition.store');
    Route::get('/manage/tuition/create', [ManageTuitionController::class, 'create'])->name('managetuition.create');
    Route::get('/manage/tuition/search', [ManageTuitionController::class, 'search'])->name('managetuition.search');
    Route::get('/manage/tuition/{tuition}', [ManageTuitionController::class, 'show'])->name('managetuition.show');
    Route::patch('/manage/tuition/{tuition}', [ManageTuitionController::class, 'update'])->name('managetuition.update');
    Route::delete('/manage/tuition/{tuition}', [ManageTuitionController::class, 'destroy'])->name('managetuition.destroy');
    Route::get('/manage/tuition/{tuition}/edit', [ManageTuitionController::class, 'edit'])->name('managetuition.edit');

    Route::get('/manage/user', [ManageUsersController::class, 'index'])->name('manageusers.index');
    Route::post('/manage/user', [ManageUsersController::class, 'store'])->name('manageusers.store');
    Route::get('/manage/user/create', [ManageUsersController::class, 'create'])->name('manageusers.create');
    Route::get('/manage/user/search', [ManageUsersController::class, 'search'])->name('manageusers.search');
    Route::get('/manage/user/{user}', [ManageUsersController::class, 'show'])->name('manageusers.show');
    Route::patch('/manage/user/{user}', [ManageUsersController::class, 'update'])->name('manageusers.update');
    Route::delete('/manage/user/{user}', [ManageUsersController::class, 'destroy'])->name('manageusers.destroy');
    Route::get('/manage/user/{user}/edit', [ManageUsersController::class, 'edit'])->name('manageusers.edit');

    Route::get('/manage/year/level', [ManageYearLevelController::class, 'index'])->name('manageyl.index');
    Route::post('/manage/year/level', [ManageYearLevelController::class, 'store'])->name('manageyl.store');
    Route::get('/manage/year/level/create', [ManageYearLevelController::class, 'create'])->name('manageyl.create');
    Route::get('/manage/year/level/search', [ManageYearLevelController::class, 'search'])->name('manageyl.search');
    Route::get('/manage/year/level/{level}', [ManageYearLevelController::class, 'show'])->name('manageyl.show');
    Route::patch('/manage/year/level/{level}', [ManageYearLevelController::class, 'update'])->name('manageyl.update');
    Route::delete('/manage/year/level/{level}', [ManageYearLevelController::class, 'destroy'])->name('manageyl.destroy');
    Route::get('/manage/year/level/{level}/edit', [ManageYearLevelController::class, 'edit'])->name('manageyl.edit');
});

require __DIR__.'/auth.php';
