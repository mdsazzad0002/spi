	<div class="card-body">
		<div class="row">	
			<div class="col-md-9">
				<div class="card box_short p-3">

				<?php 
					if(isset($_GET['type'])){
						$type=$_GET['type'];
						$i=0;
						if (!empty($type)) {
							$s_ins_vision=$con->query("SELECT * FROM `institution_vision` WHERE `type`='$type'");
							while($r_data=$s_ins_vision->fetch_assoc()){
								$i++;
								echo $r_data['content'];
							}
						}

						if($i==0){
							echo "No Data Avialable";
						}
					}
				 ?>
			</div>
		</div>
			<?php 
				require_once('../assets/custom/sidebar.php');
			 ?>
		</div>
	</div>
	
