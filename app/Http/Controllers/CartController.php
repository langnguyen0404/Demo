<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    

    public $items = [];
    public $total_quantity = 0;
    public $total_price = 0;
    // Thêm sản phẩm
    // public function __construct()
    // {
    //     $this->items = session('cart') ? session('cart'):[]; // nếu có thì lấy session('cart') nếu không session('cart') = [] (rỗng)
    // }
    // public function list() {
    //     return $this->items;
    // }
    public function cart(){
        // about là lấy tên sau ::class
      
        $listCart = session('cart',[]);
        // session()->forget('cart');

        // dd($listCart);
        return view('cart', compact('listCart'));
    }
    public function addCart(Request $request) {
        $item = [
            'productID' => $request->id,
            'name' => $request->name,
            'img' => $request->img,
            'price' => $request->price,
            'quantity' => $request->quantity,
        ];
        
        // Lấy giỏ hàng hiện tại từ session, nếu không tồn tại thì khởi tạo một mảng rỗng
        $cart = session('cart', []);
        
        // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa (dựa trên productID)
        $found = false;
        foreach ($cart as &$cartItem) {
            if ($cartItem['productID'] == $item['productID']) {
                // Nếu sản phẩm đã tồn tại, cập nhật số lượng
                $cartItem['quantity'] += $item['quantity'];
                $found = true;
                break;
            }
        }
        
        if (!$found) {
            // Nếu sản phẩm chưa tồn tại, thêm vào giỏ hàng
            $cart[] = $item;
        }
        // $cart[] = $item;
        // Cập nhật session với giỏ hàng mới
        session(['cart' => $cart]);
        return redirect()->route('giohang');
    }
    public function delete($productId)
{
    // Lấy giỏ hàng từ session
    $cart = session('cart', []);

    // Tìm và xóa sản phẩm khỏi giỏ hàng
    foreach ($cart as $index => $item) {
        if ($item['productID'] == $productId) {
            unset($cart[$index]);
            // Reset các key của mảng để tránh lỗi key không liên tục
            $cart = array_values($cart);
            break;
        }
    }

    // Cập nhật lại giỏ hàng trong session
    session(['cart' => $cart]);

    // Điều hướng hoặc trả về phản hồi thích hợp
    return redirect()->route('giohang');
}

    
    public function bill(){
        $listCart = session('cart',[]);
        return view('bill', compact('listCart'));
    }
}