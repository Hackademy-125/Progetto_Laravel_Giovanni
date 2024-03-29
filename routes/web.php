<?php

use App\Http\Controllers\ComicController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;



Route::get('/',[PublicController::class,'welcome'] )->name('welcome');

route::get('index-comics',[ComicController::class,'indexComics'])->name("index_comics");

Route::get('/index-comics/comic/{title}',[comicController::class,'detailComic'])->name('detail_comics');

Route::get("/index-films",[PublicController::class,"indexFilms"])->name("index_films");

Route::get("/index-films/film/{title}",[PublicController::class,"detailFilm"])->name("detail_film");

Route::get("/contact-us",[PublicController::class,"contactUs"])->name("contact_us");

// Rotta post per invio dati nel form contatti
Route::post('/submit-contact',[PublicController::class, "submitContact"])->name('submit_contact');