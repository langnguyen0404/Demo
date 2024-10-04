    @extends('layout')
    @section('title','Basketball Zone')
    @section('titlePage','Đăng nhập')
    @section('main')
    <div class="container">
       
        <div class="login-container">
            @if ($message = Session::get('error'))

            <div style="text-align: center" class="alert alert-danger alert-block">

                <button type="button" class="close" data-dismiss="alert">×</button>	

                    <strong >{{ $message }}</strong>

            </div>

        @endif
        <br>
            <div style="text-align: center" class="tabs">
                <button class="tab-btn active" data-tab="login-tab" onclick="openTab('login-tab')">Đăng Nhập</button>
                <button class="tab-btn" data-tab="register-tab" onclick="openTab('register-tab')">Đăng Ký</button>
                <br>
            </div>

            <div id="login-tab" class="tab-content" style="display:none;">
                <h2>Đăng Nhập</h2>
               <div class="container">
                <form action="{{route('dangnhap')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <span>Email:</span>
                    <input class="DuLieu" type="text" id="taikhoan" name="email" required>
                    <br>
                    <span>Mật Khẩu:</span>
                    <input class="DuLieu" type="password" id="password" name="password" required>
                    <br>
                    <button class="btn" name="Login">Đăng Nhập</button><br>
                    <br>
                    
                </form>
               </div>
            </div>

            <div id="register-tab" class="tab-content" style="display:none;">
                <h2>Đăng Ký</h2>
                <div class="container">
                    {{-- onsubmit="return checkPass()" --}}
                    <form action="{{route('dangky')}}" method="POST">
                        @csrf
                        <span>Họ Tên:</span>
                        <input class="DuLieu" type="text" id="full-name" name="name">
                        <br>
                        <span>Email:</span>
                        <input class="DuLieu" type="text" id="taikhoan" name="email">
                        <br>
                        <span>Mật Khẩu:</span>
                        <input class="DuLieu" type="password" id="password" name="password">
                        <br>
                        {{-- <span>Xác Nhận Mật Khẩu:</span>
                        <input class="DuLieu" type="password" id="confirm-password" name="confirm-password">
                        <br> --}}
                        <input type="submit" class="btn" name="Register" value="Đăng Ký"></input><br>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection

    <script>
        // function checkPass() {
        //     let pass1 = document.getElementById('password').value;
        //     let pass2 = document.getElementById('confirm-password').value;
        //     if (pass2 !== pass1) {
        //         alert('nhập lại mật khẩu không đúng.');
        //         return false;
        //     }
        //     return true;
        // }

        function openTab(tabId) {
            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.style.display = 'none';
            });

            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('active');
            });

            document.getElementById(tabId).style.display = 'block';
            document.querySelector(`.tab-btn[data-tab="${tabId}"]`).classList.add('active');
        }
    </script>
