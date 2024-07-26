<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\NoteController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [WelcomeController::class, 'welcome'])->name('karibu');







//get all notes
Route::get('/note', [NoteController::class, 'index'])->name('note.index');

// create note page
Route::get('/note/create', [NoteController::class, 'create'])->name('note.create');

// save note to db
Route::post('/note', [NoteController::class, 'store'])->name('note.store');

//get specific note by id ...view note
Route::get('/note/{note}', [NoteController::class, 'show'])->name('note.show');



//edit specific note by id
Route::get('/note/{id}/edit', [NoteController::class, 'edit'])->name('note.edit');

//update specific note by id
Route::put('/note/{id}', [NoteController::class, 'update'])->name('note.update');

//delete a note
Route::delete('/note/{id}', [NoteController::class, 'destroy'])->name('note.destroy');


//creates all the above routes
// Route::resource('note', NoteController::class );



