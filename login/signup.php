<?php
  session_start();

  if (isset($_SESSION['username'])) {
      session_start();
      session_destroy();
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Inscription</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../dist/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../dist/css/main.css" rel="stylesheet" media="screen">
  </head>

  <body>
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
          <img class="logoEntete" src="http://localhost/CoursInformatique/img/logoiset.png">
          <a class="navbar-brand Entete" href="#">Programmation Web II</a>
          <img class="logoEntete2" src="http://localhost/CoursInformatique/img/logodept.png">
      </div>
            </nav>    
    <div class="container">

      <form class="form-signup" id="usersignup" name="usersignup" method="post" action="createuser.php" autofocus>
        <h2 class="form-signup-heading">Inscription</h2>
        <input name="firstname" id="firstname" type="text" class="form-control" placeholder="Prénom" >
        <input name="lastname" id="lastname" type="text" class="form-control" placeholder="Nom de famille" >
        <input name="newuser" id="newuser" type="text" class="form-control" placeholder="Nom d'utilisateur" >
        <input name="email" id="email" type="text" class="form-control" placeholder="adresse mail">
        <input name="password1" id="password1" type="password" class="form-control" placeholder="Mot de passe">
        <input name="password2" id="password2" type="password" class="form-control" placeholder="Confirmez mot de passe">
        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">S'inscrire</button>
	 <h4><a href="main_login.php">Se connecter</a></h4>
	        <div id="message1"></div>

      </form>

    </div> <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="../js/bootstrap.js"></script>

    <script src="../js/signup.js"></script>

    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
<script>
$( "#usersignup" ).validate({
  rules: {
	email: {
		email: true,
		required: true
	},
    password1: {
      required: true,
      minlength: 4
	},
    password2: {
      equalTo: "#password1"
    }
  }
});
</script>

  </body>
</html>
