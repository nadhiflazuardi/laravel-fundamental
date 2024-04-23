<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list-menu/get-all-data', function () {
    return response()->json(
        [
            'info' => 'Data Berhasil didapatkan',
            'data' => [
                [
                    'makanan' => 'Soto Mie',
                    'harga' => 8000,
                ],
                [
                    'makanan' => 'Bakso Malang',
                    'harga' => 13000,
                ],
                [
                    'makanan' => 'Ketoprak',
                    'harga' => 15000,
                ],
            ]
        ]
    );
});

Route::get('/list-menu', function () {
    return "Ini adalah halaman yang menampilkan semua menu yang ada di Cafe Amandemy..";
});

Route::get('/list-menu/{food}/{price}', function ($food, $price) {
    return "Anda memilih makanan $food dengan harga $price";
});

