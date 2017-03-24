
<div class="col-md-8>
</div>
<div class="col-md-4">
    <ul class="bt-list">
        <li><a href="{{url("/")}}/tin-tuc" class="hvr-icon-pulse col-11">Danh s�ch</a></li>
        <li><a href="{{url("/")}}/tin-tuc/them" class="hvr-icon-float-away col-24">Th�m m?i</a></li>
    </ul>
</div>
<h4>S?n ph?m</h4>
<table id="table-two-axis" class="two-axis">
    <thead>
    <tr>
        <th style="width: 5%"><input type="checkbox"></th>
        <th style="width: 5%">M? s?</th>
        <th style="width: 15%">T�n tin t?c</th>
        <th style="width: 18%">H?nh ?nh</th>
        <th style="width: 15%">L�?t xem</th>
        <th style="width: 10%">Ng�y t?o</th>
        <th style="width: 5%">H�nh �?ng</th>
    </tr>
    </thead>
    <tbody>
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
                <a href="{{url("/")}}/tin-tuc/chi-tiet"><img src="{{url("/")}}/resources/assets/images/view.png" alt="Chi ti?t"></a>
                <a href="{{url("/")}}/tin-tuc/chinh-sua"><img src="{{url("/")}}/resources/assets/images/edit.png" alt="Ch?nh s?a"></a>
                <a href="{{url("/")}}/tin-tuc/xoa"><img src="{{url("/")}}/resources/assets/images/delete.png" alt="X�a"></a>
               
            </span>
        </td>
    </tr>
	@endforeach
    </tbody>
</table>
<div class="col-md-8"></div>
<div class="col-md-4">
    <nav style="margin-top: -15px">
        <ul class="pagination">
            <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">�</span></a></li>
            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#" aria-label="Next"><span aria-hidden="true">�</span></a></li>
        </ul>
    </nav>
</div>
