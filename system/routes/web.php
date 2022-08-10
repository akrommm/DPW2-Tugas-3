<?php

use Illuminate\Support\Facades\Route;

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
    return view('frontview.home');
});

Route::get('shop', function () {
    return view('frontview.shop');
});

Route::get('home', function () {
    return view('frontview.home');
});

Route::get('product', function () {
    return view('frontview.product');
});

Route::get('cart', function () {
    return view('frontview.cart');
});

Route::get('login', function () {
    return view('login');
});

Route::get('template', function () {
    return view('template.base');
});

Route::get('beranda', function () {
    return view('admin.beranda');
});

Route::get('kategori', function () {
    return view('admin.kategori');
});

Route::get('produk', function () {
    return view('admin.produk');
});

Route::get('promo', function () {
    return view('admin.promo');
});

Route::get('pelanggan', function () {
    return view('admin.pelanggan');
});

Route::get('supplier', function () {
    return view('admin.supplier');
});
