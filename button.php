
<!-- /.modal -->

<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $data['er_fnm']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <center><h4 class="modal-title" id="myModalLabel">Job lists</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<table>
				<?php
					 $data['er_fnm']; 
					$owner=$data['er_fnm'];
					include('conn.php');
					$edit=mysqli_query($conn,"select * from hotjobs where er_name='$owner' and j_active='1'");
					$listcount=0;
					while($erow=mysqli_fetch_array($edit))
					{

																//deadline things for hot jobs
																 $date = new DateTime($erow['pub_date']);
																 $now = new DateTime();
							 
																 $dates = $date->diff($now);//->format("%d days, %h hours and %i minuts");
																  $check=$dates->days;
															
																 //get package date from hotjobs
																 $deadline=$erow['package'];
																 if($check<=$deadline){ //probem not working 27th 2.21am

				?>
				
				<tr>
				<td><a target="_blank" href="tinyshow.php?id=<?php echo $erow['id'];?>"><?php echo $erow['j_title'];?></a></td>
				</tr>
			<?php } ?>
				<!-- <form method="POST" action="edit.php?id=<?php //echo $erow['company_name']; ?>">
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="firstname" class="form-control" value="<?php //echo $erow['j_title']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="lastname" class="form-control" value="<?php //echo $erow['j_city']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Address:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="address" class="form-control" value="<?php //echo $erow['j_title']; ?>">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
				</form>
             -->
			<?php
			$listcount+=1;
			}
			echo $listcount;
			if($listcount>2){

			}
			?>
			</table>
			</div>
        </div>
    </div>
<!-- /.modal -->