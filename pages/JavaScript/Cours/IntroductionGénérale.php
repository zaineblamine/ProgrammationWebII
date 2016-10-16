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
        <?php include ("../../entete.php");?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <br><br><br>
                <div class="row">
                        <h1 class="page-header"><img class="logo1" src="../../../img/logoJavascript.png" style="float:left;">JavaScript</h1>
                        <br/>
                        <a class="navButtom col-lg-8" href="../../index.php">« Accueil</a>
                        <a class="navButtom col-lg-4" href="LesÉlémentsDuLangage.php">Les éléments du langage »</a><br><br>
                        <h2>Introduction Générale</h2>

                        <div id="definition">
                        <h3>Définition</h3>
                        <p>Javascript est un langage de scripts qui incorporé aux balises HTML, permet d'améliorer la présentation et l'interactivité des pages Web.</p>
                        <h3>Présentation</h3>
                        <ul>
                          <li>JavaScript est un langage de programmation complètement lié au langage HTML.</li>
                          <li>Le développeur Internet code ses pages HTML en y intégrant des sources JavaScript.</li>
                          <li>Permet d’exécuter des commandes du <bold class=thickblue> côté client</bold> (au niveau du navigateur)</li>
                          <li>Javascript est un langage <bold class="thickblue">orienté objets</bold>. Chaque objet possède des <bold class="thickblue">propriétés</bold> et des <bold class="thickblue">méthodes.</bold>
                            <br>
                            	<dd> <dfn>Exemple d’objets </dfn>: window, document, formulaire, bouton...</dd>
                          </li>
                          <li>JavaScript est un language <bold class="thickRed">événementiel</bold> (association d’actions aux événements déclenchés par l’utilisateur (passage de souris, clic, saisie clavier, etc...).</li>
                        </ul>
                      </div>
                        <h3> HTML et JavaScript</h3>
                        <p>Il y a plusieurs endroits dans une page web où il est possible d'intégrer du code JavaScript
                          <ul>
                            <li>dans le corps de la page</li>
                          <li> en entête de page </li>
                            <li> dans un événement d'un objet de la page </li>
                          </ul>
                        </p>
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 Exemple 1
                            </div>
                            <div class="panel-body">
                              <span style="color:blue">&lt;</span><span style="color:brown">script</span> <span style="color:red">language=</span><span style="color:blue">"Javascript"</span><span style="color:blue">&gt;</span><br>
                               Placez ici le code de votre script <br><span style="color:blue">&lt;</span><span style="color:brown">/script</span><span style="color:blue">&gt;</span><br>
                            </div>
                </div>
            </div>
            <br><br><br><br><br><br><br><br>
            Ou dans un fichier séparé :<br>
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading ">
                         Exemple 2
                    </div>
                    <div class="panel-body">
                      <span style="color:blue">&lt;</span><span style="color:brown">script</span> <span style="color:red">language=</span><span style="color:blue">"Javascript"</span>
                      <span style="color:red">src=</span><span style="color:blue">"source.js"</span>
                      <span style="color:blue">&gt;</span>
                     <span style="color:blue">&lt;</span><span style="color:brown">/script</span><span style="color:blue">&gt;</span><br>
                    </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                 Exemple 3
            </div>
            <div class="panel-body">
              <span style="color:blue">&lt;</span><span style="color:brown">!DOCTYPE</span> <span style="color:red">html</span><span style="color:blue">&gt;</span><br>
              <span style="color:blue">&lt;</span><span style="color:brown">html</span><span style="color:blue">&gt;</span><br>
              <span style="color:blue">&lt;</span><span style="color:brown">head</span><span style="color:blue">&gt;</span><br>
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
              <p><a class="btn btn-primary btn-lg sizebtn" role="button" href="IntroductionGénéraleExemple3.php" target="_blank">Essayer le code</a></p>
            </div>
</div>
</div>

<h3> Le commentaire</h3>
  <ul>
    <li >Pour mettre en commentaire une partie de code, jusqu'au prochain retour à la ligne</li>
    <div >
      <div class="col-lg-4">
          <div class="well well-sm">
              <span style="color:blue">//Ceci est en commentaire</span>
            </div>
          </div>
          <br><br><br>
</div>
    <li >Pour mettre en commentaire plusieurs lignes de code</li>
    <div>
      <div class="col-lg-4">
          <div class="well well-sm">
              <span style="color:blue">  <span style="color:blue">/* Ceci est en commentaire <br>Ligne 1<br>Ligne 2<br>
  Dernière ligne */</span></span>
            </div>
          </div>
          <br><br><br><br><br>


</div>
  </ul>

<h3> Premières instructions javascript</h3>
<ul>
  <li>affichage d’un message
    <ul>
      <li><bold class=thickblue>alert("votre texte");</bold> une méthode de l'objet window (boite de dialogue)</li>
      <li><bold class=thickblue>document.write("votre texte" et/ou var);/.writeln(); </bold> une méthode de l'objet document (texte affiché dans le browser).</li>
</ul>
  </li>

<li>Saisie de données
prompt ("votre texte invite" ,valeur-initiale); une méthode de l'objet window (boite de dialogue).</li>
</ul>
<a href="#definition">def</a>
<br><br>
</div><!--row-->

            </div> <!--container-fluid-->
        <a class="navButtom col-lg-8" href="../../index.php">« Accueil</a>
        <a class="navButtom col-lg-4" href="LesÉlémentsDuLangage.php">Les éléments du langage »</a><br><br>
</div><!--page-wrapper-->
</div><!--wrapper-->
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
