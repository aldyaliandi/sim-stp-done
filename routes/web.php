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

use Illuminate\Routing\Router;

Route::get('/', function () {
	return view('layanan');
});
// membuat login
Route::get('/login','AuthController@login')->name('login');
Route::get('/dashboard', 'DashboardController@index')->middleware('auth');
Route::get('/postlogin','AuthController@postlogin');

// logout
Route::get('/logout','AuthController@logout');

//melindungi supaya masuk tanpa login
Route::group(['middleware' => 'auth'],function(){

	Route::get('/' , 'PageController@home');
	Route::get('/index1' , 'PageController@home');
	Route::get('/tenant' , 'PageController@tenant');
	Route::get('/inkubator' , 'PageController@inkubator');
	Route::get('/hilirisasi' , 'PageController@hilirisasi');
	Route::get('/layanan' , 'PageController@layanan');
	Route::get('/kanban' , 'PageController@kanban');
	Route::get('/pengaturan' , 'PageController@pengaturan');

	// layanan Teknologi
	Route::get('/pesanlayanan' , 'LayananController@pesanlayanan');
	Route::get('/transaksilayanan' , 'LayananController@transaksilayanan');
	Route::get('/pendaftarlayanan' , 'LayananController@pendaftarlayanan');
	Route::get('/reportlayanan' , 'LayananController@reportlayanan');
	Route::get('/pengaturan' , 'LayananController@pengaturan');
	// //layanan teknologi
	 
	// Route::resource('/pesanlayanan' , 'PesanlayananController');
	// Route::resource('/transaksilayanan' , 'TransaksilayananController');
	// Route::resource('/reportlayanan' , 'ReportlayananController');

	//PENDAFTAR
	Route::resource('/layanan/pendaftarlayanan', 'LayananController');
	Route::post('/pendaftarlayanan/creatependaftar', 'LayananController@creatependaftar');
	Route::get('/pendaftarlayanan/{id}/edit', 'LayananController@edit');
	Route::post('/pendaftarlayanan/{id}/update', 'LayananController@update');
	Route::get('/pendaftarlayanan/{id}/delete','LayananController@delete');

	//PESANAN
	Route::resource('/layanan/pesanlayanan', 'LayananController');
	Route::post('/pesanlayanan/createpesan', 'LayananController@createpesan');
	Route::get('/pesanlayanan/{id}/editpesan', 'LayananController@editpesan');
	Route::post('/pesanlayanan/{id}/updatepesan', 'LayananController@updatepesan');
	Route::get('/pesanlayanan/{id}/deletepesan','LayananController@deletepesan');

	//TRANSAKSI
	Route::resource('/layanan/transaksilayanan', 'LayananController');
	// Route::post('/transaksilayanan/createtransaksi', 'LayananController@createtransaksi');
	// Route::get('/transaksilayanan/{id}/edittransaksi', 'LayananController@edittransaksi');
	// Route::post('/transaksilayanan/{id}/updatetransaksi', 'LayananController@updatetransaksi');
	Route::get('/transaksilayanan/{id}/deletetransaksi','LayananController@deletetransaksi');

	//PENGATURAN
	Route::resource('/layanan/pengaturan', 'LayananController');
	Route::post('/pengaturan/createuser', 'LayananController@createuser');
	Route::get('/pengaturan/{id}/editpengaturan', 'LayananController@editpengaturan');
	Route::post('/pengaturan/{id}/updatepengaturan', 'LayananController@updatepengaturan');
	Route::get('/pengaturan/{id}/deletepengaturan','LayananController@deletepengaturan');




	// menghubungkan halaman layanan teknologi ke data pendaftar
	Route::resource('/layanan/layanan', 'LayananController');
	Route::post('/layanan/creatependaftar', 'LayananController@creatependaftar');
	Route::post('/layanan/createpesan', 'LayananController@createpesan');

	//membuat upload gambar dan profile pendaftar
	Route::get('/pesanlayanan/{id}/profile','LayananController@profile');

	//membuat report excel dan pdf
	Route::get('pesanlayanan/export/', 'LayananController@export');
	Route::get('pesanlayanan/exportpdf/', 'LayananController@exportpdf');

	//membuat report excel dan pdf transaksi
	Route::get('transaksilayanan/exportexcel/', 'LayananController@exportexcel');
	Route::get('transaksilayanan/exportpdftransaksi/', 'LayananController@exportpdftransaksi');

	//membuat report excel dan pdf pendaftar
	Route::get('pendaftarlayanan/exportexcelpendaftar/', 'LayananController@exportexcelpendaftar');
	Route::get('pendaftarlayanan/exportpdfpendaftar/', 'LayananController@exportpdfpendaftar');

	//membuat report excel dan pdf pengaturan akun
	Route::get('pengaturan/exportexcelpengaturan/', 'LayananController@exportexcelpengaturan');
	Route::get('pengaturan/exportpdfpengaturan/', 'LayananController@exportpdfpengaturan');

	// menambahkan chart
	// Route::get('pendaftarlayanan/grafik', 'LayananController@grafik');

//akhir melindungi supaya masuk tanpa login	
});

