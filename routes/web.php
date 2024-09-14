<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::redirect('/', '/note')->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth', 'verified')->group(function () {
  
    Route::get('/note', [NoteController::class, 'index'])->name('note.index');
    
    // create note page
    Route::get('/note/create', [NoteController::class, 'create'])->name('note.create');
    
    // save note to db
    Route::post('/note', [NoteController::class, 'store'])->name('note.store');
    
    //get specific note by id ...view note
    Route::get('/note/{note}', [NoteController::class, 'show'])->name('note.show');
    
    //edit specific note by id
    Route::get('/note/{note}/edit', [NoteController::class, 'edit'])->name('note.edit');
    
    //update specific note by id
    Route::put('/note/{note}', [NoteController::class, 'update'])->name('note.update');
    
    //delete a note
    Route::delete('/note/{note}', [NoteController::class, 'destroy'])->name('note.destroy');
    
    
    //creates all the above routes
    // Route::resource('note', NoteController::class );
        
});

require __DIR__.'/auth.php';
