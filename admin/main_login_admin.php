<?php
session_start();
if (isset($_SESSION['username'])) {
    header("location:adminspace.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Connexion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../dist/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../dist/css/main.css" rel="stylesheet" media="screen">
  </head>

  <body>
  <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <img class="logoEntete" src="http://localhost/CoursInformatique/img/logoiset.png">
        <a class="navbar-brand Entete" href="#">Programmation Web II : Apprendre JavaScript et XML</a>
        <img class="logoEntete2" src="http://localhost/CoursInformatique/img/logodept.png">
    </div>
            </nav>
    <div class="container">

      <form class="form-signin" name="form1" method="post" action="checkloginadmin.php">
        <h2 class="form-signin-heading">Connexion ADMIN</h2>
        <input name="myusername" id="myusername" type="text" class="form-control" placeholder="Nom d'utilisateur" autofocus>
        <input name="mypassword" id="mypassword" type="password" class="form-control" placeholder="Mot de passe">
        <!-- The checkbox remember me is not implemented yet...-->
        <!--label class="checkbox">
          <input type="checkbox" value="remember-me"> Se souvenir de moi
        </label-->
        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
	 <!--h4><a href="signupadmin.php">S'inscrire</a></h4-->
        <div id="message"></div>
      </form>

    </div> <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery-2.2.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <!-- The AJAX login script -->
    <script src="../js/loginadmin.js"></script>

  </body>
</html>
