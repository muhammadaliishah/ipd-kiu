<?php
session_start();
if(isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == true){
    session_unset();
    session_destroy();
    header('location: http://localhost/ipdcheck-master/Admin-panel/login.php');
    exit;
}

?>