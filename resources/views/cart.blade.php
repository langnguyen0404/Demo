@extends('layout')
@section('title','Giỏ Hàng')
@section('titlePage','Giỏ Hàng')
@section('main')

<body class="body5">
    
    <div class="container_cart5">
    @for ($i = 0; $i < count($listCart); $i++)
        <div class="cart-item5" data-product-id="1">
            <div class="product-image5">
                <img src="uploaded/{{$listCart[$i]['img']}}" alt="Product 1">
            </div>
            <div class="product-info5">
                <h4>{{$listCart[$i]['name']}}</h4>
            </div>
            <div class="product-info5">
                <p>Giá: {{number_format($listCart[$i]['price'], 0, ',', '.')}} VND</p>
            </div>
            <div class="quantity5">
                {{-- <button class="decrease-btn5">-</button> --}}
                <span class="quantity-value5">Số lượng: {{$listCart[$i]['quantity']}}</span>
                {{-- <button class="increase-btn5">+</button> --}}
            </div>
            <div class="product-actions5">
                <a href="{{ route('xoa', $listCart[$i]['productID']) }}"  class="remove-btn5">Xóa</a>
            </div>
        </div>
    @endfor

        <!-- Add more cart items as needed -->

        <a href="/" class="continue-btn5">Tiếp Tục Đặt Hàng</a>
        <a href="{{route('thanhtoan')}}" class="continue-btn6">Thanh Toán</a>
    </div>
</body>
@endsection