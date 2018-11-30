<?php


Route::group(['namespace' => 'HalamanDepan'], function() {
    Route::get('/','BerandaController@index')->name('beranda');
    Route::get('/berita','BeritaController@index')->name('berita');
    Route::get('/post/{berita}','PostController@berita')->name('post');
});



Route::group(['namespace' => 'admin'], function() {
    Route::get('admin/beranda','BerandaController@index')->name('admin');
    Route::resource('admin/berita','BeritaController');
    Route::resource('admin/kategori','KategoriController');
    Route::resource('admin/petugas','PetugasController');
    Route::get('admin/laporan','LaporanMasuk@index')->name('laporan');
    Route::resource('admin/tag','TagController');
    Route::get('admin/sebaran-laporan','SebaranController@index')->name('peta');
    Route::get('admin-masuk', 'Auth\LoginController@showLoginForm')->name('adminlogin');
    Route::post('admin-masuk', 'Auth\LoginController@login')->name('adminlogin');
});



Route::get('admin/peta', function () {
    return view('DashboardAdmin.kategori.peta');
})->name('DashboardAdmin.kategori.peta');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/home/laporan', 'LaporanController');
