<?php 	
	if (!defined('main')) {
		 echo "<script>window.location.href='/index.php'</script>";
	 	exit();
	 } ;
?>


<?php 
	
	if (mysqli_num_rows($con->query("SELECT * FROM `information`"))>0) {
		$row_information=mysqli_fetch_assoc($con->query("SELECT * FROM `information` ORDER BY `id` DESC"));	
	
 ?>
<div class="bg-primary text-light p-3">
	<i class="bi bi-geo-alt-fill"></i> <?php echo $row_information['location'] ?>, <?php echo $row_information['area'] ?> <?php echo $row_information['phone'] ?>
	<span class="float-end">

		<?php 
			
        	//translate page
			    if (file_exists('../assets/custom/translate.php')) {
			      require_once '../assets/custom/translate.php';
			   }
         ?>
	</span>
</div>
<style type="text/css">
	@font-face {
    font-family: Tiro Bangla;
     src: url("../../assets/vendor/font/TiroBangla-Regular.ttf");
     src: url("../../assets/vendor/font/TiroBangla-Italic.ttf");
}
*{
  font-family: 'Tiro Bangla', serif;
 
}
.notice-bg,.box_short{
    box-shadow: 0px 0px 5px 4px gray;
    border-radius: 5px;

	}
</style>
	<?php } ?>

