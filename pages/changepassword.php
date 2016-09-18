<?php
require "../includes/dbconn.php";
session_start();
if (!isset($_SESSION['username'])) {
    header("location:../login/main_login.php");
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Programmation Web II</title>
    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
  <?php include("entete.php"); ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                        <h1 class="page-header">Modifier le mot de passe</h1>
                        <br/>
                            <div class="row">
                                <div id="message2" class="col-lg-8">
                                    <form role="form" id="usrchangepassword" name="usrchangepassword" method="POST" action="change_password_script.php">
                                        			<table  class="table">
                                                <tr>
                                            <td class=thickbluebig>Mot de passe actuel</td>
                                            <td><input class="form-control" type="password" id="p0" name="p0"></td>
                                          </tr>
                                          <tr>
                                      <td class=thickbluebig>Nouveau mot de passe</td>
                                      <td><input class="form-control" type="password" id="p1" name="p1"></td>
                                    </tr>
                                    <tr>
                                <td class=thickbluebig >Confirmation du mot de passe</td>
                                <td><input class="form-control" type="password" id="p2" name="p2"></td>
                              </tr>
                                        </table>
              <button type="submit" name="Submit" id="submit" class="btn btn-primary">Appliquer</button>
              <button type="reset" class="btn btn-primary">Annuler</button>
	      	<br><br><div id="message"></div>
                                      </form>

                                    </div>
                                      </div>

                        </div>
                    </div>
            </div>
    <footer>
      <div class="container">
        <!--img class="logo" src="../../../img/logo.png"-->
        <p class="copyright col-lg-9">
        &copy;Copyright Mme Hayet Lamine Ep Abid - ISET Sfax.
      </p>
      <p class="copyright col-lg-3">
      <img class="logoMail" src=../img/mail.png> <a href="#">lamine_hayet@yahoo.fr</a>
    </p>
      </div>
</footer>
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>
 <!-- The AJAX script -->
    <script src="../js/changepassword.js"></script>
    <script src="../js/jquery.validate.min.js"></script>
<script src="../js/additional-methods.min.js"></script>
<script>
$( "#usrchangepassword" ).validate({
  rules: {
    p1: {
      minlength: 4
	},
    p2: {
      equalTo: "#p1"
    }
  }
});
</script>
</body>
</html>
