<style type="text/css">
	.float-right,.float-end{
		float: right;
		text-decoration: none;
	}
</style>
<div class="col-md-3 col-sm-12">
	<!-- side bar start -->
	<div class="sidebar">
		<!-- teacher -->
		<?php 
			$select_teacher=$con->query("SELECT * FROM `teacher_info` WHERE `top`!=''");
			while($r_teacher=$select_teacher->fetch_assoc()){

		 ?>
		<div class="card mb-2 box_short">
			<div class="card-header">
				<?=$r_teacher['catagory']; ?>
			</div>
			<div class="card-body text-center">
				<img class="img-fluid" src="/image/teacher/<?=$r_teacher['file']; ?>">
				<p class=""><?=$r_teacher['name']; ?></p>
				<a class="link float-right teacher_btn" href="/teacher?id=<?=$r_teacher['id']; ?>">বিস্তারিত</a>
			</div>
		</div>
	<?php } ?>
		<!-- end teacher -->

		<!-- importnat link -->
		<div class="card box_short  mb-2">
			<div class="card-header">
				গুরুত্বপূর্ন লিংকঃ
			</div>
			<div class="card-body text-left">
				<?php 
					$s_link=$con->query("SELECT * FROM `important_link`");
					while($r_link=$s_link->fetch_assoc()){
				 ?>
				<a class="btn-block d-block" target="_blank" href="<?= $r_link['description'] ?>"><i class="bi bi-caret-right-fill"></i> <?= $r_link['name']; ?></a>
				<?php } ?>
			</div>
		</div>
		<!-- end important link -->



		<!-- national music -->
		<div class="card box_short mb-2">
			<div class="card-header">
				National Music
			</div>
			<div class="card-body">
				<audio class="w-100" controls src="/image/bd_national_anthem.mp3"></audio>
			</div>
		</div>
		<!-- end national music -->




		<!-- photo glary important -->
		<?php 
			$s_glary=$con->query("SELECT * FROM `photo_galary` WHERE `type`='side_banar'");
			while($r_glary=$s_glary->fetch_assoc()){
		 ?>
		<div class="card box_short mb-2">
			<div class="card-header">
				<?= $r_glary['name']; ?>
			</div>
			<div class="card-body">
				<a href="<?= $r_glary['link'];?>">
					<img class="img-fluid zoom-content" src="/image/notice/<?= $r_glary['file']; ?>">
				</a>
			</div>
		</div>
	<?php } ?>
		<!-- end  photo glary important -->

	</div>
	<!-- end side bar -->
</div>