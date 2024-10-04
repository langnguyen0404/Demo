<?php

namespace App\Http\Controllers;

use App\Models\CategoriesModels;
use App\Models\ProductsModels;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class ProductsAdController extends Controller
{
    public function homeAD(){
        // products là thư mục chưa list
        return view('admin.HomeAD');
    }
    public function ProAD(){
        // products là thư mục chưa list
        $categories = CategoriesModels::orderBy('name','ASC')->get();
        $products=ProductsModels::orderBy('id','DESC')->paginate(10);
        return view('admin.ProductsAD',compact('categories','products'));
    }
    public function AddPro(Request $request) {
        $data = $request->validate([
                'category_id'=>'required|integer|exists:categories,id',
                'img'=>'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'name'=>'required|string|max:255',
                'price'=>'required|numeric',
            //     'quantyti'=>'nullable|numeric',
            //     'sold'=>'nullable|numeric',
            ]);  
        if ($request -> hasFile('img')) {
            $imgName = time().'.'.$request->img->extension();
            $request->img->move(public_path('uploaded'),$imgName);
            $data['img']=$imgName;
        }
        $products = ProductsModels::create($data);
        $categories = CategoriesModels::orderBy('name','ASC')->get();
        $products=ProductsModels::orderBy('id','DESC')->paginate(10);
        return view('admin.ProductsAD',compact('categories','products'));
    }
    
    public function DeletePro($id){
        $product = ProductsModels::find($id);
        $imgpath = "uploaded/".$product->img;
        if (file_exists($imgpath)) {
            unlink($imgpath);
        }
        $product->delete();
        return redirect()->route('sanphamAD');
    }

    public function UpdateForm($id){
        // products là thư mục chưa list
        $categories = CategoriesModels::orderBy('name','ASC')->get();
        $products=ProductsModels::orderBy('id','DESC')->paginate(10);
        $product = ProductsModels::find($id);
        return view('admin.UpdateForm',compact('categories','products','product'));
    }
    public function UpdatePro(Request $request){
        $data = $request->validate([
            'category_id'=>'required|integer|exists:categories,id',
            'img'=>'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name'=>'required|string|max:255',
            'price'=>'required|numeric',
            'quantity'=>'nullable|numeric',
            'id'=>'required|integer',
        //     'sold'=>'nullable|numeric',
        // dd($request)
        ]);  
        
            
        $id = $request->id;
        $product = ProductsModels::findOrFail($id);

        if ($request -> hasFile('img')) {
        $imgName = time().'.'.$request->img->extension();
        $request->img->move(public_path('uploaded'),$imgName);
        $data['img']=$imgName;
        // 
        $oldImgPath = public_path("uploaded/".$product->img);
            if (file_exists($oldImgPath)) {
                unlink($oldImgPath);
            }
        }
        $product->update($data);
        
       return redirect()->route('sanphamAD');
    }
    
}