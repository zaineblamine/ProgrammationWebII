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
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <img class="logoEntete" src="../../../img/logo.png">
                <a class="navbar-brand Entete" href="../../index.php">Cours Informatique</a>

                <!--a class="navbar-brand" style="color:blue;">Mme Hayet Lamine Ep Abid</a-->
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <!--img src="../logo.png"-->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../../login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav autre" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="../../index.php">Accueil</a>
                        </li>
                        <li><a href="#"><span class=thickblueNav>JavaScript</span></a></li>
                        <li>
                                            <a href="IntroductionGénérale.php">Introduction générale</a>
                                        </li>
                                        <li>
                                            <a href="LesÉlémentsDuLangage.php">Les éléments du langage</a>
                                        </li>
                                        <li>
                                            <a href="#" class="">Les objets javascript<span class="fa arrow"></span></a>
                                              <ul class="nav nav-second-level">
                                                <li><a href="objets/global.php">L’objet Global</a></li>
                                                <li><a href="objets/string.php">L’objet String</a></li>
                                                <li><a href="objets/array.php">L’objet Array</a></li>
                                                <li><a href="objets/date.php">L’objet Date</a></li>
                                                <li><a href="objets/math.php">L’objet Math</a></li>
                                              </ul>
                                        </li>
                                        <li>
                                            <a href="LesObjetsDuNavigateur.php">Les objets du navigateur</a>
                                        </li>
                                        <li>
                                            <a href="LesÉvènements.php">Les événements</a>
                                        </li>
                                        <li>
                                          <a href="LesFormulaires.php">Les formulaires</a>
                                        </li>
                                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                  <br><br><br>
                  <h1 class="page-header"><img class="logo1" src="../../../img/logoJavascript.png" style="float:left;">JavaScript</h1>
                  <br/>
                  <a class="navButtom col-lg-9" href="LesÉlémentsDuLangage.php">« Les éléments du Langage</a>
                  <a class="navButtom col-lg-3" href="LesObjetsDuNavigateur.php">Chapitre Suivant »</a><br><br>
                  <h2>Les objets javaScript</h2>
                      <h3>1- L’objet global</h3>
                      <ul>
                        <li><h4>Quelques fonctions de l’objet Global</h4>
                        <div class="col-lg-13">
                                    <div class="dataTable_wrapper">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Fonction</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd gradeX">
                                                    <td>eval ()</td>
                                                    <td>Évalue une chaîne et l'exécute comme s'il s'agissait d'un code de script</td>
                                                </tr>
                                                <tr class="even gradeC">
                                                    <td>isNaN () </td>
                                                    <td>Détermine si une valeur est un nombre illégale (Not-a-Number)</td>
                                                </tr>
                                                <tr class="odd gradeA">
                                                    <td>Number ()</td>
                                                    <td>Convertit la valeur d'un objet à un certain nombre</td>
                                                </tr>
                                                <tr class="even gradeA">
                                                    <td>parseFloat ()</td>
                                                    <td>Analyse une chaîne et renvoie un nombre à virgule flottante</td>
                                                </tr>
                                                <tr class="odd gradeA">
                                                    <td>parseInt ()</td>
                                                    <td>Analyse une chaîne et renvoie un entier</td>
                                                </tr>
                                                <tr class="even gradeA">
                                                    <td>String()</td>
                                                    <td>Convertit la valeur d'un objet en une chaîne</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                        </div>
                        <!--col-lg-12-->
                      </li>
                        <li><h4>Exemples</h4>
                      <div class="col-lg-6">
                          <div class="panel panel-default">
                              <div class="panel-heading">
                                   Exemple1
                              </div>
                              <div class="panel-body">
                                <span style="color:blue">&lt;</span><span style="color:brown">script</span> <span style="color:red">language=</span><span style="color:blue">"Javascript"</span><span style="color:blue">&gt;</span><br>
                                a=prompt(<span style="color:red">"donner un premier nombre : "</span>);<br>
                                b=prompt(<span style="color:red">"donner un deuxième nombre : "</span>);<br>
                                <span style="color:blue">if</span>((isNaN(a))||(isNaN(b)))<br>
                                {<br>
                                  alert(<span style="color:red">"donner deux nombres"</span>);<br>
                                }<br>
                                <span style="color:blue">else</span><br>
                                  a=Number(a);<br>
                                  {<br>
                                  b=Number(b);<br>
                                  c=a+b;<br>
                                  alert(<span style="color:red">"la somme</span> = "+c);<br>
                                }<br>
                                <span style="color:blue">&lt;</span><span style="color:brown">/script</span><span style="color:blue">&gt;</span><br>
                                <br><br><br>
                              </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                     Exemple2
                                </div>
                                <div class="panel-body">
                                  <span style="color:blue">&lt;</span><span style="color:brown">script</span> <span style="color:red">language=</span><span style="color:blue">"Javascript"</span><span style="color:blue">&gt;</span><br>
                                    <span style="color:blue">var</span> num=prompt(  <span style="color:red">"donner un numéro "</span>,<span style="color:red">""</span>)<br>
  <span style="color:blue">if</span> (isNaN(num))<br>
document.write(  <span style="color:red">"numéro incorrecte"</span>+"<span style="color:brown">&lt</span><span style="color:blue">br</span><span style="color:brown">&gt</span>");<br>
  <span style="color:blue">else</span><br>
{<br>
document.write(  <span style="color:red">"numéro correcte :"</span>+num+"<span style="color:brown">&lt</span><span style="color:blue">br</span><span style="color:brown">&gt</span>");<br>

x=String(num);<br>
y = parseInt(x);<br>
w = Number(x);<br>
z = eval(x)+ w;<br>
ch = eval(x+w);<br>
document.write(<span style="color:red">"y = "</span>+y+"<span style="color:brown">&lt</span><span style="color:blue">br</span><span style="color:brown">&gt</span>");<br>
document.write(<span style="color:red">"w = "</span>+w+"<span style="color:brown">&lt</span><span style="color:blue">br</span><span style="color:brown">&gt</span>");<br>
document.write(<span style="color:red">"z = "</span>+z+"<span style="color:brown">&lt</span><span style="color:blue">br</span><span style="color:brown">&gt</span>");<br>
document.write(<span style="color:red">"ch = "</span>+ch+"<span style="color:brown">&lt</span><span style="color:blue">br</span><span style="color:brown">&gt</span>");<br>
}<br>
                                  <span style="color:blue">&lt;</span><span style="color:brown">/script</span><span style="color:blue">&gt;</span><br>
                      </div>
                    </div>
                  </div>
</li></ul>
                      <h3>2- L’objet string</h3>
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
                      <h3>3- L’objet array</h3>
                      <h3>4- L’objet date</h3>
                      <h3>5- L’objet math</h3>
               </div><!--row-->

<br>
            </div> <!--container-fluid-->
            <a class="navButtom col-lg-9" href="LesÉlémentsDuLangage.php">« Chapitre Précédent</a>
            <a class="navButtom col-lg-3" href="LesObjetsDuNavigateur.php">Chapitre Suivant »</a><br><br>
</div><!--page-wrapper-->

</div><!--wrapper-->
    <footer>
      <div class="container">
        <!--img class="logo" src="../../../img/logo.png"-->
        <p class="copyright col-lg-9">
        &copy;Copyright Mme Hayet Lamine Ep Abid - ISET Sfax.
      </p>
    <p class="copyright col-lg-3">
      <img class="logoMail" src="../../../img/mail.png"> <a href="#">lamine_hayet@yahoo.fr</a>
    </p>
      </div>
</footer>

    <script src="../../../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../../bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../../../dist/js/sb-admin-2.js"></script>
</body>
</html>
