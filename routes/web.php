<?php

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

Route::get('/', function () {
    return view('home');
});

//Afficher la lsite de tous les mangas
Route::get('/listerMangas', 'MangaController@getMangas');

//lister tous les mangas d'un genre selectionné
Route::get('/listerMangasGenre/{idGenre}', 'MangaController@getMangasGenre');

//Afficher la liste déroulante des genres
Route::get('/listerGenres/{erreur?}','GenreController@getGenres');

//Lister tous les mangas d'un genre selectionné
Route::post('/listerMangasGenre', 'MangaController@getMangasGenre');

//afficher un manga pour pouvoir éventuellement le modifier
Route::get('/modifierManga/{id}', 'MangaController@updateManga');

//Enregistrer la mise à jour d'un manga
Route::post('/validerManga', 'MangaController@validateManga');

//Ajouter un manga
Route::get('/ajouterManga', 'MangaController@addManga');


//Supprime un manga
Route::get('/supprimerManga/{id}', 'MangaController@deleteManga');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
