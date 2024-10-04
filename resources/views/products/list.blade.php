@extends('layout')
@section('title','Sản Phẩm')
@section('titlePage','Danh Sách Sản Phẩm')
@section('main')
<div class="container">
    <div class="left-box">
        <h2>Danh Mục</h2>
        <!-- Danh sách danh mục -->
        <ul>
            <li>
                <a style="font-weight: initial" href="{{asset('sanpham')}}">Tất cả sản phẩm</a>
            </li>
            @foreach ($Category as $item)
            <li>
                <a href="{{route('danhmuc',$item->id)}}">{{$item -> name}}</a>
            </li>
        @endforeach
            
            {{-- <li><a href="#">Danh mục 2</a></li>
            <li><a href="#">Danh mục 3</a></li> --}}
            <!-- Thêm danh mục cần hiển thị -->
        </ul>
    </div>

    <div class="right-box">
        <div class="search">
            <form action="{{ route('timkiem') }}" method="GET">
                <input type="text" name="query" placeholder="Tìm kiếm sản phẩm" value="{{ request()->input('query') }}">
                <button type="submit">Tìm Kiếm</button>
            </form>
        </div>
        
        <div class="product-list">
            <!-- Danh sách sản phẩm -->
            @foreach ($All as $item)
        <div class="product">
            <a class="pro" href="{{route('sanphamchitiet',$item->id)}} ">
                <img src="{{ asset('uploaded/'.$item->img)}}" alt="" />
            <h3>{{$item -> name}}</h3>
            </a>
            <p>{{ number_format($item->price, 0, ',', '.') }} VNĐ</p>
        </div>
        @endforeach
        </div>
        
        <div class="pagination1">
            <!-- Phân trang -->
            {{-- {{ $All->links()}} --}}
            
            {{ $All->links('vendor.pagination.bootstrap-4') }}

            {{-- <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a> --}}
        </div>
    </div>
</div>
@endsection