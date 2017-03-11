@extends("template.template")
@section("layout")
    @if(isset($page))
        @if($page == 1)
            @include("1_BangDieuKhien")
        @elseif($page == 2)
            @include("7_ThongKe")
        @elseif($page == 3)
            @include("2_DonHang")
        @elseif($page == 4)
            @include("11_GiaoDich")
        @elseif($page == 5)
            @include("3_SanPham")
        @elseif($page == 9)
            @include("4_DanhMuc")
        @elseif($page == 6)
            @include("3_SanPhamThem")
        @endif
    @endif

@endsection
