<?php

								
										echo $row['pub_date'];
										echo "<br>";
										echo $row['deadline'];
										echo "<br>";
										$db_date1=$row['pub_date'];
										$db_date2=$row['deadline'];
										$date1=date_create('$db_date2');
										$date2=date_create('$db_date1');
										
										//$date->diff($date1,$date2);
										//print_r ($date);
										
										$date = new DateTime($row['deadline']);
										$now = new DateTime();

										$dates = $date->diff($now);//->format("%d days, %h hours and %i minuts");
										echo($dates->days);
?> 