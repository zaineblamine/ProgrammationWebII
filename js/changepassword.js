$(document).ready(function () {

    $("#submit").click(function () {

        var p0 = $("#p0").val();
	var p1= $("#p1").val();
	var p2= $("#p2").val();

        if ((p0 === "")||(p1 === "")||(p2 === "") ) {
            $("#message").html("<img class=logoMail src='../img/croix.png'> Vous ne pouvez pas utiliser un mot de passe vide.");
        } else {
            $.ajax({
                type: "POST",
                url: "change_password_script.php",
                data: "p0="+p0+"&p1="+p1+"&p2="+p2,
                success: function(html){
			var text = $(html).text();
			console.log(text);
			//Pulls hidden div that includes "true" in the success response
			var response = text.substr(text.length -4);


          if(response == "true"){

			$("#message2").html(html);

					$('#submit').show();
					
			}
		else {
			$("#message").html(html);
			$('#submit').show();
			}
        },
        beforeSend: function()
        {
          $("#message").html("<p class='text-center'><img src='../img/ajax-loader.gif'></p>")
        }
      });
        }
        return false;
    });
});
