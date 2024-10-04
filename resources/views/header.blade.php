<nav>
    <a href="/">Trang Chủ</a>
    <a href="{{asset('sanpham')}}">Sản phẩm</a>
    <a href="{{asset('gioithieu')}}">Giới Thiệu</a>
    <a href="{{asset('lienhe')}}">Liên Hệ</a>
    <a href="{{ route('giohang') }}">Giỏ Hàng</a>
    @if(Auth::check())
    <a href="{{ route('dangxuat') }}">{{ Auth::user()->name }}</a>
    @else
    <a href="{{ route('taikhoan') }}">Tài Khoản</a>
    @endif

    @if(Auth::check())
        @if(Auth::user()->role == 1)
            <a href="{{ route('homeAD') }}">admin</a>
        @endif
    @endif
    

</nav>