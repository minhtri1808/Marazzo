$(document).ready(function () {
    $("#sendcolor").click(function (event) {
        var id_color = $("#id_color").val().trim();
        var id_product_ = $("#id_pro_").val().trim();
        $.ajax({
            url: '../color_send.php',
            type: 'post',
            data: {
                id_color: id_color,
                id_product_: id_product_
            },
            success: function (data) {
                $('#color').html(data);
            }
        });
    });

});