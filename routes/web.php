<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DropController;
use App\Http\Livewire\Address;
use App\Http\Controllers\QuestionController;
use App\Http\Livewire\RegisterApplicant;


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('users');
//Route::view('/home', 'home')->name('home')->middleware('users');
//Route::get('/staff/home', [AdminController::class, 'index'])->name('staff')->middleware('admin');
Route::post('/save', [HomeController::class, 'storeProfile'])->name('store');
Route::post('/father/save', [HomeController::class, 'storeFather'])->name('storeFather');
Route::post('/mother/save', [HomeController::class, 'storeMother'])->name('storeMother');
Route::post('/address/save', [HomeController::class, 'storeAddress'])->name('storeAddress');
Route::post('/sibbling/save', [HomeController::class, 'storeSibbling'])->name('storeSibbling');

Route::post('/school/save', [HomeController::class, 'storeSchool'])->name('storeSchool');
Route::post('/attachment/save', [HomeController::class, 'storeAttachment'])->name('storeAttachment');
Route::get('/attachment/view/{id}', [HomeController::class, 'viewAttachment'])->name('viewAttachment');
Route::get('/attachment/delete/{id}', [HomeController::class, 'destroy'])->name('deleteAttachment');

Route::get('/apply', [HomeController::class, 'apply'])->name('apply');
Route::post('/apply/save', [HomeController::class, 'storeApplication'])->name('application.store');

Route::get('getDistricts',[HomeController::class, 'getDistricts'])->name('getDistricts');
Route::get('getSectors',[HomeController::class, 'getSectors'])->name('getSectors');
Route::get('getCells',[HomeController::class, 'getCells'])->name('getCells');

Route::get('login/google',[App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback',[App\Http\Controllers\Auth\LoginController::class, 'HandleGoogleCallback']);

Route::get('profile',[App\Http\Controllers\Auth\LoginController::class, 'profile'])->name('profile');

Route::get('application',[ApplicationController::class, 'index'])->name('application.index');
Route::get('application/create',[ApplicationController::class, 'create'])->name('application.create');


Route::get('dropdown',[DropController::class, 'index']);
Route::get('getDistricts',[DropController::class, 'getDistricts'])->name('getDistricts');
Route::get('getSectors',[DropController::class, 'getSectors'])->name('getSectors');
Route::get('getCells',[DropController::class, 'getCells'])->name('getCells');

Route::get('logout', [HomeController::class,'logout']);

Route::get('question',[QuestionController::class, 'index'])->name('question');
Route::get('/questions/1', [QuestionController::class, 'answer1'])->name('question1');
Route::post('/questions/1/save', [QuestionController::class, 'question1'])->name('question1.store');
Route::get('/questions/2', [QuestionController::class, 'answer2'])->name('question2');
Route::post('/questions/2/save', [QuestionController::class, 'question2'])->name('question2.store');

Route::get('/questions/3', [QuestionController::class, 'answer3'])->name('question3');
Route::post('/questions/3/save', [QuestionController::class, 'question3'])->name('question3.store');

Route::get('/questions/4', [QuestionController::class, 'answer4'])->name('question4');
Route::post('/questions/4/save', [QuestionController::class, 'question4'])->name('question4.store');

Route::get('/questions/5', [QuestionController::class, 'answer5'])->name('question5');
Route::post('/questions/5/save', [QuestionController::class, 'question5'])->name('question5.store');

Route::get('/questions/6', [QuestionController::class, 'answer6'])->name('question6');
Route::post('/questions/6/save', [QuestionController::class, 'question6'])->name('question6.store');

Route::get('/questions/edit/{id}', [QuestionController::class, 'answer1_edit'])->name('question1.edit');
Route::post('/questions/1/edit', [QuestionController::class, 'question1_edit'])->name('question1.store.edit');

Route::get('/staff/home', [AdminController::class, 'index'])->name('staff')->middleware('admin');
Route::get('/staff/applications', [AdminController::class, 'applications'])->name('applications')->middleware('admin');

Route::get('/staff/application/review/{id}',[AdminController::class, 'review'])->name('review.pdf')->middleware('admin');