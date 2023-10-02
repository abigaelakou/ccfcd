<?php

use App\Mail\contactMail;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('amd-migrate', function () {

    Artisan::call('migrate');
    return Artisan::output();
});
Route::get('amd-clear-cache', function () {

    Artisan::call('config:cache');

    return Artisan::output();
});

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/apropos', [PageControllers::class, 'apropos'])->name('apropos');
Route::get('/contact', [PageControllers::class, 'contact'])->name('contact');
Route::get('/librairie', [PageControllers::class, 'librairie'])->name('librairie');
Route::get('/empl_sixieme', [PageControllers::class, 'empl_sixieme'])->name('empl_sixieme');
Route::get('/empl_cinquieme', [PageControllers::class, 'empl_cinquieme'])->name('empl_cinquieme');
Route::get('/empl_quatrieme', [PageControllers::class, 'empl_quatrieme'])->name('empl_quatrieme');
Route::get('/empl_troisieme', [PageControllers::class, 'empl_troisieme'])->name('empl_troisieme');
Route::get('/renseignement', [PageControllers::class, 'renseignement'])->name('renseignement');
Route::get('/galerie', [PageControllers::class, 'galerie'])->name('galerie');


Route::get('/inscription', [App\Http\Controllers\InscriptionController::class, 'create']);
Route::get('/formInscription', [App\Http\Controllers\InscriptionController::class, 'formInscription']);
Route::post('/inscription', [App\Http\Controllers\InscriptionController::class, 'store']);
Route::get('/modifier-inscription/{id}', [App\Http\Controllers\InscriptionController::class, 'edit']);
Route::put('/modifier-inscription/{id}', [App\Http\Controllers\InscriptionController::class, 'update']);
Route::get('/supprimer-inscription/{id}', [App\Http\Controllers\InscriptionController::class, 'delete']);

Route::get('/classe', [App\Http\Controllers\ClasseController::class, 'create']);
Route::get('/formclasse', [App\Http\Controllers\ClasseController::class, 'formInscription']);
Route::post('/classe', [App\Http\Controllers\ClasseController::class, 'store']);
Route::get('/modifier-classe/{id}', [App\Http\Controllers\ClasseController::class, 'edit']);
Route::put('/modifier-classe/{id}', [App\Http\Controllers\ClasseController::class, 'update']);
Route::get('/supprimer-classe/{id}', [App\Http\Controllers\ClasseController::class, 'delete']);

Route::get('/niveau', [App\Http\Controllers\NiveauController::class, 'niveau']);
Route::get('/formNiveau', [App\Http\Controllers\NiveauController::class, 'formNiveau']);
Route::post('/niveau', [App\Http\Controllers\NiveauController::class, 'store']);
Route::get('/modifier-niveau/{id}', [App\Http\Controllers\NiveauController::class, 'edit']);
Route::put('/modifier-niveau/{id}', [App\Http\Controllers\NiveauController::class, 'update']);
Route::get('/supprimer-niveau/{id}', [App\Http\Controllers\NiveauController::class, 'delete']);

Route::get('/moyenne', [App\Http\Controllers\MoyenneController::class, 'niveau']);
Route::get('/formAjoutMoyenne', [App\Http\Controllers\MoyenneController::class, 'formNiveau']);
Route::post('/moyenne', [App\Http\Controllers\MoyenneController::class, 'store']);
Route::get('/modifier-moyenne/{id}', [App\Http\Controllers\MoyenneController::class, 'edit']);
Route::put('/modifier-moyenne/{id}', [App\Http\Controllers\MoyenneController::class, 'update']);
Route::get('/supprimer-moyenne/{id}', [App\Http\Controllers\MoyenneController::class, 'delete']);
Route::get('/recherche_moy', [App\Http\Controllers\MoyenneController::class, 'recherche_moy']);

Route::post('/contact', function () {
    $data = request(['name', 'email', 'phone', 'sujet', 'message']);

    Mail::to('abihomenyaa@gmail.com')
        ->send(new contactMail($data));
    return redirect('/contact')->with('flash', 'Message envoyé avec succès!');
});
require __DIR__ . '/auth.php';
