<?php

use App\Http\Controllers\Api\V1\Guest\CourseController;
use Illuminate\Support\Facades\Route;
use Modules\Api\Http\Controllers\AppController;
use Modules\Api\Http\Controllers\CourseCategoryController;
use Modules\Api\Http\Controllers\InstructorController;

Route::middleware(['auth:sanctum'])->controller(CourseCategoryController::class)->prefix('v1/course')->group(function () {
    Route::get('/categories', 'categories')->name('student.api.course.categories');
    Route::get('/categories/{id}/list', 'categoryList')->name('student.api.course.category_list');
    Route::get('/categories/{id}/details', 'categoryDetails')->name('student.api.course.category_details');
});

// Home Api
Route::middleware(['auth:sanctum'])->controller(CourseController::class)->prefix('v1')->group(function () {
    Route::get('/course/details/{id}', 'courseDetails')->name('home.api.course.details');
    Route::get('/courses', 'index');
    Route::get('/see-all-courses', 'seeAllCourses');
});

// instructor
Route::middleware(['auth:sanctum'])->controller(InstructorController::class)->prefix('v1')->group(function () {
    Route::get('/instructors', 'index')->name('instructors.api.index');
    Route::get('/instructor/{id}/details', 'details')->name('instructors.api.details');
});

Route::controller(AppController::class)->prefix('v1')->middleware('auth:sanctum')->group(function () {
    Route::get('/general-settings', 'baseSettings')->name('app.api.general_settings');
});
