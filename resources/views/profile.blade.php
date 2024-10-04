
@extends('layout')
@section('title','Thông Tin')
@section('titlePage','Thông Tin')
@section('main')
<body class="body4">
    <div class="container4">
        <h1 class="h14">Thông Tin Tài Khoản</h1>
        <div class="account-info4">
            <p><strong>Họ và tên:</strong> Nguyễn Văn A</p>
            <p><strong>Email:</strong> nguyenvana@example.com</p>
            <p><strong>Số điện thoại:</strong> 0123456789</p>
            <p><strong>Địa Chỉ:</strong> TP HCM</p>
        </div>
        <button class="button4" id="edit-info-btn">Sửa Thông Tin</button>
        <button class="button4" id="change-password-btn">Thay Đổi Mật Khẩu</button>
    </div>

    <!-- Modal Sửa Thông Tin -->
    <div id="edit-info-modal" class="modal4">
        <div class="modal-content4">
            <span class="close4">&times;</span>
            <h2>Sửa Thông Tin</h2>
            <form class="form4" id="edit-info-form">
                <label for="name">Họ và tên:</label>
                <input type="text" id="name" name="name" value="Nguyễn Văn A">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="nguyenvana@example.com">
                <label for="phone">Số điện thoại:</label>
                <input type="tel" id="phone" name="phone" value="0123456789">
                <label for="phone">Địa Chỉ:</label>
                <input type="text" id="address" name="address" value="TP HCM">
                <button type="submit">Lưu Thay Đổi</button>
            </form>
        </div>
    </div>

    <!-- Modal Thay Đổi Mật Khẩu -->
    <div id="change-password-modal" class="modal4">
        <div class="modal-content4">
            <span class="close4">&times;</span>
            <h2>Thay Đổi Mật Khẩu</h2>
            <form class="form4" id="change-password-form">
                <label for="current-password">Mật khẩu hiện tại:</label>
                <input type="password" id="current-password" name="current-password">
                <label for="new-password">Mật khẩu mới:</label>
                <input type="password" id="new-password" name="new-password">
                <label for="confirm-password">Xác nhận mật khẩu mới:</label>
                <input type="password" id="confirm-password" name="confirm-password">
                <button type="submit">Đổi Mật Khẩu</button>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var editInfoBtn = document.getElementById("edit-info-btn");
            var changePasswordBtn = document.getElementById("change-password-btn");
            var editInfoModal = document.getElementById("edit-info-modal");
            var changePasswordModal = document.getElementById("change-password-modal");
            var closeButtons = document.getElementsByClassName("close4");

            editInfoBtn.onclick = function () {
                editInfoModal.style.display = "block";
            };

            changePasswordBtn.onclick = function () {
                changePasswordModal.style.display = "block";
            };

            for (var i = 0; i < closeButtons.length; i++) {
                closeButtons[i].onclick = function () {
                    this.parentElement.parentElement.style.display = "none";
                };
            }

            window.onclick = function (event) {
                if (event.target == editInfoModal) {
                    editInfoModal.style.display = "none";
                }
                if (event.target == changePasswordModal) {
                    changePasswordModal.style.display = "none";
                }
            };
        });
    </script>
</body>
@endsection