<?php
	require "../includes/dbconn.php";
	require '../includes/functions.php';
	include_once ('../config/config.php');
	if (isset ($_GET['usr'])) {
		$nomm=$_GET['usr'];
		$id=$_GET['id'];
		$mail=$_GET['mail'];
		$app=$_GET['app'];

			if($app==0){
					try {
		$db = new DbConn;
		$tbl_members = $db->tbl_members;
		$sql="UPDATE $tbl_members SET approved='1' WHERE username='$nomm';";
		$stmt= $db->conn->prepare($sql);
		$stmt->execute();
		$db->conn = null;
		/*Send verification email*/
		$m = new MailSender;
		$m->sendMail($mail, $nomm, $id, 'Verify');
		}
		catch (PDOException $e) {
				print "Erreur !: " . $e->getMessage() . "<br/>";
				die();
		}
		}
		echo "<meta http-equiv='refresh' content='0;url=adminspace.php'>";
	}
 	?>
