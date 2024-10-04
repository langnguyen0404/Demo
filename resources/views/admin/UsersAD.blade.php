@extends('admin.layoutAD')
@section('title','Admin')
@section('titlePage','Admin')
@section('main')

<section>
    <div class="container">
        <div class="col3">
            <h2>Thêm Mới</h2>
            <form>
                <input type="text" placeholder="Tên">
                <input type="text" placeholder="Email">
                <input type="submit" value="Thêm">
            </form>
        </div>
        <div class="col9">
            <h2>Danh Sách</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Thao tác</th> <!-- Thêm cột mới -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($Users as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td class="action-icons">
                            <a href="#"><i class="fas fa-edit"></i></a>
                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <!-- Các hàng khác -->
                    @endforeach
                </tbody>
            </table>
            <div class="pagination1">
                <!-- Phân trang -->
                {{-- {{ $Users->links('../vendor/pagination/bootstrap-5.blade.php') }} --}}
            </div>
        </div>
    </div>
</section>

@endsection