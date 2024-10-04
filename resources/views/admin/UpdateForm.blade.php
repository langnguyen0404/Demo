@extends('admin.layoutAD')
@section('title','Admin')
@section('titlePage','Admin')
@section('main')

<section>
    <div class="container">
        <div class="col3">
            <h2>Cập Nhật Sản Phẩm</h2>
            <form action="{{route('capnhatsanpham', ['id' => $product->id])}}" method="POST" enctype="multipart/form-data">
                <label for="">Danh mục:</label>
                @csrf
                <select name="category_id" id="" class="styled-select">
                    <option value="0" selected>Chọn danh mục</option>
                    @foreach ($categories as $item)
                        @if ($item->id===$product->category_id)
                            <option value="{{$item->id}}" selected>{{$item->name}}</option>
                        @else
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endif
                    @endforeach
                </select><br>
                <label for="">Tên:</label>
                <input type="text" name="name"  value="{{$product->name}}" placeholder="Tên sản phẩm">

                <label for="">Giá:</label>
                <input type="text" name="price" value="{{$product->price}}" placeholder="Giá">

                <label for="">Số lượng:</label>
                <input type="text" name="quantity" value="{{$product->quantity}}" placeholder="Số lượng">

                <label for="">Hình ảnh:</label>
                <input type="file" name="img"> <!-- Thêm trường nhập hình ảnh -->
                <img style="width: 120px" src="{{asset('uploaded/'.$product->img)}}" alt="">
                <input type="hidden" name="id" value="{{$product->id}}">
                <input type="submit" value="Cập nhật">
            </form>
        </div>
        <div class="col9">
            <h2>Danh Sách Sản Phẩm</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>{{$product->category_id}}
                        <th>Hình ảnh</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Giá (VNĐ)</th>
                        <th>Số lượng</th>
                        <th>Lượt xem</th>
                        <th>Lượt bán</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td><img style="width: 150px;height: 150px;" src="{{ asset('uploaded/'.$item->img)}}" alt=""></td>
                        <td>{{$item->name}}</td>
                        <td>{{ number_format($item->price, 0, ',', '.') }}</td>
                        <td>{{$item->quantity}}</td>
                        <td>{{$item->view}}</td>
                        <td>{{$item->sold}}</td>
                        <td class="action-icons">
                            <a href="{{ route('bangcapnhat', ['id' => $item->id]) }}"><i class="fa-solid fa-pen-to-square"></i></a>-
                            <a href="{{ route('xoasanpham', ['id' => $item->id]) }}"><i class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="pagination1">
                <!-- Phân trang -->
                {{ $products->links('../vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </div>
</section>

@endsection