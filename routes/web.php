<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\AudienController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AnswerController;
use App\Http\Controllers\Admin\ExportController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/login', [LoginController::class, 'showLoginForm']);
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware([AdminMiddleware::class])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/export', [ExportController::class, 'exportData'])->name('admin.export');
    Route::get('/admin/exportaudienanswers', [ExportController::class, 'exportAudienAnswers'])->name('admin.exportaudienanswers');
    Route::get('/admin/graph', [DashboardController::class, 'showGraph'])->name('admin.graph');
    Route::resource('/admin/questions', QuestionController::class);
    Route::get('/questions/create', [QuestionController::class, 'create'])->name('admin.questions.create');
    Route::post('/questions', [QuestionController::class, 'store'])->name('admin.questions.store');
    Route::get('/questions/{id}/edit', [QuestionController::class, 'edit'])->name('admin.questions.edit');
    Route::put('/questions/{id}', [QuestionController::class, 'update'])->name('admin.questions.update');
    Route::delete('/questions/{id}', [QuestionController::class, 'destroy'])->name('admin.questions.destroy');
    Route::get('/admin/questions/{question}/answers', [QuestionController::class, 'showAnswers'])->name('admin.questions.answers.index');
    // Route::get('/admin/questions/{question}', [QuestionController::class, 'show'])->name('admin.questions.show');
    // Route::get('/admin/questions/{question}/answers', [AnswerController::class, 'index'])->name('admin.questions.answers.index');
    Route::get('/admin/questions/{question}/answers/create', [AnswerController::class, 'create'])->name('admin.questions.answers.create');
    Route::post('/admin/questions/{question}/answers', [AnswerController::class, 'store'])->name('admin.questions.answers.store');
});
Route::get('/', [AudienController::class, 'index'])->name('audien.index');
Route::get('/done', [AudienController::class, 'done'])->name('audien.done');
Route::post('/store-answer', [AudienController::class, 'storeAnswer'])->name('audien.store.answer');
