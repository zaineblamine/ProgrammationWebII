<?php
class NewAdminForm extends DbConn
{
    public function createAdmin($firstname,$lastname,$usr, $uid, $email, $pw)
    {
        try {

            $db = new DbConn;
            $tbl_admin = $db->tbl_admin;
            // prepare sql and bind parameters
            $stmt = $db->conn->prepare("INSERT INTO ".$tbl_admin." (id, firstname, lastname, username, password, email)
            VALUES (:id, :firstname, :lastname, :username, :password, :email)");
            $stmt->bindParam(':id', $uid);
	    $stmt->bindParam(':firstname', $firstname);
	    $stmt->bindParam(':lastname', $lastname);	
            $stmt->bindParam(':username', $usr);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $pw);
            $stmt->execute();

            $err = '';

        } catch (PDOException $e) {

            $err = "Error: " . $e->getMessage();

        }
        //Determines returned value ('true' or error code)
        if ($err == '') {

            $success = 'true';

        } else {

            $success = $err;

        };

        return $success;

    }
}
