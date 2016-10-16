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
                  <br><br><br>
                    <div class="col-lg-10">
                        <h1 class="page-header">Accueil</h1>
                        <br/>
                        <h4 class="accueil">Bonjour,<br><br>
J'ai créé ce site pour y déposer le cours et les exercices de la matière <span class="thickblue">Programmation Web II : JavaScript et XML</span>, que j'ai réalisé pendant mes années d'enseignement, dans l'espoir de faire bénéficier aux étudiants en général (et aux miens en particulier) d'un référentiel assez complet.</br>

<br>Toute remarque ou critique est la bienvenue.
<br><br><span class="thickred">Mme Hayet LAMINE </span><br>
<span class="grey">Technologue Agrégée en  en informatique.<br>
Enseignante à l'Institut Supérieur des Etudes Technologiques de Sfax (ISET, Sfax-Tunisie).</span><br>
Email:<a href="#">Lamine_hayet@yahoo.fr</a><br><br>
<i class="grey">  "Celui qui a la prétention d'enseigner ne doit jamais cesser d'apprendre"</i>


</h4>

                        <!--à améliorer ensuite-->
                    </div>
                                  </div>
            </div>
        </div>
<?php include ("footer.php");?>
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>
</body>
</html>
