<?php

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

Auth::routes();
Route::get('/images/{filename}', function ($filename)
{
	$path = storage_path('sampul') . '/' . $filename;
	$file = File::get($path);
	$type = File::mimeType($path);
	$response = Response::make($file);
	$response->header("Content-Type", $type);
	return $response;
});

Route::get('/home/{filename}', function ($filename)
{
	$path = storage_path('home') . '/' . $filename;
	$file = File::get($path);
	$type = File::mimeType($path);
	$response = Response::make($file);
	$response->header("Content-Type", $type);
	return $response;
});

Route::get('/gamvar/{filename}', function ($filename)
{
	$path = storage_path('gamvar') . '/' . $filename;
	$file = File::get($path);
	$type = File::mimeType($path);
	$response = Response::make($file);
	$response->header("Content-Type", $type);
	return $response;
});

Route::delete('beritas', ['as'=>'beritas.deleteSelectedBerita', 'uses'=>'CrudController@deleteSelectedBerita']);

Route::delete('adminz', ['as'=>'adminz.deleteSelectedAdminz', 'uses'=>'CrudController@deleteSelectedAdminz']);
Route::delete('berita_add', ['as'=>'beritas.deleteSelectedBeritaAdd', 'uses'=>'CrudController@deleteSelectedBerita']);

Route::get('/gambar_home','CrudController@allgambar');
Route::get('/panel_gambar','CrudController@panel_gambar');
Route::post('/save/gambar_home','CrudController@save_gambar');
Route::get('gambar/delete/{id}','CrudController@deletegambar')->middleware('auth');


Route::get('/footer/all','CrudController@allfooter');
Route::get('footer/delete/{id}','CrudController@deletefooter')->middleware('auth');
Route::post('save/footer','CrudController@savefooter')->middleware('auth');

Route::get('/' , 'CrudController@index');
Route::get('/produk', 'CrudController@produk');
Route::get('/about', 'CrudController@about');
Route::get('/partner', 'CrudController@partner');
Route::get('/contact', 'CrudController@map');

Route::get('/about/all','CrudController@allabout');
Route::get('/panel_footer','CrudController@panel_footer');
Route::get('about/delete/{id}','CrudController@deleteabout')->middleware('auth');
Route::post('save/about','CrudController@saveabout')->middleware('auth');



Route::get('/add', 'CrudController@create')->middleware('auth');
Route::get('/produk/all', 'CrudController@allproduk')->middleware('auth');
Route::get('produk/edit/{id}','CrudController@editproduk')->middleware('auth');
Route::get('produk/delete/{id}','CrudController@deleteproduk')->middleware('auth');
Route::post('save/produk','CrudController@saveproduk')->middleware('auth');
Route::post('save/update/produk','CrudController@save_update_produk')->middleware('auth');

Route::get('/panel_about','CrudController@panel_about');
Route::post('post/about','CrudController@post_about');
/*Route::post('/about/update' ,'CrudController@update_about');
*/Route::get('add_about/{id}','CrudController@add_about');
Route::post('/update/about','CrudController@update_about');

Route::post('post/berita','CrudController@post_berita')->middleware('auth');
Route::post('/tambah_berita/update','CrudController@update_berita')->middleware('auth');
Route::get('edit_berita/edit/{id}','CrudController@edit_berita')->middleware('auth');
Route::post('tambah_berita/edit/update','CrudController@update_berita')->middleware('auth');
Route::get('tambah_berita/delete/{$id}','CrudController@delete_berita')->middleware('auth');
Route::get('/data_berita','CrudController@data_berita')->middleware('auth');
Route::get('/delete/berita/{id}','CrudController@delete_berita')->middleware('auth');

Route::get('/panel_produk','CrudController@panel_produk')->middleware('auth');
Route::get('/edit_produk','CrudController@edit_produk')->middleware('auth');
Route::get('/panel_about','CrudController@panel_about')->middleware('auth');

Route::get('delete/{id}', 'CrudController@destroy')->middleware('auth');
Route::get('deleteAll', 'CrudController@deleteAll')->middleware('auth');
Route::get('berita/search','CrudController@search_berita')->middleware('auth');
Route::get('admin/search','CrudController@search_admin')->middleware('auth');


Route::group(['middleware' => 'admin'], function(){
Route::post('/tambah_admin' ,'CrudController@tambah_admin');
Route::get('/home', 'CrudController@PanelAdmin');

Route::get('/admin', 'CrudController@PanelAdmin');
Route::post('/tambah_admin/post','CrudController@post_admin');
Route::post('/tambah_admin/update','CrudController@update_admin');
Route::get('admin/edit/{id}','CrudController@edit_admin');
Route::get('admin/delete/{id}','CrudController@delete_admin');
Route::get('/data_admin','CrudController@data_admin');

});
