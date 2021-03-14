<?php
    //session_start();
     $user=$_SESSION['unm'];
    $dbcon=mysqli_connect("localhost","root","","jobscope") or die("could not connnect to db");
    $q="SELECT * FROM employers WHERE er_fnm='{$user}'";
    $result=mysqli_query($dbcon,$q) or die("query failed");
    if(mysqli_num_rows($result)>0){
        
    }
    else{
        echo "please register as employee";
        header('location:employerregister.php');
    }

?>