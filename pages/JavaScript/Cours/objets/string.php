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
                            <a class="navButtom col-lg-10" href="global.php">« L'objet Global</a>
                            <a class="navButtom col-lg-2" href="array.php">L'objet Array »</a><br><br>
                            <h2>Les objets javaScript</h2>

                                <h3>L’objet string</h3>
                                <h4>Les fonctions s’appliquant à des chaînes</h4>
                                <ul>

                                  <li>le premier caractère a comme indice <span class="thickblue">0</span></li>
          <li >Le nombre de caractères de la chaîne (propriété) : <span class="thickblue">chaine.length</span></li>
          <li>chaine.length retourne le nombre de caractères, ici 7 caractères</li>
          <div class="col-lg-7">
              <div class="well well-sm">
                  var Chaine=‘bonjour’;
              </div>
            </div>
          <br><br><br>
          <li>Concaténation : <span class="thickblue">chaîne1+chaîne2</span></li>
          <div class="col-lg-7">
              <div class="well well-sm">
          var chaine1="Vive le ";<br>
          var chaine2="JavaScript";<br>
          var chaine=chaine1+chaine2;<br>
          <span style="color:blue">//La variable chaine contient après ce script "Vive le JavaScript".</span>
          </div>
          </div>
          <br><br><br><br><br><br>
          <li>Extraire une sous-chaîne : <span class="thickblue">chaîne.substring(début[,fin])</span>et <span class="thickblue">substr(début[,longueur])</span> </li>
          <div class="col-lg-6">
          <div class="well well-sm">
            <h4>substring(début[,fin])</h4>
            var datenais = "11/08/2011";<br>
          var journais = datenais.substring(0,2);<br>
          var moisnais = datenais.substring(3,5);<br>
          var anneenais = datenais.substring(6,10);<br>
          </div>
          </div>
          <div class="col-lg-6">
          <div class="well well-sm">
            <h4>substr(début[,longueur])</h4>
            var datenais = "11/08/2011";<br>
          var journais = datenais.substring(0,2);<br>
          var moisnais = datenais.substring(3,2);<br>
          var anneenais = datenais.substring(6,4);<br>
          </div>
          </div>
          <br><br><br><br><br><br><br><br>
          <li>La fonction <span class=thickblue>slice</span>: a le même rôle que substring à la différence qu’avec slice les valeurs données en paramètres peuvent être négatives. Dans ce cas, elles indiquent des indexations partant de la fin de la chaîne. </li>
          <div class="col-lg-6">
          <div class="well well-sm">
            var ch=datenais.slice(-4)<br>
            <span class=thickblue>//retourne 2011</span>
          </div>
          </div>
          <br><br><br><br>
          <li>La méthode <span class=thickblue>charAt(n)</span> récupère le nième caractère</li>
          <div class="col-lg-6">
          <div class="well well-sm">
            var chaine="azerty";<br>
            chaine.charAt(1) <br>
            <span class=thickblue>//retourne "z</span>
          </div>
          </div>
          <br><br><br><br><br>
          <li>Retrouver une sous-chaîne dans une chaîne: <span class=thickblue>chaîne.IndexOf(souschaîne [,position])</span></li>
          <li>La méthode IndexOf retourne l'indice de la première occurrence de la souschaîne retrouvée dans chaîne à partir de position.</li>
          <li>Si la sous-chaîne n'est pas trouvée, IndexOf retourne <span class=thickblue>-1</span>.</li>
                                </ul>
<br><br>
                         </div><!--row-->

          <br>
                      </div> <!--container-fluid-->
                      <a class="navButtom col-lg-10" href="global.php">« L'objet Global</a>
                      <a class="navButtom col-lg-2" href="array.php">L'objet Array »</a><br><br>
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
