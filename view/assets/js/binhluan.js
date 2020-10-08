$(document).ready(function () {
  $("#dsbl").load("../binhluan_first.php");
  $("#sendmess").click(function (event) {
    var name = $("#bl_name").val().trim();
    var email = $("#bl_email").val().trim();
    var id_product = $("#bl_idpro").val().trim();
    var content = $("#bl_mess").val().trim();
    if (name != "" && content != "" && id_product > 0) {
      $.ajax({
        url: '../binhluan_send.php',
        type: 'post',
        data: {
          name: name,
          email: email,
          id_product: id_product,
          content: content
        },
        success: function (response) {
          var msg = "";
          if (response != "") {
            $('#bl_name').val('');
            $('#bl_email').val('');
            $('#bl_mess').val('');
            msg = "Thuc hien thanh cong!";
            $('#dsbl').html(response);
          } else {
            msg = "loi!! khong them duoc!";
          }
          $("#message").html(msg);
        }
      });
    } else {
      $("#message").html("chua du quyen de binh luan. Hoac co du lieu chu nhap");
    }
  });
});