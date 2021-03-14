<!DOCTYPE html>
<html>

   <head>
      <title></title>
   </head>
   
   <body>
      
      <h1>Resume</h1>

      <?php
          $con=mysqli_connect("localhost","root","","jobscope") or die("database failed");
          $id=$_GET['ind'];
          $q="SELECT ee_resume FROM employees WHERE ee_id='{$id}'";
      
          $res=mysqli_query($con,$q) or die ("wrong query");
          
          $row=mysqli_fetch_assoc($res);
         
             //echo $row['ee_resume'];
              //echo $id;
              
         ?>

              <iframe src="<?php echo $row['ee_resume'];?>" width="90%" height="1000px" title="resume"></iframe>  
           
      
   </body>
</html>
