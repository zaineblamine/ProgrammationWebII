<nav class="navbar navbar-default navbar-static-top headerfixed" role="navigation" style="margin-bottom: 0">
  <div class="navbar-header">
      <img class="logoEntete" src="http://localhost/CoursInformatique/img/logoiset.png">
      <a class="navbar-brand Entete" href="http://localhost/CoursInformatique/pages/accueil.php">Programmation Web II : Apprendre JavaScript et XML</a>
      <img class="logoEntete2" src="http://localhost/CoursInformatique/img/logodept.png">
  </div>
    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="http://localhost/CoursInformatique/pages/user.php"><i class="fa fa-user fa-fw"></i><?php echo $_SESSION['username']; ?></a>
                </li>
                <li><a href="http://localhost/CoursInformatique/pages/changepassword.php"><i class="fa fa-gear fa-fw"></i> Changer mot de passe</a>
                </li>
                <li class="divider"></li>
                <li><a href="http://localhost/CoursInformatique/login/logout.php"><i class="fa fa-sign-out fa-fw"></i> Déconnexion</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
