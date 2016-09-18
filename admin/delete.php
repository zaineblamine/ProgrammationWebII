<?php
	require "../includes/dbconn.php";	
	include_once ('../config/config.php');
	if (isset ($_GET['del'])) {
		$nomm=$_GET['del'];
		try {
		$db = new DbConn;
		$tbl_members = $db->tbl_members;		
		$sql="DELETE FROM $tbl_members WHERE username='$nomm';";
		$stmt= $db->conn->prepare($sql);
		$stmt->execute();
		echo "<meta http-equiv='refresh' content='0;url=adminspace.php'>";
		$db->conn = null;
		} 
		catch (PDOException $e) {
    		print "Erreur !: " . $e->getMessage() . "<br/>";
    		die();
		}
}
 	?> 
