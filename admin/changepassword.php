<?php
require "../includes/dbconn.php";
session_start();
if (!isset($_SESSION['username'])) {
    header("location:../admin/main_login_admin.php");
}
?>
  <?php include("adminheader.php"); ?>
        <div id="page-wrapper">
            <div class="container-fluid">
              <br><br><br>
                <div class="row">
                        <h1 class="page-header">Modifier le mot de passe</h1>
                        <br/>
                            <div class="row">
                                <div id="message2" class="col-lg-8">
                                    <form role="form" id="adminchangepassword" name="adminchangepassword" method="POST" action="change_password_script.php">
                                        			<table  class="table">
                                                <tr>
                                            <td class=thickbluebig>Mot de passe actuel</td>
                                            <td><input class="form-control" type="password" id="p0" name="p0"></td>
                                          </tr>
                                          <tr>
                                      <td class=thickbluebig>Nouveau mot de passe</td>
                                      <td><input class="form-control" type="password" id="p1" name="p1"></td>
                                    </tr>
                                    <tr>
                                <td class=thickbluebig >Confirmation du mot de passe</td>
                                <td><input class="form-control" type="password" id="p2" name="p2"></td>
                              </tr>
                                        </table>
              <button type="submit" name="Submit" id="submit" class="btn btn-primary">Appliquer</button>
              <button type="reset" class="btn btn-primary">Annuler</button>
	      	<br><br><div id="message"></div>
                                      </form>

                                    </div>
                                      </div>

                        </div>
                    </div>
            </div>
 </body>
<?php include "../pages/footer.php" ?>
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>
 <!-- The AJAX script -->
    <script src="../js/changepassword.js"></script>
    <script src="../js/jquery.validate.min.js"></script>
<script src="../js/additional-methods.min.js"></script>
<script>
$( "#adminchangepassword" ).validate({
  rules: {
    p1: {
      minlength: 4
	},
    p2: {
      equalTo: "#p1"
    }
  }
});
</script>
</body>
</html>
