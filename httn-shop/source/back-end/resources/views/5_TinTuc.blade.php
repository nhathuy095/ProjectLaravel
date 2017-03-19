<input type="hidden" id='url' value="{{url("/")}}">
<div class="col-md-8">
    <div id="loading">
        <div id="circularG">
            <div id="circularG_1" class="circularG"></div>
            <div id="circularG_2" class="circularG"></div>
            <div id="circularG_3" class="circularG"></div>
            <div id="circularG_4" class="circularG"></div>
            <div id="circularG_5" class="circularG"></div>
            <div id="circularG_6" class="circularG"></div>
            <div id="circularG_7" class="circularG"></div>
            <div id="circularG_8" class="circularG"></div>
        </div>
    </div>
    @if(isset($message))
        <div class="alert alert-success" role="alert">
            <ul>
                <li>{{ $message['msg'] }} </li>
            </ul>
        </div>
    @endif
</div>
<div class="col-md-4">
    <ul class="bt-list">
        <li><a href="{{url("/")}}/tin-tuc" class="hvr-icon-pulse col-11">Danh sách</a></li>
        <li><a href="{{url("/")}}/tin-tuc/them" class="hvr-icon-float-away col-24">Thêm mới</a></li>
    </ul>
</div>
<h4>Sản phẩm</h4>
<table id="table-two-axis" class="two-axis">
    <thead>
    <tr>
        <th style="width: 5%"><input type="checkbox"></th>
        <th style="width: 5%">Mã số</th>
        <th style="width: 15%">Tên tin tức</th>
        <th style="width: 18%">Hình ảnh</th>
        <th style="width: 15%">Lượt xem</th>
        <th style="width: 10%">Ngày tạo</th>
        <th style="width: 5%">Hành động</th>
    </tr>
    </thead>
    <tbody>
    @if(isset($list_news))
	@foreach($list_news as $item)
    <tr>
        <td data-th="MaSo"><span class="bt-content"><input type="checkbox"></span></td>
        <td data-th="MaSo"><span class="bt-content">{{ $item->id }}</span></td>
        <td data-th="TenTinTuc">
            <b>{{ $item->name }}</b>
        </td>
        <td data-th="HinhAnh">
			<div class="clearfix"></div>
			<img height="60" src="{{url("/")}}/resources/assets/images/product7.jpg" alt="">
			<div class="clearfix"></div>
		</td>
        <td data-th="LuotXem"><span class="bt-content">{{ $item->viewCount }}</span></td>
        <td data-th="NgayTao">
            <b style="color: red">{{ $item->createdDate }}</b>
        </td>
        <td data-th="Sport">
            <span class="bt-content">
                <a href="{{url("/")}}/tin-tuc/chi-tiet/{{$item->id}}"><img src="{{url("/")}}/resources/assets/images/view.png" alt="Chi tiết"></a>
                <a href="{{url("/")}}/tin-tuc/chinh-sua/{{$item->id}}"><img src="{{url("/")}}/resources/assets/images/edit.png" alt="Chỉnh sửa"></a>
                <a href="{{url("/")}}/tin-tuc/xoa/{{$item->id}}"><img src="{{url("/")}}/resources/assets/images/delete.png" alt="Xóa"></a>
                <div id="{{$item->id}}">
                    @if($item->status == 1)
                        <a onclick="isActive('/tin-tuc/hien-thi', {{$item->id}}, {{$item->status}})" class="box3 hvr-icon-pop" style="margin-top: -20px"></a>
                    @else
                        <a onclick="isActive('/tin-tuc/hien-thi', {{$item->id}}, {{$item->status}})" class="hvr-icon-push" style="margin-top: -20px"></a>
                    @endif
                </div>
            </span>
        </td>
    </tr>
	@endforeach
    @endif
    </tbody>
</table>
<div class="col-md-8"></div>
<div class="col-md-4">
    <nav style="margin-top: -15px">
        <ul class="pagination">
            <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
        </ul>
    </nav>
</div>
