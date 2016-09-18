<?php
//PUT THIS HEADER ON TOP OF EACH UNIQUE PAGE
session_start();
if (!isset($_SESSION['username'])) {
    header("location:../../../login/main_login.php");
}
?>

<!DOCTYPE html>
<html lang="Fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Programmation Web II</title>
    <!-- Bootstrap Core CSS -->
    <link href="../../../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="../../../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- Timeline CSS -->
    <link href="../../../dist/css/timeline.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../../dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="../../../bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../../../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="wrapper">
      <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
     <div class="navbar-header">
         <img class="logoEntete" src="http://localhost/CoursInformatique/img/logoiset.png">
         <a class="navbar-brand Entete" href="#">Programmation Web II</a>
         <img class="logoEntete2" src="http://localhost/CoursInformatique/img/logodept.png">
     </div>
           </nav>

        <div id="page-wrapper2">
          <div class="col-lg-6">
              <div class="panel panel-default">
                  <div class="panel-heading">
                       Exemple 3
                  </div>
                  <div class="panel-body">
                    <span style="color:blue">&lt;</span><span style="color:brown">!DOCTYPE</span> <span style="color:red">html</span><span style="color:blue">&gt;</span><br>
                    <span style="color:blue">&lt;</span><span style="color:brown">html</span><span style="color:blue">&gt;</span><br>
                    <span style="color:blue">&lt;</span><span style="color:brown">head</span><span style="color:blue">&gt;</span><br>
                    <span style="color:blue">&lt;</span><span style="color:brown">title</span><span style="color:blue">&gt;</span>une page contenant du Javascript<span style="color:blue">&lt;</span><span style="color:brown">/title</span><span style="color:blue">&gt;</span><br>
                    <span style="color:blue">&lt;</span><span style="color:brown">/head</span><span style="color:blue">&gt;</span><br>
                    <span style="color:blue">&lt;</span><span style="color:brown">body</span><span style="color:blue">&gt;</span><br>
                    <span style="color:blue">&lt;</span><span style="color:brown">script</span> <span style="color:red">language=</span><span style="color:blue">"Javascript"</span>

                    <span style="color:blue">&gt;<br>
                     </span>alert(<span style="color:red">"Voici un message d\'alerte!"</span>);<br>
                   <span style="color:blue">&lt;</span><span style="color:brown">/script</span><span style="color:blue">&gt;</span><br>
                    <span style="color:blue">&lt;</span><span style="color:brown">/body</span><span style="color:blue">&gt;</span><br>
                    <span style="color:blue">&lt;</span><span style="color:brown">/html</span><span style="color:blue">&gt;</span>
                    <!--img class="alert" src="../../../img/alert.png"-->
                  </div>
                  <div class="panel-footer">
                    <p><a class="btn btn-primary btn-lg sizebtn" role="button" onclick="">Essayer le code</a
                  </div>
      </div>
    </div>
    <p>hello</p>
        <div class="col-lg-6">
          <div class="panel panel-default">
              <div class="panel-heading">
                   Exemple 3
              </div>
              <div class="panel-body">
        </div>
</div><!--page-wrapper-->
</div><!--wrapper-->
</div>
</div>
  <?php include("../../footer.php"); ?>
    <script src="../../../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../../bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../../../dist/js/sb-admin-2.js"></script>
</body>
</html>
