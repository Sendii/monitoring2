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
Route::get('chart', 'HomeController@getChart')->middleware('auth');
Route::post('/', 'HomeController@contactme')->name('contactme');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('profile/', 'HomeController@profile')->middleware('auth');
Auth::routes();
Route::get('home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('ppbjcabang', 'BppjController@viewppbjcabang')->name('viewppbjcabang');
Route::get('ppbjpusat', 'BppjController@viewppbjpusat')->name('viewppbjpusat');
Route::get('/info','HomeController@info');

Route::middleware(['kadiv'], 'auth')->group(function () {
	Route::prefix('monitoring')->group(function() {
		Route::get('/', 'MonitoringController@allMonitoring')->name('allMonitoring');
		Route::get('ppbj/no_spph/{no_spph2}', 'MonitoringController@nossph2')->name('satukontrak2');
	});
});
Route::middleware(['publicpeople'])->group(function () {
	Route::get('userspeople', 'HomeController@userpeople')->name('userpeople');
});

Route::middleware([['admin']||['kadiv'], 'auth'])->group(function () {
	Route::get('/allPegawai', 'PegawaiController@allPegawai')->name('allPegawai');
	Route::get('/allUnit', 'UnitKerjaController@allUnit')->name('allUnit');
	Route::get('/alluser', 'HomeController@alluser')->name('alluser');
	Route::get('/viewAlldata/{id}', 'MonitoringController@viewAlldata')->name('viewAlldata');
	Route::get('/allPpbj', 'BppjController@allPpbj')->name('allPpbj');
	Route::get('/alljenis', 'PengadaanController@alljenis')->name('alljenis');
	Route::get('/allsaran', 'HomeController@allsaran')->name('allsaran');
	Route::get('/viewsaran/{id}', 'HomeController@viewsaran');

	Route::get('ppbjbelumselesai', 'BppjController@ppbjselesai');
	Route::get('ppbjbelumselesaiie/{no_kon}', 'BppjController@kontrakbelumselesai');
	Route::get('ppbjbelumselesaii/{no_kon2}', 'BppjController@kontrakbelumselesai2');
	Route::get('ppbjbelumselesaiii/{no_kon3}', 'BppjController@kontrakbelumselesai3');
	Route::get('ppbjbelumselesaie/{vendor}', 'BppjController@unvendor');
	Route::get('ppbjbelumselesaiee/{vendor2}', 'BppjController@unvendor2');
	Route::get('ppbjbelumselesaieee/{vendor3}', 'BppjController@unvendor3');


	Route::get('ppbjterselesaikan', 'BppjController@ppbjselesai');
	Route::get('ppbjterselesaikan/{no_kon}', 'BppjController@kontrakselesai');
	Route::get('ppbjterselesaikans/{no_kon2}', 'BppjController@kontrakselesai2');
	Route::get('ppbjterselesaikanss/{no_kon3}', 'BppjController@kontrakselesai3');
	Route::get('ppbjterselesaikanse/{vendor}', 'BppjController@vendor');
	Route::get('ppbjterselesaikansee/{vendor2}', 'BppjController@vendor2');
	Route::get('ppbjterselesaikanseee/{vendor3}', 'BppjController@vendor3');

	Route::get('ppbj/kont1/{no_kon}', 'BppjController@kontrakselesai');
	Route::get('ppbj/kont2/{no_kon2}', 'BppjController@kontrakselesai2');
	Route::get('ppbj/kont3/{no_kon3}', 'BppjController@kontrakselesai3');
	Route::get('ppbj/vend1/{vendor}', 'BppjController@vendor');
	Route::get('ppbj/vend2/{vendor2}', 'BppjController@vendor2');
	Route::get('ppbj/vend3/{vendor3}', 'BppjController@vendor3');

	Route::get('ppbjselesai/{id_pegawai}', 'BppjController@pegawai')->name('viewppbjPegawai');
	Route::get('showppbj/{no_ppbj}', 'BppjController@ppbj');
	// Route::get('ppbjbelumselesai/{no_kon}', 'BppjController@kontrakselesai');

	Route::get('ppbj9hari/{namapegawai}', 'PegawaiController@sd9');
	Route::get('ppbjL9hari/{namapegawai}', 'PegawaiController@ld9');
	Route::get('ppbjK9hari/{namapegawai}', 'PegawaiController@kd9');
});

Route::middleware(['admin'], ['auth'])->group(function () {
	Route::get('/admin', 'HomeController@index')->name('home');
	Route::post('realisasiPpbj', 'BppjController@prosesrealisasi')->name('prosesrealisasi');
	Route::get('/allPpbj/kd9', 'BppjController@allPpbjkd9')->name('allPpbjkd9');
	Route::get('/allPpbj/sd9', 'BppjController@allPpbjsd9')->name('allPpbjsd9');
	Route::get('/allPpbj/ld9', 'BppjController@allPpbjld9')->name('allPpblkd9');
	Route::get('/inputPpbj', 'BppjController@addPpbj');
	Route::post('/savePpbj/', 'BppjController@savePpbj');
	Route::get('inputPpbjs/{id}', 'PenugasanController@addPpbjs');
	Route::post('savePpbjs/{id}', 'PenugasanController@savePpbjs');
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
	Route::get('viewppbj/items/{namapengadaan}', 'PengadaanController@viewPpbj')->name('viewPpbjitems');
	Route::get('pegawai/ppbjs/{namapegawai}', 'PegawaiController@ppbjPegawai')->name('ppbjPegawai');
	Route::get('pegawai/ppbj/{no_ppbj}', 'PegawaiController@ppbjPegawaigan')->name('ppbjPegawais');
});
Route::middleware([['kasubag']||['admin'], 'auth'])->group(function () {
	Route::get('/receivePpbj', 'PenugasanController@receivePpbj')->name('receivePpbj');
	Route::get('/receivePpbj/approve/', 'PenugasanController@ppbjApprove')->name('ppbjApprove');
	Route::get('/receivePpbj/noapprove/', 'PenugasanController@ppbjnoApprove')->name('ppbjnoApprove');
	Route::get('addAsignment/{id}', 'PenugasanController@addAsignment')->name('addAsignment');
	Route::post('saveAssignment', 'PenugasanController@saveAssignment')->name('saveAsignment');
	Route::get('editassignmentPpbj/{id}', 'PenugasanController@editassignmentPpbj');
	Route::get('editassignmentsPpbj/{id}', 'PenugasanController@editassignmentPpbj');
	Route::post('updateassignmentPpbj/{id}', 'PenugasanController@updateassignmentPpbj')->name('updateassignment');
});