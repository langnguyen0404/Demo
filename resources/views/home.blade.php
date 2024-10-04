@extends('layout')
@section('title','Basketball Zone')
@section('titlePage','Trang Chủ')
@section('main')
<div class="container">
    <h2>Sản Phẩm Mới</h2>
    <div class="product-box">
        @foreach ($New as $product)
        <div class="product">
            <a class="pro" href="{{route('sanphamchitiet',$product->id)}}">
                <img src="{{ asset('uploaded/'.$product->img)}}" alt="" />
            <h3>{{$product -> name}}</h3>
            </a>
            <p>{{ number_format($product->price, 0, ',', '.') }} VNĐ</p>
        </div>
        @endforeach
        
    </div>
    <h2>Sản Phẩm Bán Chạy</h2>
    <div class="product-box">
        @foreach ($BestSeller as $product)
        <div class="product">
            <a class="pro" href="{{route('sanphamchitiet',$product->id)}}">
                <img src="{{ asset('uploaded/'.$product->img)}}" alt="" />
            <h3>{{$product -> name}}</h3>
            </a>
            <p>{{ number_format($product->price, 0, ',', '.') }} VNĐ</p>
        </div>
        @endforeach
    </div>
    <h2>Sản Phẩm Xem Nhiều</h2>
    <div class="product-box">
        @foreach ($Views as $product)
        <div class="product">
            <a class="pro" href="{{route('sanphamchitiet',$product->id)}}">
                <img src="{{ asset('uploaded/'.$product->img)}}" alt="" />
            <h3>{{$product -> name}}</h3>
            </a>
            <p>{{ number_format($product->price, 0, ',', '.') }} VNĐ</p>
        </div>
        @endforeach
    </div>
</div>
@endsection