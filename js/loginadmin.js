$(document).ready(function () {
    "use strict";
    $("#submit").click(function () {

        var username = $("#myusername").val(), password = $("#mypassword").val();

        if ((username === "") || (password === "")) {
          $("#message").html("<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>champ(s) vide(s) </div>");
        } else {
            $.ajax({
                type: "POST",
                url: "checkloginadmin.php",
                data: "myusername=" + username + "&mypassword=" + password,
                dataType: 'JSON',
                success: function (html) {
                    console.log(html);
                    if (html.response == 'true') {
                        //location.assign("../index.php");
                       location.reload();
                        return html.username;
                    } else {
                        $("#message").html(html);
                    }
                },
                error: function (textStatus, errorThrown) {
                    console.log(textStatus);
                    console.log(errorThrown);
                },
                beforeSend: function () {
                    $("#message").html("<p class='text-center'><img src='../img/ajax-loader.gif'></p>");
                }
            });
        }
        return false;
    });
});
