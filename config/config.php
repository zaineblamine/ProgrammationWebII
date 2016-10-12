<?php
//Pull '$base_url' and '$signin_url' from this file
include '../config/globalcon.php';
//Pull database configuration from this file
include '../config/dbconf.php';

//Set this for global site use
$site_name = 'http://localhost/PHP-Login/';

//Maximum Login Attempts
$max_attempts = 5;
//Timeout (in seconds) after max attempts are reached
$login_timeout = 300;

//ONLY set this if you want a moderator to verify users and not the users themselves, otherwise leave blank or comment out
$admin_email = '';

//EMAIL SETTINGS
//SEND TEST EMAILS THROUGH FORM TO https://www.mail-tester.com GENERATED ADDRESS FOR SPAM SCORE
$from_email = 'youremail@domain.com'; //Webmaster email
$from_name = 'Test Email'; //"From name" displayed on email

//Find specific server settings at https://www.arclab.com/en/kb/email/list-of-smtp-and-pop3-servers-mailserver-list.html
$mailServerType = 'smtp';
//IF $mailServerType = 'smtp'
$smtp_server = 'smtp.gmail.com';
$smtp_user = 'informatiquecours1@gmail.com';
$smtp_pw = 'ok8965ldk';
$smtp_port = 587; //465 for ssl, 587 for tls, 25 for other
$smtp_security = 'tls';//ssl, tls or ''

//HTML Messages shown before URL in emails (the more
$verifymsg = 'Cliquez sur ce lien pour vérifier votre compte!'; //Verify email message
$active_email = 'Votre compte est maintenant activé! Cliquez sur ce lien pour se connecter!';//Active email message
//LOGIN FORM RESPONSE MESSAGES/ERRORS
$signupthanks = "Merci pour votre inscription, vous recevrez un mail de verification prochainement";//apres que l'admin approuve
$activemsg = 'Votre compte est bien vérifié! vous pouvez maintenant vous connecter <br><a href="'.$signin_url.'">'.$signin_url.'</a>';

//DO NOT TOUCH BELOW THIS LINE
//Unsets $admin_email based on various conditions (left blank, not valid email, etc)
if (trim($admin_email, ' ') == '') {
    unset($admin_email);
} elseif (!filter_var($admin_email, FILTER_VALIDATE_EMAIL) == true) {
    unset($admin_email);
    echo $invalid_mod;
};
$invalid_mod = '$adminemail is not a valid email address';

//Makes readable version of timeout (in minutes). Do not change.
$timeout_minutes = round(($login_timeout / 60), 1);
