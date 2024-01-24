<?php 	
	if (!defined('main')) {
		 echo "<script>window.location.href='/index.php'</script>";
	 	exit();
	 } ;
?>



<!-- Favicons -->
  <?php $s_logo=mysqli_fetch_assoc($con->query("SELECT * FROM `logo` WHERE `type`='fav'"));
      $fav=$s_logo['file'];
   ?>
  <link href="../image/logo/<?php echo $fav; ?>" rel="icon">
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->
