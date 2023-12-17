<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/eventos', function () {
    return view('evento');
})->middleware(['auth', 'verified'])->name('eventos');
Route::get('/persona', function () {
    return view('personas');
})->middleware(['auth', 'verified'])->name('personas');

Route::get('/eventospersonas', function () {
    return view('eventspersonas');
})->middleware(['auth', 'verified'])->name('eventpersonas');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('events', 'App\Http\Controllers\EventsController@index')->name("events.index");

    Route::get('events/create', 'App\Http\Controllers\EventsController@create')->name("events.create");
    Route::post('events', 'App\Http\Controllers\EventsController@store')->name("events.store");
    Route::get('events/{events}', 'App\Http\Controllers\EventsController@show')->name("events.show");
    Route::get('events/{events}/edit', 'App\Http\Controllers\EventsController@edit')->name("events.edit");
    Route::match(['put', 'patch'], 'events/{events}', 'App\Http\Controllers\EventsController@update')->name("events.update");
    Route::get('regresar', 'App\Http\Controllers\EventsController@regresar')->name("evento.regresar");

    Route::delete('events/{events}', 'App\Http\Controllers\EventsController@delete')->name("events.delete");

    Route::get('personal', 'App\Http\Controllers\PersonasController@index')->name("personas.index");

    Route::get('personas/create', 'App\Http\Controllers\PersonasController@create')->name("personas.create");
    Route::post('personas', 'App\Http\Controllers\PersonasController@store')->name("personas.store");
    Route::get('personas/{personas}', 'App\Http\Controllers\PersonasController@show')->name("personas.show");
    Route::get('personas/{personas}/edit', 'App\Http\Controllers\PersonasController@edit')->name("personas.edit");
    Route::match(['put', 'patch'], 'personas/{personas}', 'App\Http\Controllers\PersonasController@update')->name("personas.update");
    Route::delete('personas/{personas}', 'App\Http\Controllers\PersonasController@delete')->name("personas.delete");

    Route::post('eventpersonas/{eventperson}', 'App\Http\Controllers\EventPersonasController@store')->name("eventperson.store");

    Route::delete('eventperson/{eventperson}', 'App\Http\Controllers\EventPersonasController@delete')->name("eventperson.delete");
    Route::get('eventperson/create', 'App\Http\Controllers\EventPersonasController@create')->name("eventperson.create");


    Route::get('eventperson', 'App\Http\Controllers\EventPersonasController@index')->name("eventspersonas.index");

require __DIR__.'/auth.php';
