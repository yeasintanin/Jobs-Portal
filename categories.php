<?php
        //$link=mysql_connect("localhost","jobscope","riddhi")or die("can not connect");
        //mysql_select_db ("jobscope",$link) or die("can not select database");
        $con=mysqli_connect("localhost","root","","jobscope") or die("database failed");
        $q="select * from categories";
	    $res=mysqli_query($con,$q) or die("worng query");
		while($row=mysqli_fetch_assoc($res)){
					echo '<li><a href="jobs_by_category.php?cat='.$row['cat_nm'].'">'.$row['cat_nm'].'</a></li>';
		}
		mysqli_close($con);
?>