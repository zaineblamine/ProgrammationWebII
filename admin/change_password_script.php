<?php
	session_start();
	require "../includes/dbconn.php";
	require '../includes/functions.php';
	include_once ('../config/config.php');
	if (isset($_SESSION['username'])){
		$username=$_SESSION['username'];
		$p0=$_POST['p0'];
		$p1=$_POST['p1'];
		$p2=$_POST['p2'];
		$p0 = stripslashes($p0);
		$p1 = stripslashes($p1);
		$p2 = stripslashes($p2);
		try {
		$db = new DbConn;
		$tbl_admin = $db->tbl_admin;
		$loginCtl = new LoginFormAdmin;
		$response = $loginCtl->checkPasswordWhenLogidIn($username, $p0);
		if ($response == 'true') {
			if ($p1 != $p2) {
    				echo "<img class=logoMail src='../img/croix.png'>Les deux mot de passes ne sont pas identiques.<div id='returnVal' style='display:none;'>false</div>";
			}
			elseif (strlen($p1) < 4) {
   		 echo "<img class=logoMail src='../img/croix.png'>le mot de passe doit contenir au moins 4 caractères!<div id='returnVal' style='display:none;'>false</div>";
			}
			else{
				$newpass=password_hash($p1, PASSWORD_DEFAULT);
				$sql="Update $tbl_admin SET password='$newpass' WHERE username='$username';";
				$stmt= $db->conn->prepare($sql);
				$stmt->execute();
				echo "<img class=logoMail src='../img/success.png'> Votre mot de passe a été modifié avec succès
				<br><a href='changepassword.php'>Retour</a>
				<div id='returnVal' style='display:none;'>true</div>";}
		}

		$db->conn = null;
		}
		catch (PDOException $e) {
				print "Erreur !: " . $e->getMessage() . "<br/>";
				die();
		}
	}
