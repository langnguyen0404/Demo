@extends('layout')
@section('title','Thanh Toán')
@section('titlePage','Thanh Toán')
@section('main')
<body>
    <div class="container_cart">
        <div class="left-box-bill">
            <form id="orderForm" class="order-form">
                <h2>Thông Tin Người Đặt Hàng</h2>
                <label for="fullName">Họ và Tên:</label>
                <input type="text" id="fullName" name="fullName" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="address">Địa Chỉ:</label>
                <textarea id="address" name="address" rows="4" required></textarea>


            </form>


            <h2>Voucher</h2>
            <div class="voucher">
                <input type="text" id="voucherCode" name="voucherCode" placeholder="Nhập mã voucher">
                <button type="button" id="applyVoucher">Áp Dụng</button>
            </div>
        </div>
        <div class="right-box-bill">

            <h2>Giỏ Hàng</h2>
            @for ($i = 0; $i < count($listCart); $i++)
            <div class="order-summary">
                <h2>Tóm Tắt Giỏ Hàng</h2>
                <ul>
                    <li><span>{{$listCart[$i]['name']}}</span><span>{{$listCart[$i]['quantity']}}</span><span>{{number_format($listCart[$i]['price'], 0, ',', '.')}} VNĐ</span></li>
                    <!-- Add more items as needed -->
                </ul>
                <div class="total">Tổng Cộng: <span>{{number_format($listCart[$i]['price'] * $listCart[$i]['quantity'], 0, ',', '.')}} VNĐ</span></div>
                <div class="total" style="color: rgb(216, 98, 98);">Giao Hàng: <span>FREE</span></div>
            </div>

            <h2 class="total">Thành Tiền: <span id="totalAmount">{{number_format($listCart[$i]['price'] * $listCart[$i]['quantity'], 0, ',', '.')}} VNĐ</span></h2>
            @endfor

            <h2>Phương Thức Thanh Toán</h2>
            <div class="payment-method">
                <table>
                    <tr>
                        <td>
                            <input type="radio" name="paymentMethod" id="creditCard" value="cod">
                        </td>
                        <td>
                            <label for="creditCard">Thanh toán khi nhận hàng</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="paymentMethod" id="creditCard" value="momo">
                        </td>
                        <td>
                            <label for="creditCard">Thanh toán ví điện tử</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="paymentMethod" id="creditCard" value="banktransfer">
                        </td>
                        <td>
                            <label for="creditCard">Thanh toán ngân hàng</label>
                        </td>
                    </tr>


                </table>


            </div>

            <button type="button" class="checkout-btn" id="checkoutBtn">Thanh Toán</button>
        </div>
    </div>
    <footer>&copy; 2023 Tên Công Ty</footer>


</body>
@endsection
