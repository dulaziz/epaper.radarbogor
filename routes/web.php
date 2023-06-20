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
    return view('home.index');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/showEpaper', function () {
    return view('home.page.showEpaper.index');
});


//Page
Route::get('/epaperList', function () {
    return view('home.page.epaperList.index');
});
Route::get('/profile/detail', function () {
    return view('home.page.profile.detail.index');
});
Route::get('/profile/edit', function () {
    return view('home.page.profile.edit.index');
});

//Order
Route::get('/order', function () {
    return view('dashboard.page.order.index');
});

//Order
Route::get('/pricing', function () {
    return view('home.page.pricing.index');
});

//Member
Route::get('/member', function () {
    return view('dashboard.page.member.index');
});
Route::get('/member/addMember', function () {
    return view('dashboard.page.member.addMember');
});
Route::get('/member/editMember', function () {
    return view('dashboard.page.member.editMember');
});

//Product
Route::get('/product', function () {
    return view('dashboard.page.product.index');
});
Route::get('/product/addProduct', function () {
    return view('dashboard.page.product.addProduct');
});
Route::get('/product/editProduct', function () {
    return view('dashboard.page.product.editProduct');
});

//Auth
Route::get('/login', function () {
    return view('home.page.auth.login');
});
Route::get('/register', function () {
    return view('home.page.auth.register');
});
