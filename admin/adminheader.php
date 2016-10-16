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
<body>        <nav class="navbar navbar-default navbar-static-top headerfixed" role="navigation" style="margin-bottom: 0">
  <div class="navbar-header">
      <img class="logoEntete" src="http://localhost/CoursInformatique/img/logoiset.png">
      <a class="navbar-brand Entete" href="#">Programmation Web II : Apprendre JavaScript et XML</a>
      <img class="logoEntete2" src="http://localhost/CoursInformatique/img/logodept.png">
  </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i><?php echo $_SESSION['username']; ?></a>
                        </li>
                        <li><a href="changepassword.php"><i class="fa fa-gear fa-fw"></i>Changer mot de passe</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logoutadmin.php"><i class="fa fa-sign-out fa-fw"></i> Déconnexion</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
			<ul class="nav autre" id="side-menu">
			<li>
                            <a href="adminspace.php">Membres et demandes d'inscription</a>
                        </li>
			<li>
                            <a href="authentifications.php">Membres Inscrits</a>
                        </li>
          <li>
                         <a href="addAdmin.php">Ajouter Un admin</a>
        </li>
			</ul>
            </div>
	</div>

        </nav>
