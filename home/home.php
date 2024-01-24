
<style type="text/css">
	.notice-bg{
		background-image: url('/image/bg_notice_board.png');
		background-repeat: no-repeat;
		padding: 10px 0px 15px 110px;

	}

	.notice-bg,.box_short{
		    box-shadow: 0px 0px 5px 4px gray;
		    border-radius: 5px;
		    font-weight: s;
	}
	h3{
		font-family: 'Tiro Bangla', serif;
	}
	.notice-bg .more-btn a{
		padding: 10px;
		float: right;
		border-radius: 5px;
		margin-right: 25px;
	}
	.link-btn a{
		font-size: 17px;
		overflow: hidden;
		transition: 2s;
	}
	
	.link-btn a:hover{
		transform: translateX(10px);
		
	}

	.teacher_btn{
		outline: none;
		font-size: 17px;
		float: right;
		border-radius: 7px;
		text-decoration: underline;
	}

	.zoom-content:hover{
		transform: scale(1.1);
		transition: 3s;
		transition-timing-function: linear;
	}

	@media only screen and (max-width: 720px) {
	  .notice-bg {
		background-image: url('');
		background-repeat: no-repeat;
		padding: 10px 0px 15px 10px;
	  }
	}


</style>


<!-- all content display -->
<div class="row">
	<!-- main content -->
	<div class="col-sm-12 col-md-9">
		<!-- notice board start -->
		<div class="row">
			<div class="col-md-12">
				<div class="border shadow-lg">
					<div class="card notice-bg" style="">
						<h3 class=" mr-0">নোটিস বোর্ডঃ</h3>
						<hr>
									<?php 
								$count=0;
								$select_notice=mysqli_query($con,"SELECT * FROM `notice`");
								while($row_notice=mysqli_fetch_assoc($select_notice)){
									$count++;
									if($count==6){
										break;
									}
							 ?>
								<p>
									<a class="link-primary text-dark" style="text-decoration: none" download="" href="/image/notice/<?= $row_notice['file'];?>">
										<i class="bi bi-caret-right-fill"></i> 
										<?= $row_notice['name'];?> 
										<span class=""> (Date: <?php echo $row_notice['date']; ?>)</span>
									</a>
								</p>
							<?php } ?>
							<div class="more-btn mr-3">
								<a href="/notice/" class="btn-outline-primary shadow-lg">
									<i class="bi bi-arrow-right-circle"></i>
									সকল
								</a>
							</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end notice board -->


		<!-- start card menu -->
		<div class="row row-eq-height mt-2">
			<?php $s_catagory=$con->query("SELECT * FROM `catagory`");
			while($r_catagory=$s_catagory->fetch_assoc()){ ?>
			<div class="col-md-6  mb-2">
				<div class=" h-100 p-3 box_short" style="background:rgb(245,245,245)">
					<h3 class=""><?= $r_catagory['display']; ?></h3>
					<hr>
					<div class="row">
						<div class="col-5">
							<img src="/image/<?= $r_catagory['file']; ?>" class="img-fluid center-center">
						</div>
						<div class="col-7 p-1">
							<div class="link-btn">
								<?php
									$cata_gory=$r_catagory['name'];
								 	$s_subcatagory=$con->query("SELECT * FROM `$cata_gory`");
										while($r_subcatagory=$s_subcatagory->fetch_assoc()){ ?>
								<a class="d-block" href="/catagory/?catagory=<?= $r_subcatagory['name'];?>&display=<?= $r_subcatagory['display']; ?>"><i class="bi bi-caret-right-fill"></i> <?= $r_subcatagory['display']; ?></a>
							<?php }?>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php }?>	
		</div>
		<!-- end card menu -->


<!-- youtube embaded video -->
	<div class="col-sm-12">
		<!-- future of youtube -->
	</div>
<!-- end youtube embaded video -->
</div>
<!-- end main content video -->


<!-- divide for sidebar -->
	<?php require_once '../assets/custom/sidebar.php'; ?>
<!-- end divide ing sidebar -->

</div>
<!-- end all content display -->

<?php require_once '../assets/custom/back_to_top_&_messanger.php' ?>