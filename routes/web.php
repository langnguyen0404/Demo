<?php

use Illuminate\Support\Facades\Route;

// thư mục là app nhưng sử dụng phải là App
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\ProductsController; 
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductsAdController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\UserADController;
use App\Http\Controllers\UsersController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sanpham', [ProductsController::class, 'list'])->name('sanpham');
Route::get('/sanpham/{product_id}', [ProductsController::class, 'detail'])->name('sanphamchitiet');
Route::get('/timkiem', [ProductsController::class, 'search'])->name('timkiem');
// Route::get('/chitiet/{id}', [ProductsController::class, 'detail'])->name('chitiet');
Route::get('/danhmuc/{category_id}', [ProductsController::class, 'getproductsByCategory'])->name('danhmuc');
Route::get('/gioithieu', [AboutController::class, 'about'])->name('gioithieu');
Route::get('/lienhe', [ContactController::class, 'contact'])->name('lienhe');
Route::get('/thanhtoan', [CartController::class, 'bill'])->name('thanhtoan');

Route::get('/giohang', [CartController::class, 'cart'])->name('giohang');
Route::post('/themvaogiohang', [CartController::class, 'addCart'])->name('themvaogiohang');
Route::get('/xoa/{id}', [CartController::class, 'delete'])->name('xoa');

Route::get('/taikhoan', [UsersController::class, 'user'])->name('taikhoan');
Route::post('/dangky', [UsersController::class, 'register'])->name('dangky');
Route::post('/dangnhap', [UsersController::class, 'login'])->name('dangnhap');
Route::get('/dangxuat', [UsersController::class, 'logout'])->name('dangxuat');

Route::get('/thongtin', [ProfileController::class, 'profile'])->name('thongtin');

// QUẢN TRỊ

Route::get('/quantri', [ProductsAdController::class, 'homeAD'])->name('homeAD');
Route::get('/quantri/sanpham', [ProductsAdController::class, 'ProAD'])->name('sanphamAD');

Route::post('/quantri/themsanpham', [ProductsAdController::class, 'AddPro'])->name('themsanpham');

Route::get('/quantri/xoasanpham/{id}', [ProductsAdController::class, 'DeletePro'])->name('xoasanpham');

Route::get('/quantri/bangcapnhat/{id}', [ProductsAdController::class, 'UpdateForm'])->name('bangcapnhat');
Route::post('/quantri/capnhatsanpham/{id}', [ProductsAdController::class, 'UpdatePro'])->name('capnhatsanpham');
Route::get('/quantri/theodoidonhang', [ShippingController::class, 'shipping'])->name('theodoidonhang');


// Route::get('/quantri/capnhat', [UpdateProController::class, 'UpdatePro'])->name('capnhat');
Route::get('/quantri/nguoidung', [UserADController::class, 'listUserAD'])->name('nguoidungAD');