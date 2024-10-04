@extends('admin.layoutAD')
@section('title','Admin')
@section('titlePage','Admin')
@section('main')

<section>
    <div class="container">
        <div class="col3">
            <h2>Thêm Mới Sản Phẩm</h2>
            <form action="{{route('themsanpham')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <select name="category_id" id="" class="styled-select">
                    <option value="0" selected>Chọn danh mục</option>
                    @foreach ($categories as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
                <input type="text" name="name" placeholder="Tên sản phẩm">
                <input type="text" name="price" placeholder="Giá">
                <input type="file" name="img"> <!-- Thêm trường nhập hình ảnh -->
                {{-- <textarea name="description" id="" rows="5" >{{$product->description}}</textarea>  --}}
                <input type="submit" value="Thêm">
            </form>
        </div>
        <div class="col9">
            <h2>Danh Sách Sản Phẩm</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
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