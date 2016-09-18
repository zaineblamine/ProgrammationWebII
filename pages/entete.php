<nav class="navbar navbar-default navbar-static-top headerfixed" role="navigation" style="margin-bottom: 0">
  <div class="navbar-header">
      <img class="logoEntete" src="http://localhost/CoursInformatique/img/logoiset.png">
      <a class="navbar-brand Entete" href="http://localhost/CoursInformatique/pages/accueil.php">Programmation Web II: Apprendre JavaScript et XML</a>
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
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav menu" id="side-menu">
                <!--li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                    </div>
                </li-->
                <li>
                    <a href="http://localhost/CoursInformatique/pages/accueil.php">Accueil</a>
                </li>
                <li><a href="#"><span class=thickblueNav>JavaScript</span></a></li>
                <li>
                                    <a href="http://localhost/CoursInformatique/pages/JavaScript/Cours/IntroductionGénérale.php">Introduction générale</a>
                                </li>
                                <li>
                                    <a href="http://localhost/CoursInformatique/pages/JavaScript/Cours/LesÉlémentsDuLangage.php">Les éléments du langage</a>
                                </li>
                                <li>
                                    <a href="#" class="">Les objets javascript<span class="fa arrow"></span></a>
                                      <ul class="nav nav-second-level">
                                        <li><a href="http://localhost/CoursInformatique/pages/JavaScript/Cours/objets/global.php">L’objet Global</a></li>
                                        <li><a href="http://localhost/CoursInformatique/pages/JavaScript/Cours/objets/string.php">L’objet String</a></li>
                                        <li><a href="http://localhost/CoursInformatique/pages/JavaScript/Cours/objets/array.php">L’objet Array</a></li>
                                        <li><a href="http://localhost/CoursInformatique/pages/JavaScript/Cours/objets/date.php">L’objet Date</a></li>
                                        <li><a href="http://localhost/CoursInformatique/pages/JavaScript/Cours/objets/math.php">L’objet Math</a></li>
                                      </ul>
                                </li>
                                <li>
                                    <a href="http://localhost/CoursInformatique/pages/JavaScript/Cours/LesObjetsDuNavigateur.php">Les objets du navigateur</a>
                                </li>
                                <li>
                                    <a href="http://localhost/CoursInformatique/pages/JavaScript/Cours/LesÉvènements.php">Les événements</a>
                                </li>
                                <li>
                                  <a href="http://localhost/CoursInformatique/pages/JavaScript/Cours/LesFormulaires.php">Les formulaires</a>
                                </li>
                            </ul>
        </div>
    </div>
</nav>
