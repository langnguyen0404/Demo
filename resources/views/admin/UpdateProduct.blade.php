@extends('admin.layoutAD')
@section('title','Admin')
@section('titlePage','Admin')
@section('main')

<section>
    <div class="container2">
        <section>
            <form action="{{route('themsanpham')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <select name="category_id" id="" class="styled-select">
                    <option value="0" selected>Chọn danh mục</option>
                    @foreach ($categories as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
                <label for="product_name">Tên sản phẩm:</label><br>
                <input type="text" id="product_name" name="name""><br>

                <label for="product_price">Giá:</label><br>
                <input type="text" id="product_price" name="price" ><br>

                <label for="product_image">Hình ảnh:</label><br>
                <input type="file" id="product_image" name="img"><br>
                
                <input type="submit" value="Cập nhật">
            </form>

        </section>
    </div>
</section>

@endsection