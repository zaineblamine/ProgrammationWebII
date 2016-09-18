<?php
require "../includes/dbconn.php";
include_once "../config/config.php" ;
session_start();
if (!isset($_SESSION['username'])) {
    header("location:main_login_admin.php");
}
?>
<?php include("adminheader.php"); ?>
	 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Membres Inscrits</h1>
                        <br/>
                    </div>
                                        <?php
					 try {
					 $db = new DbConn;
					 $tbl_attempts = $db->tbl_attempts;?>				
    					
   				 
                                  </div>
		            <div class="row">
                <div class="col-lg-14">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Membres Inscrits
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nom d'utilisateur</th>
					    <th>Derniere authentification</th>	
                                            <th>Nombre d'authentification</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                         		<?php foreach($db->conn->query('SELECT * FROM '.$tbl_attempts) as $row) {?>
        				<tr>
						<td><?=$row['Username']?></td>
						<td><?=$row['LastLogin']?></td>
						<td><?=$row['Attempts']?></td>
					</tr>
					<?php
					}?>
                                    </tbody>
                                </table>
				<?php $db->conn = null;
				}catch (PDOException $e) {
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
<?php include "../pages/footer.php" ?>
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
