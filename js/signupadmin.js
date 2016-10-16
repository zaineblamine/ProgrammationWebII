$(document).ready(function(){

  $("#submit").click(function(){
	
    var firstname=$("#firstname").val();
    var lastname=$("#lastname").val();				
    var username = $("#newuser").val();
    var password = $("#password1").val();
    var password2 = $("#password2").val();
    var email = $("#email").val();

    if((firstname == "") ||(lastname == "") ||(username == "") || (password == "") || (email == "")) {
      $("#message").html("<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Please enter a username and a password</div>");//à ameliorer 
    }
    else {
      $.ajax({
        type: "POST",
        url: "createadmin.php",
        data: "newuser="+username+"&password1="+password+"&password2="+password2+"&email="+email+"&firstname="+firstname+"&lastname="+lastname,

         success: function(html){

			var text = $(html).text();
			//Pulls hidden div that includes "true" in the success response
			var response = text.substr(text.length -4);
			console.log(html);

          if(response == "true"){

			$("#message").html(html);

					$('#submit').hide();
					
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
