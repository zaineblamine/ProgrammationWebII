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
      <?php include("../../entete.php"); ?>
        <div id="page-wrapper">
            <div class="container-fluid">
              <br><br><br>
                <div class="row">
                        <h1 class="page-header"><img class="logo1" src="../../../img/logoJavascript.png" style="float:left;">JavaScript</h1>
                        <br/>
                        <a class="navButtom col-lg-9" href="IntroductionGénérale.php">« Introduction générale</a>
                        <a class="navButtom col-lg-3" href="objets/global.php">Les objets Javascript »</a><br><br>
                        <h2>Les éléments du langage</h2>

                        <div>
                          <div id=lesvariables>
                        <h3> Les variables</h3>
                        <ul>
                                <li>JavaScript utilise l'instruction <bold class="thickblue">var</bold> pour la déclaration.</li>
                                <li>Pour déclarer une variable, il ne faut pas déclarer <bold class="thickblue">le type.</bold> Le navigateur le détecte tout seul.</li>
                                <li>Par contre toute nouvelle variable doit être initialisée.</li>
                                <li>A travers les fonctions  eval ou parseInt, parseFloat, parseDouble et toString; il est possible de convertir les types.</li>
                                <li>Le langage est sensible à la casse.</li>
                        </ul>
                      </div>
                      <div id=lestypesdebase>
                        <h3> Les types de base</h3>
                        <ul>
                          <li>Les <bold class="thickblue">nombres</bold> : entier et réel</li>
                          <li>Les <bold class="thickblue">booléens</bold> : true ou false,</li>
                          <li>Les <bold class="thickblue">chaînes de caractères</bold> : "coucou" ou ’coucou’.<br>
<dfn> Les caractères spéciaux peuvent être utilisés dans les chaînes (\n, \t, …).
La séquence \" permet d’insérer un guillemet dans une chaîne.<dfn></li>
                          <li>Les <bold class="thickblue">tableaux</bold></li>
                        </ul>
                        <div class="col-lg-12">
                          <div class="panel panel-default ">
                              <div class="panel-heading ">
                                   Exemple 1
                              </div>
                              <div class="panel-body ">
                                <span style="color:blue">&lt;</span><span style="color:brown">!DOCTYPE</span> <span style="color:red">html</span><span style="color:blue">&gt;</span><br>
                                <span style="color:blue">&lt;</span><span style="color:brown">html</span><span style="color:blue">&gt;</span><br>
                                <span style="color:blue">&lt;</span><span style="color:brown">head</span><span style="color:blue">&gt;</span>
                                <span style="color:blue">&lt;</span><span style="color:brown">title</span><span style="color:blue">&gt;</span>Exemple 1<span style="color:blue">&lt;</span><span style="color:brown">/title</span><span style="color:blue">&gt;</span>
                                <span style="color:blue">&lt;</span><span style="color:brown">/head</span><span style="color:blue">&gt;</span>
                                <br>
                                <span style="color:blue">&lt;</span><span style="color:brown">body</span><span style="color:blue">&gt;</span><br>
                                <span style="color:blue">&lt;</span><span style="color:brown">script</span> <span style="color:red">language=</span><span style="color:blue">"Javascript"</span>

                                <span style="color:blue">&gt; </span><br>
                                <span style="color:blue">var </span> bonjour =<span style="color:red">"Bonjour!"</span>;<br>
                                <span style="color:blue">var </span> question =<span style="color:red">"Comment allez vous?"</span>;<br>
                                <span style="color:blue">var </span> phrase = bonjour+<span style="color:red">"&ltbr&gt"</span>+question;<br>
                                document.write( phrase, <span style="color:red">"aujourd'hui ?"</span> );<br>

                               <span style="color:blue">&lt;</span><span style="color:brown">/script</span><span style="color:blue">&gt;</span><br>

                                <span style="color:blue">&lt;</span><span style="color:brown">/body</span><span style="color:blue">&gt;</span><br>
                                <span style="color:blue">&lt;</span><span style="color:brown">/html</span><span style="color:blue">&gt;</span>
                              </div>
                              <div class="panel-footer">
                                <p><a class="btn btn-primary btn-lg sizebtn" role="button" href="LesÉlémentsDuLangageExemple1.php" target="_blank">Essayer le code</a></p>
                              </div>
                  </div>
                </div>

                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Exemple 2
                        </div>
                        <div class="panel-body">
                          <span style="color:blue">&lt;</span><span style="color:brown">!DOCTYPE</span> <span style="color:red">html</span><span style="color:blue">&gt;</span><br>
                          <span style="color:blue">&lt;</span><span style="color:brown">html</span><span style="color:blue">&gt;</span><br>
                          <span style="color:blue">&lt;</span><span style="color:brown">head</span><span style="color:blue">&gt;</span><br>
                          <span style="color:blue">&lt;</span><span style="color:brown">script</span> <span style="color:red">language=</span><span style="color:blue">"Javascript"</span><span style="color:blue">&gt;</span>
                          <br><span style="color:blue"> var </span> patate =<span style="color:red">25</span>;
                            <br>
                          </span>alert(<span style="color:red">"Voici un message d\'alerte!"</span>+patate);<br>
                          patate=patate* <span style="color:red">2</span>;<br>
                        </span>alert(<span style="color:red">"Si on multiplie la variable patate par 2 on obtient"</span>+patate);
                        <br>
                         <span style="color:blue">&lt;</span><span style="color:brown">/script</span><span style="color:blue">&gt;</span><br>
                          <span style="color:blue">&lt;</span><span style="color:brown">/head</span><span style="color:blue">&gt;</span><br>
                          <span style="color:blue">&lt;</span><span style="color:brown">body</span><span style="color:blue">&gt;</span><br>

                          <span style="color:blue">&lt;</span><span style="color:brown">/body</span><span style="color:blue">&gt;</span><br>
                          <span style="color:blue">&lt;</span><span style="color:brown">/html</span><span style="color:blue">&gt;</span>
                        </div>

            </div>
            </div>
                      </div>
                    </div>
                    <div id=lesoperateures>
                        <h3> Les opérateurs</h3>
                        <ul>
                        <li>Les opérateurs de calcul  :<dfn> +, -, *, /, %, =</dfn></li>

                        <li>Les opérateurs de comparaison : <dfn> ==, <, <=, >, >=, !=</dfn></li>

                        <li>Les opérateurs associatifs : <dfn> +=, -=, *=, /=</dfn></li>

                        <li>Les opérateurs logiques :<dfn>  &&, ||</dfn></li>

                        <li>Les opérateurs d'incrémentation :<dfn>  ++, --</dfn> </li>
                      </ul>
                      <h4>La priorité des opérateurs Javascript:</h4>
                      <ul>
                        <li>,</li>
                        <li>= += -= *= /= %=</li>
                        <li>? :</li>
                        <li>||</li>
                        <li>&&</li>
                        <li>== !=</li>
                        <li>< <= >= ></li>
                        <li>+ -</li>
                        <li>* /</li>
                        <li>! - ++ --</li>
                        <li>( )</li>
                      </ul>
                    </div>
                    <div id=lesstructuresdecontroles>
<h3> Les structures de contrôles </h3>
      <div class="col-lg-4">
          <div class="well well-sm">
              <h4>if()</h4>
              <p>if ( condition )<br>{  traitement 1 }<br>else<br> { traitement alternatif }</p>
          </div>
      </div>
      <div class="col-lg-4">
          <div class="well well-sm">
              <h4>Switch ()</h4>
              <p>switch(compteur) {<br>case 1 :<br>// traitement 1 ….<br>Break <br>…..<br>case n :<br>// traitement n ….<br>Break <br>default:<br>// traitement par défaut<br>}</p>
          </div>
      </div>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
<div id=lesstructuresiteratives>
<h3> Les structures itératives</h3>
<div class="col-lg-4">
    <div class="well well-sm">
        <h4>while()</h4>
        <p>While(condition)<br>{<br>traitement à répéter<br>}<br>
<span style="color:blue">// le traitement est exécuté 0 ou plusieurs fois<span></p>
    </div>
</div>

<div class="col-lg-4">
    <div class="well well-sm">
        <h4>do.. while()</h4>
        <p>do{<br>       traitement à répéter<br>}<br>while(condition)<br>
<span style="color:blue">// le traitement est exécuté 1 ou plusieurs fois<span></p>
    </div>
</div>

<div class="col-lg-4">
    <div class="well well-sm">
        <h4>for()</h4>
        <p><span style="color:blue">//compteur<span>
        <p>for(i = valeur_initiale; i< valeur_finale; i++){<br>traitement à répéter<br>}<br></p>
    </div>
</div><br><br><br><br><br><br><br><br><br><br>
<h4>Application</h4>
<p> Calculer la somme des nombres pairs compris entre 1 et 10 en utilisant les structures itératives</p>
      <!-- /.panel-heading -->
      <!--div class="col-lg-13">
          <div class="panel panel-default">
              <div class="panel-heading">
                   Les structures itératives: Application
              </div>
              <div class="panel-body">
                        <span style="color:blue">&lt;</span><span style="color:brown">script</span> <span style="color:red">language=</span><span style="color:blue">"Javascript"</span><span style="color:blue">&gt;</span>
                        <br><span style="color:blue"> var </span> sum =<span style="color:red">0</span>;
                          <br>
                          <span style="color:blue">for</span>(var i=<span style="color:red">1</span>;i<=<span style="color:red">10</span>;i++)<br>
                          {<br>   <span style="color:blue">if</span> (i%<span style="color:red">2</span>==<span style="color:red">0</span>) sum+=i;
                          <br>}<br>
                        </span>alert(<span style="color:red">"La somme des nombres pairs compris entre 1 et 10 = "</span>+sum);<br>
                       <span style="color:blue">&lt;</span><span style="color:brown">/script</span><span style="color:blue">&gt;</span><br>
                </div>
              </div>
            </div-->
            <p><a class="btn btn-primary btn-lg sizebtn" role="button" href="LesÉlémentsDuLangageApplication.php" target="_blank">Voir la solution</a></p>
</div>
<div id=lesfonctions>
      <h3> Les fonctions </h3>
      <ul>
        <li>l y a deux parties dans une fonction : sa déclaration et son appel. </li>
        <li>Syntaxe : <dfn>function nom_de_la_fonction([param1,[param2,…paramn]]])<br>
				{.. code des instructions ...}</dfn></li>
      </ul>
        <div class="col-lg-13">
            <div class="panel panel-default">
                <div class="panel-heading">
                     Exemple
                </div>
                <div class="panel-body">
                  <span style="color:blue">&lt;</span><span style="color:brown">script</span> <span style="color:red">language=</span><span style="color:blue">"Javascript"</span><span style="color:blue">&gt;</span>
                  <span style="color:blue">// déclaration de la fonction</span><br>
                  <span style="color:blue">function</span> bienvenue(nom, visite, age)<br>
{<br>
alert(<span style="color:red">"Bonjour,"</span>+nom+<span style="color:red">" vous avez "</span>+age+<span style="color:red">" ans et c'est votre visite n</span>"+visite);<br>
}<br>
<span style="color:blue">// 	appellation de la fonction</span><br>
<span style="color:blue">var</span> votreNom = <span style="color:red">"Mohamed"</span>; votreAge = <span style="color:red">29</span>; votrevisite = <span style="color:red">3</span> ;
<br>bienvenue(votreNom, votrevisite, votreAge);<br>
                 <span style="color:blue">&lt;</span><span style="color:brown">/script</span><span style="color:blue">&gt;</span><br>
                </div>
              </div>
          </div>
          <ul>
            <li>Il est possible d’accéder aux paramètres passés à une fonction depuis celle-ci en utilisant l’objet arguments.</li>
<li>arguments est une variable locale présente dans toutes les fonctions.</li>
<li>Pour faire appel à n’importe quel argument d’une fonction, on met la syntaxe : <span class=thickblue>arguments[index]</span>, avec index une variable ayant une valeur comprise entre 0 et <span class=thickblue>arguments.length</span>.</li>
<li>arguments.length renvoie le nombre d’arguments passés lors de l’appel de la fonction, à ne pas confondre avec la propriété <span class=thickblue>nom_fonction.length</span> qui indique le nombre d’arguments que la fonction attend.</li>
          </ul>
          <div class="col-lg-13">
              <div class="panel panel-default">
                  <div class="panel-heading">
                       Exemple
                  </div>
                  <div class="panel-body">
                    <span style="color:blue">//déclaration<br>
Function</span> somme(x,y) {<br>
	<span style="color:blue">if</span> (arguments.length==somme.length)<br>
		{ <span style="color:blue">return</span>(x+y);}<br>
		<span style="color:blue">else return</span> 0;}<br>
<span style="color:blue">//lors de l’appel</span><br>
Res=somme(3,5); <span style="color:blue">//renvoie 8</span><br>
Res=somme(3,5,7); <span style="color:blue">//renvoie 0</span><br>
                  </div>
                </div>
              </div>
<h4>Application </h4>
<p>Ecrire une fonction appelée produit qui permet de calculer le produit des paramètres quelque soit leur nombre.</p>
<!--div class="col-lg-13">
    <div class="panel panel-default">
        <div class="panel-heading">
             Les fonctions: Application
        </div>
        <div class="panel-body">
                <span style="color:blue">&lt;</span><span style="color:brown">script</span> <span style="color:red">language=</span><span style="color:blue">"Javascript"</span><span style="color:blue">&gt;</span><br>
                <span style="color:blue">function</span> produit()<br>
{    result = <span style="color:red">1</span>;<br>
  <span style="color:blue">for</span>(i = <span style="color:red">0</span>; i < arguments.length; i++) <span style="color:blue">// Pour chaque argument</span><br>
  {  result *=  arguments[i]; }<br>
  <span style="color:blue">return</span> result; <span style="color:blue">// renvoyer le résultat</span><br>
}<br>
alert(produit(<span style="color:red">3</span>,<span style="color:red">2</span>)); <span style="color:blue">// affiche 6</span><br>
alert(produit(<span style="color:red">3</span>,<span style="color:red">5</span>,<span style="color:red">4</span>)); <span style="color:blue">// affiche 60</span><br>
               <span style="color:blue">&lt;</span><span style="color:brown">/script</span><span style="color:blue">&gt;</span><br>
              </div>
          </div>
      </div-->
      <p><a class="btn btn-primary btn-lg sizebtn" role="button" href="LesÉlémentsDuLangageApplication2.php" target="_blank">Voir la solution</a></p>
</div>
      <br><br>
</div><!--row-->

<br>
            </div> <!--container-fluid-->
            <a class="navButtom col-lg-9" href="IntroductionGénérale.php">« Introduction générale</a>
            <a class="navButtom col-lg-3" href="objets/global.php">Les objets Javascript »</a><br><br>
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
