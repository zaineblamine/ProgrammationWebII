<?php
require "../includes/dbconn.php";
include_once "../config/config.php" ;

session_start();
if (!isset($_SESSION['username'])) {
    header("location:main_login_admin.php");
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
    <title>Cours Informatique</title>
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
<body>          <?php include("adminheader.php"); ?>
	 <div id="page-wrapper">
            <div class="container-fluid">
              <br><br><br>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Gestion des membres</h1>
                        <br/>
                    </div>
                                        <?php
					 try {
					 $db = new DbConn;
					 $tbl_members = $db->tbl_members;?>


                                  </div>
		            <div class="row">
                <div class="col-lg-14">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Liste des membres
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nom d'utilisateur</th>
                                            <th>Adresse Mail</th>
					    <th>timestamp</th>
                                            <th>membre?</th>
                                            <th>validé?</th>
					    <th>activer</th>
					    <th>désactiver</th>
                                            <th>Supprimer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                         		<?php foreach($db->conn->query('SELECT * FROM '.$tbl_members) as $row) {?>
        				<tr>
						<td><?=$row['username']?></td>
						<td><?=$row['email']?></td>
						<td><?=$row['mod_timestamp']?></td>
						<?php
						if ($row['approved']=='0') {
								echo"<td>pas encore</td>";
						}
						else {
								echo"<td>membre</td>"; }
						 ?>
						<?php
						if ($row['verified']=='0') {
								echo"<td>pas encore</td>";
						}
						else {
								echo"<td>Vérifié</td>"; }
						 ?>
             <?php echo"<td><a href='enable.php?usr=$row[username]&id=$row[id]&mail=$row[email]&app=$row[approved]'>activer</a></td>"?>
   					<?php echo"<td><a href='disable.php?dis=$row[username]'>désactiver</a></td>"?>
   					<?php echo"<td><a href='delete.php?del=$row[username]'>supprimer</a></td>"?>
					</tr>
    					<?php
					}
					?>
                                    </tbody>
                                </table>
				<?php $db->conn = null;
				} catch (PDOException $e) {
    				print "Erreur !: " . $e->getMessage() . "<br/>";
    				die();
				}
 				?>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            </div>
        </div>
    </div>
    <footer>
      <div class="container">
        <!--img class="logo" src="../../../img/logo.png"-->
        <p class="copyright col-lg-9">
        &copy;Copyright Mme Hayet Lamine Ep Abid - ISET Sfax.
      </p>
      <p class="copyright col-lg-3">
      <img class="logoMail" src=http://localhost/CoursInformatique/img/mail.png> <a href="#">lamine_hayet@yahoo.fr</a>
    </p>
      </div>
</footer>
 <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
</html>
