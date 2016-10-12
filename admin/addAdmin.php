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
              <br><br><br>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Ajouter un administrateur</h1>
                        <br/>
                    </div>
                    <div id="message2" class="col-lg-8">
                             <form role="form" id="addadmin" name="addadmin" method="POST" action="createadmin.php">
                                       <table  class="table">
                                         <tr>
                                     <td class=thickbluebig>Prénom</td>
                                     <td><input class="form-control" type="text" id="firstname" name="firstname"></td>
                                   </tr>
                                         <tr>
                                     <td class=thickbluebig>Nom</td>
                                     <td><input class="form-control" type="text" id="lastname" name="lastname"></td>
                                   </tr>
                                   <tr>
                               <td class=thickbluebig>Nom d'utilisateur</td>
                               <td><input class="form-control" type="text" id="newuser" name="newuser"></td>
                             </tr>
                             <tr>
                         <td class=thickbluebig>Adresse mail</td>
                         <td><input class="form-control" type="text" id="email" name="email"></td>
                       </tr>
                                   <tr>
                               <td class=thickbluebig>Mot de passe</td>
                               <td><input class="form-control" type="password" id="password1" name="password1"></td>
                             </tr>
                             <tr>
                         <td class=thickbluebig >Confirmation du mot de passe</td>
                         <td><input class="form-control" type="password" id="password2" name="password2"></td>
                       </tr>
                                 </table>
                 <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Inscrire</button>
   <br><br><div id="message"></div>
                               </form>

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
    <script src="../js/signupadmin.js"></script>
    <script src="../js/jquery.validate.min.js"></script>
<script src="../js/additional-methods.min.js"></script>
    <script>
    $( "#addadmin" ).validate({
      rules: {
    	email: {
    		email: true,
    	},
        password1: {
          minlength: 4
    	},
        password2: {
          equalTo: "#password1"
        }
      }
    });
    </script>
</html>
