<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\JobcategoryController;
use App\Http\Controllers\Admin\CompanyController;
 
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // experience routes
    Route::get('/experience',[ExperienceController::class, 'index'])->name('experience.index');
    Route::get('/experience/add',[ExperienceController::class, 'add'])->name('experience.add');
    Route::post('/experience/store',[ExperienceController::class, 'store'])->name('experience.store');
    Route::get('/experience/edit/{id}',[ExperienceController::class, 'edit'])->name('experience.edit');
    Route::post('/experience/update/{id}',[ExperienceController::class, 'update'])->name('experience.update');
    Route::delete('/experience/delete/{id}',[ExperienceController::class, 'destroy'])->name('experience.delete');
    // end of experience

    // job category routes
    Route::get('/jobcategory',[JobcategoryController::class, 'index'])->name('jobcategory.index');
    Route::get('/jobcategory/add',[JobcategoryController::class, 'add'])->name('jobcategory.add');
    Route::post('/jobcategory/store',[JobcategoryController::class, 'store'])->name('jobcategory.store');
    Route::get('/jobcategory/edit/{id}',[JobcategoryController::class, 'edit'])->name('jobcategory.edit');
    Route::post('/jobcategory/update/{id}',[JobcategoryController::class, 'update'])->name('jobcategory.update');
    Route::delete('/jobcategory/delete/{id}',[JobcategoryController::class, 'destroy'])->name('jobcategory.delete');
    // end of job category routes

    // company routes
    Route::get('/company',[CompanyController::class, 'index'])->name('company.index');
    Route::get('/company/add',[CompanyController::class, 'add'])->name('company.add');
    Route::post('/company/store',[CompanyController::class, 'store'])->name('company.store');
    Route::get('/company/edit/{id}',[CompanyController::class, 'edit'])->name('company.edit');
    Route::post('/company/update/{id}',[CompanyController::class, 'update'])->name('company.update');
    Route::delete('/company/delete/{id}',[CompanyController::class, 'destroy'])->name('company.delete');
    // end of company
});

require __DIR__.'/auth.php';
