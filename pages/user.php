<?php
//PUT THIS HEADER ON TOP OF EACH UNIQUE PAGE
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
    <title>Cours Informatique</title>
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
              <br><br><br>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Profil</h1>
                        <br/>
                                                              <table  class="table">
                                                                <tr>
                                                                  <td class=thickbluebig >Nom d'utilisateur</td>
                                                                    <td></td>
                                                                </tr>
                                        <tr>
                                    <td class=thickbluebig>Nom</td>
                                    <td> </td>
                                  </tr>
                                  <tr>
                              <td class=thickbluebig>Prénom</td>
                              <td></td>
                            </tr>
                            <tr>
                        <td class=thickbluebig >Adresse Mail</td>
                        <td> </td>
                      </tr>
                                </table>

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

</body>
</html>
