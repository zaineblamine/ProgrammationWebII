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
                  <a class="navButtom col-lg-9" href="../LesÉlémentsDuLangage.php">« Les éléments du langage</a>
                  <a class="navButtom col-lg-3" href="string.php">L'objet String »</a><br><br>
                  <h2>Les objets javaScript</h2>
                      <h3>L’objet global</h3>
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
<br><br>
               </div><!--row-->

<br>
            </div> <!--container-fluid-->
            <a class="navButtom col-lg-9" href="../LesÉlémentsDuLangage.php">« Les éléments du langage</a>
            <a class="navButtom col-lg-3" href="string.php">L'objet String »</a><br><br>
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
