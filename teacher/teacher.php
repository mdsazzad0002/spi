<style type="text/css">
	.float-right{
		float: right;
	}
	.box_info img{
		height: 180px;
		width: 180px;
	}
	.box_info{
		margin-bottom: 12px;
	    box-shadow: 0px 0px 5px 4px gray;
		border-radius: 5px;
		padding: 5px;
		position: relative;
		overflow: hidden;
	}
	.content{
		display: block;
		position: absolute;
		left: 0;
		width: 0%;
		background: white;
		height: 0%;
		transition: 2s;
		margin-top: -5px;
	    padding: 10px;
	    text-align: justify;
	    color: white;
	    overflow: scroll;

	}
	.icon{
		display: block;
		position: absolute;
		text-align: center;
		font-weight: bold;
		left: 0;
		width: 120px;
		height: 120px;
		top: 0;
		margin-left: -60px;
		margin-top: -60px;
		transform: rotate(135deg);
		transition: 2s;
		z-index: 5;
		font-size: 25px;
	}

	.hov_box_info:hover >.content{
		width: 100%;
		height: 100%;
		background: white;
		color: black;
		z-index: 10;
	}
	

</style>

<div class="row">
	<div class="col-md-9">
		<div class="card">
			<div class="card-header">
				<i class="bi bi-people"></i> Employ Information
			</div>
			<div class="card-body">
				<?php 
					if (isset($_GET['id'])) {
						$id=$_GET['id'];
						$select_teacher=$con->query("SELECT * FROM `teacher_info` WHERE `id`= '$id'");
					}else if (isset($_GET['tech'])) {
						$tech=$_GET['tech'];
						$select_teacher=$con->query("SELECT * FROM `teacher_info` WHERE `tech`= '$tech'");
					}else{
						$select_teacher=$con->query("SELECT * FROM `teacher_info`");
					}
					$i=0;
					while ($r_teacher=$select_teacher->fetch_assoc()) {
						$i++;
				 ?>
				<div class="box_info">
					<div class="row">
						<div class="col-12 hov_box_info">
							<div class="bg-success icon p-3 text-light">
								<i class="bi bi-box-arrow-in-up"></i>
							</div>
							<div class="content ml-3">
									<?php echo $r_teacher['describ']; ?>
							</div>
						</div>
						<div class="col-md-4 text-center box_img">
							<img class="img-fluid rounded-circle" src="/image/teacher/<?php echo $r_teacher['file']; ?>">
						</div>
						<div class="col-md-8">
							<table class="table table-bordered table-striped table-hover">
								<tr>
									<td> নাম </td>
									<td>: <?php echo $r_teacher['name']; ?> </td>
								</tr>
								<tr>
									<td> পদবী </td>
									<td> : <?php echo $r_teacher['catagory']; ?> </td>
								</tr>
								<tr>
									<td>টেকনোলজি </td>
									<td> : <?php echo $r_teacher['tech']; ?> </td>
								</tr>
								<tr>
									<td> ফোন </td>
									<td> :  <?php echo $r_teacher['phone']; ?> </td>
								</tr>
								<tr>
									<td>ইমেইল </td>
									<td> : <?php echo $r_teacher['email']; ?> </td>
								</tr>
								
							</table>
						</div>
					</div>
					
				</div>
			<?php }

				if ($i==0) {
					echo "No Found Data";
				}
			 ?>
			</div>
		</div>
	</div>
	<?php require_once '../assets/custom/sidebar.php'; ?>
	
</div>

<?php require_once '../assets/custom/back_to_top_&_messanger.php' ?>