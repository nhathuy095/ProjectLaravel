<input type="hidden" id='url' value="{{url("/")}}">
<div class="col-md-8">
</div>
<div class="col-md-4">
    <ul class="bt-list">
        <li><a href="{{url("/")}}/san-pham" class="hvr-icon-pulse col-11">Danh sách</a></li>
        <li><a href="{{url("/")}}/san-pham/them" class="hvr-icon-float-away col-24">Thêm mới</a></li>
    </ul>
</div>
<h4>Sản phẩm</h4>
<table id="table-two-axis" class="two-axis">
    <thead>
    <tr>
        <th style="width: 5%"><input type="checkbox"></th>
        <th style="width: 7%">Mã số</th>
        <th style="width: 25%">Tên sản phẩm</th>
        <th style="width: 18%">Quà tặng</th>
        <th style="width: 20%">Sport</th>
        <th style="width: 10%">Giá</th>
        <th style="width: 5%">Ngày tạo</th>
        <th style="width: 10%">Hành động</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td data-th="Name"><span class="bt-content"><input type="checkbox"></span></td>
        <td data-th="Name"><span class="bt-content">1</span></td>
        <td data-th="Age">
            <b>Tivi SamSung</b>
            <div class="clearfix"></div>
            <img height="60" src="{{url("/")}}/resources/assets/images/product7.jpg" alt="">
            <div class="clearfix"></div>
            <div>
                Đã bán: <b>2</b> | Đã xem: <b>18</b> | Yêu thích: <b>2</b>
            </div>
            <div class="clearfix"></div>
        </td>
        <td data-th="Gender"><span class="bt-content">Cách quạt</span></td>
        <td data-th="Height"><span class="bt-content">5'4</span></td>
        <td data-th="Province">
            <b style="color: red">10.000.000 đ</b>
            <p style="text-decoration:line-through">10.000.000 đ</p>
        </td>
        <td data-th="Sport"><span class="bt-content">3/11/2017</span></td>
        <td data-th="Sport">
            <span class="bt-content">
                <a href="{{url("/")}}/san-pham/chi-tiet"><img src="{{url("/")}}/resources/assets/images/view.png" alt="Chi tiết"></a>
                <a href="{{url("/")}}/san-pham/chinh-sua"><img src="{{url("/")}}/resources/assets/images/edit.png" alt="Chỉnh sửa"></a>
                <a href="{{url("/")}}/san-pham/xoa"><img src="{{url("/")}}/resources/assets/images/delete.png" alt="Xóa"></a>
                <a href="{{url("/")}}/san-pham/hien-thi" class="box3 hvr-icon-pop" style="margin-top: -20px"></a>
            </span>
        </td>
    </tr>
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
