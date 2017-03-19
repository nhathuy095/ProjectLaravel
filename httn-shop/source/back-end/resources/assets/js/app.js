/**
 * Created by trunghieu on 3/18/2017.
 */
function isActive(redirect, id, status){
    if(status == 0){
        var r = confirm("Bạn có chắc muốn khóa khóa học này");
    }
    else{
        var r = confirm("Bạn có chắc muốn mở khóa học này");
    }
    if (r == true) {
        $("#loading").show();
        var url = $('#url').val();
        var data = {
            id: id,
            status: status
        }
        $.ajax({
            url: url + redirect,
            type: 'GET',
            dateType: 'json',
            data: data,
            success: function (result) {
                var json = JSON.parse(result);
                if(json['status'] == 0){
                    $("#loading").hide();
                    $('#'+id).html('<a onclick="isActive('+redirect+','+id+','+1+')" class="box3 hvr-icon-pop" style="margin-top: -20px"></a>');
                }else{
                    $("#loading").hide();
                    $('#'+id).html('<a onclick="isActive('+redirect+','+id+','+1+')" class="hvr-icon-push" style="margin-top: -20px"></a>');
                }
            },
        });
    }
}