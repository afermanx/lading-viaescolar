<?php

use Illuminate\Support\Facades\Route;
Route::namespace('Site')->group( function(){

    Route::get('/', 'homeController')->name('site.home');
    Route::get('/quem-somos', 'aboutController')->name('site.about');
    Route::get('/clientes', 'clientController')->name('site.client');
    Route::get('/funcionalidades', 'functionalitiesController')->name('site.functionalities');
    Route::get('/contatos', 'contactController')->name('site.contact');

});


Route::namespace('Blog')->group( function(){
    Route::get('/blog', 'blogController@index')->name('site.blog');
    Route::get('/noticia/{title}', 'blogController@news')->name('site.news');


});

//pages information
Route::fallback( function(){   // 404
    return view("Pages.maintenance.404");
});
