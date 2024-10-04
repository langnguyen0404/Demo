<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsModels;
use App\Models\CategoriesModels;

class ProductsController extends Controller
{
    
    
    public function list()
    {
        $All = ProductsModels::AllProducts()->paginate(12);
        $Category = CategoriesModels::AllCategories();
        return view('products.list', compact('All', 'Category'));
    }
    public function getproductsByCategory(Request $request)
    {
        $All = ProductsModels::where('category_id',$request->category_id)->paginate(12);
        $Category = CategoriesModels::AllCategories();
        $search = $request->input('query');
        $Category_id = $request->input('category_id');
        return view('products.list', compact('Category','All','search','Category_id'));
    }
    public function search(Request $request)
    {
        $search = $request->input('query');
        // $Search = ProductsModels::
        $Category = CategoriesModels::AllCategories();
        $Category_id = $request->input('category_id');
        $All = ProductsModels::AllProducts()->where('name', 'like', '%' . $search . '%')->paginate(12);
        return view('products.list', compact('Category','All','search','Category_id'));
    }
    public function detail(Request $request) {
        $sp = ProductsModels::find($request->product_id);
        $splq = ProductsModels::where('category_id',$sp->category_id)->where('id','<>',$sp->id)->limit(3)->get();
        return view('products.detail',compact('sp','splq'));
    }
    
    
}