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

Route::get('/', function () {
	return view('landing-page');
});
// Route::get('pagenotfound', ['as' => 'notfound', 'uses' => 'HomeController@pagenotfound']);
Route::get('test', 'HomeController@getChart');
Route::post('/', 'HomeController@contactme')->name('contactme');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('profile/', 'HomeController@profile')->middleware('auth');
Auth::routes();
Route::get('home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('ppbjcabang', 'BppjController@viewppbjcabang')->name('viewppbjcabang');
Route::get('ppbjpusat', 'BppjController@viewppbjpusat')->name('viewppbjpusat');
Route::get('/info','HomeController@info');

Route::middleware(['kadiv'])->group(function () {
	Route::get('/monitoring', 'MonitoringController@allMonitoring')->name('allMonitoring');
});
Route::middleware(['publicpeople'])->group(function () {
	Route::get('userspeople', 'HomeController@userpeople')->name('userpeople');
});

Route::middleware(['admin']&&['kadiv'])->group(function () {
	Route::get('/allPegawai', 'PegawaiController@allPegawai')->name('allPegawai')->middleware('auth');
	Route::get('/allUnit', 'UnitKerjaController@allUnit')->name('allUnit')->middleware('auth');
	Route::get('/alluser', 'HomeController@alluser')->name('alluser')->middleware('auth');
	Route::get('/viewAlldata/{id}', 'MonitoringController@viewAlldata')->name('viewAlldata')->middleware('auth');
	Route::get('/alljenis', 'PengadaanController@alljenis')->name('alljenis')->middleware('auth');
	Route::get('/allsaran', 'HomeController@allsaran')->name('allsaran')->middleware('auth');
	Route::get('/viewsaran/{id}', 'HomeController@viewsaran')->middleware('auth');
	Route::get('/{ppbjterselesaikan}', 'BppjController@ppbjselesai', 
		function($ppbjterselesaikan) {
				return redirect::to('ppbjterselesaikan');
			})->where(['ppbjterselesaikan' => 'ppbjbelumselesai|ppbjterselesaikan|ppbjterselesaikan2'
		]);
});

Route::middleware(['admin', 'auth'])->group(function () {
	Route::get('/admin', 'HomeController@index')->name('home');
	Route::post('realisasiPpbj', 'BppjController@prosesrealisasi')->name('prosesrealisasi');
	Route::get('/allPpbj', 'BppjController@allPpbj')->name('allPpbj')->middleware('auth');
	Route::get('/inputPpbj', 'BppjController@addPpbj');
	Route::get('inputPpbjs/{id}', 'PenugasanController@addPpbjs');
	Route::post('savePpbjs/{id}', 'PenugasanController@savePpbjs');
	Route::post('/savePpbj/', 'BppjController@savePpbj');
	Route::get('/editPpbj/{id}','BppjController@editPpbj')->name('editPpbj');
	Route::post('/editPpbj/', 'BppjController@updatePpbj')->name('updatePpbj');
	Route::get('/allPpbj/delete/{id}','BppjController@delete_ppbj')->name('delete_ppbj');
	Route::get('/inputPegawai', 'PegawaiController@addPegawai');
	
	Route::post('/savePegawai', 'PegawaiController@savePegawai');
	Route::get('/editPegawai/{id_pegawai}', 'PegawaiController@editPegawai')->name('editPegawai');
	Route::post('/editpegawai', 'PegawaiController@updatePegawai');

	Route::get('/inputUnit', 'UnitKerjaController@addUnit');
	Route::post('/saveUnit', 'UnitKerjaController@saveUnit');
	Route::get('/editUnit/{id_unit}','UnitKerjaController@editUnit')->name('editUnit');
	Route::post('editUnit', 'UnitKerjaController@updateUnit');

	Route::get('/edituser/{id}','HomeController@edituser');
	Route::post('/edituser/', 'HomeController@updateuser');

	Route::get('inputpengadaan', 'PengadaanController@input');
	Route::post('savepengadaan', 'PengadaanController@save');
	Route::get('allpengadaan', 'PengadaanController@all')->name('allpengadaan');
	Route::get('/editpengadaan/{id}', 'PengadaanController@edit')->name('editpengadaan');
	Route::post('editpengadaan', 'PengadaanController@update');
	Route::get('viewppbj/{id_unit}', 'UnitKerjaController@viewPpbj')->name('viewPpbj');
	Route::get('/unitcabang', 'UnitKerjaController@allCabang');
	Route::get('viewppbj/unitcabang/{id_unit}', 'UnitKerjaController@viewPpbj')->name('viewPpbjcabang');
	Route::get('/unitpusat', 'UnitKerjaController@allPusat');
	Route::get('viewppbj/unitpusat/{id_unit}', 'UnitKerjaController@viewPpbj')->name('viewPpbjpusat');
	Route::get('viewppbj/items/{id_pengadaan}', 'PengadaanController@viewPpbj')->name('viewPpbjitems');
	Route::get('pegawai/ppbj/{random}/{namapegawai}', 'PegawaiController@ppbjPegawai')->name('ppbjPegawai');
	Route::get('pegawai/ppbj/{no_ppbj}', 'PegawaiController@ppbjPegawaigan')->name('ppbjPegawais');
});
Route::middleware(['kasubag', 'auth'])->group(function () {
	Route::get('/receivePpbj', 'PenugasanController@receivePpbj')->name('receivePpbj');
	Route::get('/receivePpbj/approve/', 'PenugasanController@ppbjApprove')->name('ppbjApprove');
	Route::get('/receivePpbj/noapprove/', 'PenugasanController@ppbjnoApprove')->name('ppbjnoApprove');
	Route::get('addAsignment/{id}', 'PenugasanController@addAsignment')->name('addAsignment');
	Route::post('saveAssignment', 'PenugasanController@saveAssignment')->name('saveAsignment');
	Route::get('editassignmentPpbj/{id}', 'PenugasanController@editassignmentPpbj');
	Route::post('updateassignmentPpbj/{id}', 'PenugasanController@updateassignmentPpbj')->name('updateassignment');
});