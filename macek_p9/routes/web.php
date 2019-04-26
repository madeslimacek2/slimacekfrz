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
    return view('welcome');
});

Route::get('HW', function () {
    return ('Hello World!');
});

Route::get('/welcome', function () {
	echo "Welcome";
});



// Ini adalah jenis method dari Route
Route::get('/index', function () {
echo "Uji Coba route dengan method GET";
});

Route::post('/store', function () {
// sintak untuk menyimpan data
});

Route::put('/update', function () {
// sintak untuk upadte data
});

Route::delete('/delete', function () {
// sintak untuk menghapus data
});

Route::match(['get','post'],'/welcome', function () {
//
});

Route::any('/welcome', function () {
//
});



Route::get('/show/{id}', function ($id) {
echo "Nilai Parameter Adalah ".$id;
});


Route::get('/show/{id?}', function ($id=1) {
echo "Nilai Parameter Adalah ".$id;
});


Route::get('/edit/{nama}', function ($nama) {
echo "Nilai Parameter Adalah ".$nama;
})->where('nama','[A-Za-z]+');


Route::get('/index', function () {
echo "<a href='".route('create')."'>Akses Route dengan nama </a>";
});

Route::get('/create', function () {
echo "Route diakses menggunakan nama";
})->name('create');

Route::get('/produk/show', 'produkController@show');

Route::get('/halaman', function() {
	$title = 'Harry Potter';
	$konten = 'Harry Potter is a series of fantasy novels written by British author J. K. Rowling. The novels chronicle the lives of a young wizard, Harry Potter, and his friends Hermione Granger and Ron Weasley, all of whom are students at Hogwarts School of Witchcraft and Wizardry. The main story arc concerns Harry is struggle against Lord Voldemort, a dark wizard who intends to become immortal, overthrow the wizard governing body known as the Ministry of Magic, and subjugate all wizards and Muggles (non-magical people).';
	return view('konten.halaman', compact('title','konten'));
});


Route::get('/pelanggan', 'pelangganController@index');

Route::resource('produk','produkControllerA');

Route::get('/produk', 'produkController@index');

Route::get('/store', 'produkController@store');

Route::get('/update', 'produkController@update');

Route::get('/delete', 'produkController@delete');



