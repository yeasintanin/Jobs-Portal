<?php
    session_start();
    if(($_SESSION['unm']!="")){

    }
    else{
        header("location:login.php");
    }

?>