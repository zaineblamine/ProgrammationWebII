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
            <br><br><br>
              <div class="row">
                <h1 class="page-header"><img class="logo1" src="../../../../img/logoJavascript.png" style="float:left;">JavaScript</h1>
                <br/>
                <a class="navButtom col-lg-10" href="string.php">« L'objet String</a>
                <a class="navButtom col-lg-2" href="date.php">L'objet Date »</a><br><br>
                <h2>Les objets javaScript</h2>

                    <h3>L’objet array</h3>
                    <ul>
                      <li>
                        Le tableau est défini à travers les mots clés <bold class="thickblue">new</bold> et <bold class="thickblue">Array</bold>, de la façon suivante : <br>
                        <br>
                        <div class="col-lg-7">
                        <div class="well well-sm">
                          var MonTableau1 = new Array();<br>
                          var MonTableau2 = new Array(15);<br>
                          var MonTableau3 = new Array(1,"Salut",3.14,void 0);<br>
                        </div>
                        </div>
                    </li>
                    <br><br><br>
                    <br><br>
                    <li> Le tableau peut aussi être déclaré sans <bold class="thickblue">new</bold> et <bold class="thickblue">Array</bold>:<br>
                      <div class="col-lg-7">
                      <div class="well well-sm">
                          var MonTableau4=résultat de type tableau ;
                        </div>
                      </div>
                    </li>
                    <br><br><br>
                    <li>Tout indice de tableau débute en <bold class="thickblue">0</bold>.</li>
                    <li>la taille d'un tableau n'est pas figée par sa définition ou son initialisation. Elle est dynamique.
A chaque instant, la taille d'un tableau peut être connue en invoquant la propriété <bold class="thickblue">length</bold> de l'objet correspondant à ce tableau.</li>
</ul>
<div class="col-lg-12">
  <div class="panel panel-default ">
      <div class="panel-heading ">
           Exemple
      </div>
      <div class="panel-body ">

        <span style="color:blue">&lt;</span><span style="color:brown">script</span> <span style="color:red">language=</span><span style="color:blue">"Javascript"</span>

        <span style="color:blue">&gt; </span><br>
        <span style="color:blue">var </span> T =<span style="color:red">new </span>array(<span style="color:red">3</span>)</span>;<br>
        <span style="color:blue">var </span>S=<span style="color:red">""</span>;<br>
          <span style="color:blue">for </span>(var i =<span style="color:red"> 0</span>; i < T.length; i++){<br>
            T[i] = i;<br>
            }<br>
            T[<span style="color:red">5</span>] = <span style="color:red">" Le langage javascript"</span>;<br>
              <span style="color:blue">for</span> (var i = <span style="color:red">0</span>; i < T.length; i++){<br>
                S += <span style="color:red">"En " </span>+ i + <span style="color:red">" on trouve " </span>+ T[i] + <span style="color:bleu">"\n"</span>;<br>
          }<br>
              <span style="color:brown">alert</span>(S);<br>

       <span style="color:blue">&lt;</span><span style="color:brown">/script</span><span style="color:blue">&gt;</span><br>
      </div>
      <div class="panel-footer">
        <p><a class="btn btn-primary btn-lg sizebtn" role="button" href="exemple3.php">Essayer le code</a></p>
      </div><!--En 0 on trouve 0
En 1 on trouve 1
En 2 on trouve 2
En 3 on trouve undefined
En 4 on trouve undefined
En 5 on trouve Le langage javascript-->
</div>
</div>
<h4>Quelques fonctions de l’objet Array</h4>
<div class="col-lg-13">
            <div class="dataTable_wrapper">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Fonction</th>
                            <th>Description</th>
                            <th>exemple</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd gradeX">
                            <td>Tab.join([paramètre de séparation])             <td>
                              permet de transformer le tableau en une chaîne de caractère dans laquelle les éléments sont séparés par le caractère ", "   si on n’indique aucun paramètre concernant le caractère de séparation. </td>
                            <td></td>
                    </tr>
                        <tr class="even gradeC">
                            <td>Tab.concat(Tab2)</td>
                            <td>Elle retourne comme résultat un tableau comportant en tête les éléments du tableau source et se terminant par les éléments rajoutés.</td>
                            <td>var T1=new Array("Bonjour","Salut","Hello");<br>
                            var T2=new Array(100,159);<br>
                            var Tnouv=T1.concat(T2);<br>
                            Tnouv donne ["Bonjour", "Salut", "Hello", 100, 159]</td>
                        </tr>
                        <tr class="odd gradeA">
                            <td>Tab.reverse()</td>
                            <td>inverse l'ordre des éléments du tableau référencé. Le traitement s'opère dans le tableau lui-même et ne nécessite donc pas une affectation à un nouveau tableau.</td>
                            <td></td>
                          </tr>
                        <tr class="odd gradeX">
                          <td>Tab.sort() </td>
                          <td>Elle agit sur le tableau afin de le trier. </br>
Par défaut, le tri s'opère par ordre alphabétique après transformation de tous les éléments qui le nécessitent en chaîne de caractères.</td>
<td>
var TabN=[12,14,54,111];<br>
TabN.sort();<br>
Donne : [111,12,14,54]; </td>
                        </tr>
                        <tr class="odd gradeA">
                          <td>Tab.slice(indice_deb,[indice_fin]) </td>
                          <td>Permet d’extraire un sous tableau. </td>
                          <td>TabN=[9,12,77,31,14,54,111];<br>
var T=TabN.slice(2,5) ;<br>
Donne : [77,31,14]</td>
                        </tr>
                        <tr class="odd gradeN">
                          <td>Tab.splice((indice_deb,nbre_éléments,[liste_éléments]) </td>
                          <td>Permet d'insérer et/ou retirer des éléments du tableau. </td>
                          <td>TabN=[9,12,77,31,14, 54,111];
TabN.splice(2,3) ;//extraire 3 élément à partir de la position 2
Donne :[9,12,54,111];</td>
                        </tr>
                      </tbody>
                    </table>

                    <h4>Application</h4>
                    Ecrire un script qui permet de saisir un tableau (d’entier) et rechercher la valeur maximale.<br><br>
                    <p><a class="btn btn-primary btn-lg sizebtn" role="button" href="exemple3.php">Solution</a></p>

<br><br>
</div></div>
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
