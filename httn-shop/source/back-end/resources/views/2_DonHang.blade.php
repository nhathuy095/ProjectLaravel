<div class="col-md-8"></div>
<div class="col-md-4">
    <ul class="bt-list">
        <li><a href="#" class="hvr-icon-pulse col-11">Danh sách</a></li>
        <li><a href="#" class="hvr-icon-down col-3">Xuất ra execel</a></li>
    </ul>
</div>
<h3>Đơn hàng</h3>
<table id="table-two-axis" class="two-axis">
    <thead>
    <tr>
        <th><input type="checkbox"></th>
        <th>Mã số</th>
        <th>Sản phẩm</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Đơn hàng</th>
        <th>Giao dịch</th>
        <th>Ngày tạo</th>
        <th>Hành động</th>
    </tr>
    </thead>
    <tbody>
    @foreach($list_order as $item)
    <tr>
        <td data-th="Name"><span class="bt-content"><input type="checkbox"></span></td>
        <td data-th="Name"><span class="bt-content">{{ $item->id }}</span></td>
        <td data-th="Age"><span class="bt-content"></span></td>
        <td data-th="Gender"><span class="bt-content">{{ $item->amount }}</span></td>
        <td data-th="Height"><span class="bt-content">1</span></td>
        <td data-th="Province"><span class="bt-content"></span></td>
        <td data-th="Sport"><span class="bt-content">Volleyball</span></td>
        <td data-th="Sport">
            <span class="bt-content"></span>
        </td>
    </tr>
    @endforeach
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
