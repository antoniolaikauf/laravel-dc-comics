<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

// NB IL NAME SI RIFERISCE AL METODO DENTRO AL COMICCONTROLLER
// NB LE ROTTE CON LE VARIABILI VANNO SEMPRE ALLA FINE 
// prima rotta base fa vedere tutti gli elementi 
Route::get('/', [ComicController::class, 'index'])->name('users.index');
// seconda rotta mostra la pagina dove compare il form 
Route::get('/users/create', [ComicController::class, 'create'])->name('users.create');
// terza rotta utilizza il metodo per inserire il nuovo elemento e ritorna alla pagina iniziale quindi index
Route::post('/users', [ComicController::class, 'store'])->name('users.store');
// quarta rotta utilizza il metodo show nell comicfactory e mostra l'id che si è cliccato
Route::get('/users/{id}', [ComicController::class, 'show'])->name('users.show');
// quinta rotta per eliminare un elemento dentro alla lista 
Route::delete('/users/{id}', [ComicController::class, 'destroy'])->name('users.destroy');
// sesta rotta per andare all apgine edit del elemento cliccato 
Route::get('/users/{id}/edit', [ComicController::class, 'edit'])->name('users.edit');
// settima rotta per modiicare elemento e tornare alla pagina iniziale 
Route::put('/users/{id}', [ComicController::class, 'update'])->name('users.update');
