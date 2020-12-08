<?php
use LaGranLinea\User;
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

Route::get('/','PaginasController@index')->name('inicio');


Auth::routes(['verify' => true]);


Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::resource('/categoria','CategoriasController');
Route::get('/obtenerCategorias','CategoriasController@obtenerCat')->name('datatables.categorias');

Route::resource('/usuarios','UsersController');
Route::get('/obtenerUsers','UsersController@datatable')->name('datatables.users');
Route::put('/updateMyData/{usuario}','UsersController@updateOurData')->name('updatemydata.users');

Route::resource('/posts','PublicacionController');
Route::get('/obtenerPosts','PublicacionController@datatable')->name('datatables.posts');
Route::get('/postsUser/{usuario}','PublicacionController@myPostsDatatable')->name('usersdatatables.posts');
Route::get('/myPosts/{usuario}','PublicacionController@myPosts')->name('posts.myposts');

Route::resource('/evento','EventoController');
Route::get('/eventos/{evento}','EventoController@detalle')->name('eventos');
Route::get('/obtenerEventos','EventoController@datatable')->name('datatables.eventos');

Route::resource('/catforo','ForumCategorias');
Route::get('/obtenerCatForo','ForumCategorias@datatable')->name('datatables.fcategorias');

Route::resource('/publicaciones','PublicacionesController');
Route::get('/blog/{publicacion}','PublicacionesController@publicacion');
Route::get('/categorias/{publicacion}','PublicacionesController@categoria');
Route::get('/tag/{tag}','PublicacionesController@tag');
Route::get('/busqueda','PublicacionesController@palabra');

Route::resource('/contacto','ContactoController');
Route::resource('/contactos','ContactoController');

/* Rutas del menú principal*/
Route::get('/curso','PaginasController@curso')->name('curso');
Route::get('/nosotros','PaginasController@nosotros')->name('nosotros');
Route::get('/servicios','PaginasController@servicios')->name('servicios');
Route::get('/temas','PublicacionesController@index')->name('temas');
Route::get('/foro','PaginasController@foro')->name('foro');
Route::get('/mi-historia','PaginasController@historia')->name('historia');

Route::get('/Has-sentido-que-tu-vida-es-un-tunel-sin-salida','PaginasController@preguntauno')->name('preguntauno');
Route::get('/Te-has-limitado-en-practicar-alguna-actividad-porque-crees-que-no-serias-el-mejor-o-no-tienes-futuro-en-ello','PaginasController@preguntados')->name('preguntados');
Route::get('/Cuantas-veces-has-evadido-de-responder-aquello-que-te-gusta-o-disgusta-porque-sientes-que-no-te-conoces','PaginasController@preguntatres')->name('preguntatres');
Route::get('/Has-llegado-a-pensar-que-direccion-debes-darle-a-tu-vida','PaginasController@preguntacuatro')->name('preguntacuatro');
Route::get('/Has-sentido-miedo-a-que-tu-vida-cambie-despues-de-la-contingencia-sanitaria','PaginasController@preguntacinco')->name('preguntacinco');

Route::get('/angelica','PaginasController@angelica')->name('angelica');


