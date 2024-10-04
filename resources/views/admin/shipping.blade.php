@extends('admin.layoutAD')
@section('title','Theo Dõi Đơn Hàng')
@section('titlePage','Theo Dõi Đơn Hàng')
@section('main')
<br>
<body class="body2">
    <div class="container2">
        <table class="table2">
            <thead>
                <tr>
                    <th class="th2">Mã Đơn Hàng</th>
                    <th class="th2">Người Đặt Hàng</th>
                    <th class="th2">Số Điện Thoại</th>
                    <th class="th2">Địa Chỉ</th>
                    <th class="th2">Tổng Đơn Hàng</th>
                    <th class="th2">Phương Thức Thanh Toán</th>
                    <th class="th2">Trạng Thái</th>
                </tr>
            </thead>
            <tbody id="donhang" class="tbody2">
                <!-- Dữ liệu đơn hàng sẽ được điền vào đây -->
                <tr>
                    <td class="td2">DH123</td>
                    <td class="td2">Người A</td>
                    <td class="td2">0123456789</td>
                    <td class="td2">123 Đường ABC, Quận XYZ</td>
                    <td class="td2">$100.00</td>
                    <td class="td2">Thanh toán khi nhận hàng</td>
                    <td class="td2">Đang Giao Hàng</td>
                </tr>
                <tr>
                    <td class="td2">DH124</td>
                    <td class="td2">Người B</td>
                    <td class="td2">0123456789</td>
                    <td class="td2">456 Đường DEF, Quận UVW</td>
                    <td class="td2">$75.50</td>
                    <td class="td2">Chuyển khoản ngân hàng</td>
                    <td class="td2">Hoàn Thành</td>
                </tr>
                <!-- Thêm dòng tương ứng với mỗi đơn hàng -->
            </tbody>
        </table>
    </div>
</body>
@endsection