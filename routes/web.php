<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;

// Rotte pubbliche
Route::get('/', [FrontController::class, 'welcome'])->name('home');
Route::get('/experience', [FrontController::class, 'experience'])->name('experience');
Route::get('/whoiam', [FrontController::class, 'whoiam'])->name('whoiam');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');


Route::get('/nuovo/progetto', [ProjectController::class, 'createProject'])->middleware('auth') ->name('projects.create');
Route::get('/dettaglio/progetto/{project}', [ProjectController::class, 'showProject'])->name('projects.show');
Route::get('/dettaglio/tutti/progetti', [ProjectController::class, 'indexProject'])->name('projects.index');

Route::post('/contact/send', [ContactController::class, 'sendEmail'])->name('contact.send');
// Rotte amministratore
Route::get('/admin/home', [AdminController::class, 'index'])->middleware('isAdmin')->name('admin.index');
Route::patch('/accetta/progetto/{project}', [AdminController::class, 'acceptProject'])->middleware('isAdmin')->name('admin.accept_project');
Route::patch('/rifiuta/progetto/{project}', [AdminController::class, 'rejectProject'])->middleware('isAdmin')->name('admin.reject_project');