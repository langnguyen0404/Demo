@extends('layout')
@section('title','Chi Tiết')
@section('titlePage','Chi Tiết Sản Phẩm')
@section('main')
<div class="container_cart">
    <form action="{{route('themvaogiohang')}}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$sp->id}}">
        <div class="product-detail">
            <div class="product-image">
                <img src="{{ asset('uploaded/'.$sp->img)}}" alt="{{$sp->name}}">
                <input type="hidden" name="img" value="{{$sp->img }}">
            </div>
            <div class="product-info">
                <h2>{{$sp->name}}</h2>
                <input type="hidden" name="name" id="" value="{{$sp->name}}">
                <p>Mô tả chi tiết về sản phẩm. Sản phẩm này có những đặc điểm nổi bật và phù hợp cho...</p>
                <p>Số lượng: <input style="width: 50px;" type="number" name="quantity" id="" value="1" min="1"></p>
                <p>Giá: {{ number_format($sp->price, 0, ',', '.') }} VNĐ</p>
                <input type="hidden" name="price" id="" value="{{$sp->price}}">
                <button type="submit" style="text-decoration: none" class="order-button">Đặt Hàng</button>
                <button type="submit" style="text-decoration: none" class="order-button">Thêm Vào Giỏ Hàng</button>
            </div>
        </div>
    </form>
    <h3 style="text-align: center; font-weight: bold; color: #316b7d">Sản Phẩm Liên Quan</h3>

    <div class="related-products1">
        @foreach($splq as $sp)
        <div class="product1">
            <a href="{{route('sanphamchitiet',$sp->id)}}">
                <div class="product-image1">
                    <img src="{{ asset('uploaded/'.$sp->img)}}" alt="Product 2">
                </div>
            </a>
            <div class="product-info1">
                <a href="{{route('sanphamchitiet',$sp->id)}}">
                    <h4>{{$sp->name}}</h4>
                </a>
                <p>Giá: {{ number_format($sp->price, 0, ',', '.') }} VNĐ</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection