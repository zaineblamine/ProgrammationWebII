<?php
//PUT THIS HEADER ON TOP OF EACH UNIQUE PAGE
session_start();
if (!isset($_SESSION['username'])) {
    header("location:../../../../login/main_login.php");
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
    <link href="../../../../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="../../../../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- Timeline CSS -->
    <link href="../../../../dist/css/timeline.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../../../dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="../../../../bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../../../../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <?php include ("../../../entete.php");?>
        <div id="page-wrapper">
          <div class="container-fluid">
              <div class="row">
                <h1 class="page-header"><img class="logo1" src="../../../../img/logoJavascript.png" style="float:left;">JavaScript</h1>
                <br/>
                <a class="navButtom col-lg-10" href="string.php">« L'objet String</a>
                <a class="navButtom col-lg-2" href="date.php">L'objet Date »</a><br><br>
                <h2>Les objets javaScript</h2>

                    <h3>L’objet array</h3>

<br><br>
             </div><!--row-->

<br>
          </div> <!--container-fluid-->
          <a class="navButtom col-lg-10" href="string.php">« L'objet String</a>
          <a class="navButtom col-lg-2" href="date.php">L'objet Date »</a><br><br>
</div><!--page-wrapper-->

</div><!--wrapper-->
<?php include ("../../../footer.php");?>

    <script src="../../../../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../../../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../../../bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../../../../dist/js/sb-admin-2.js"></script>
</body>
</html>
