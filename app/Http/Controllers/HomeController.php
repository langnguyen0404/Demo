<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsModels;

class HomeController extends Controller
{
    public function index(){
        $New = ProductsModels::NewProducts(6);
        $BestSeller = ProductsModels::BestSellerProducts(6);
        $Views = ProductsModels::ViewsProducts(6);
        return view('home',['New'=>$New,'BestSeller'=>$BestSeller,'Views'=>$Views]);
    }
}