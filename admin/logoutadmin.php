<?php
    session_start();
    session_destroy();
    header("location:main_login_admin.php");