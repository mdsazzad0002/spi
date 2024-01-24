<?php require_once "../conection/index.php"; ?>
<?php define('main', 420); ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FAQ(Frequently Ask Question) || <?php echo mysqli_fetch_assoc($con->query("SELECT * FROM `web_title` WHERE `type`='full'"))['title']; ?></title>
	<?php 
				if (file_exists('../assets/custom/fav.php')) {
					require_once '../assets/custom/fav.php';
				}
		?>


	<!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- VENDOR CSS ICON -->
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../assets/vendor/boxicons/css/boxicons.css">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../assets/vendor/swiper/swiper-bundle.min.css">
  <!-- Vendor animation file -->
  <link href="../assets/vendor/animate/animate.min.css" rel="stylesheet">
  <!-- cdn css files -->
  <link rel="stylesheet" type="text/css" href="../assets/vendor/lightbox/lightbox.min.css">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <style type="text/css">
  	body{
  		background:linear-gradient(rgba(2, 2, 2, 0.0), rgba(0, 0, 0, 0.0)), url("/image/bg_main.gif") fixed center center;
  	}
  </style>
</head>
<body>
	<div class="container px-3" style="background: #eee;">
		

	<?php 
			if (file_exists('../assets/custom/address_top.php')) {
					require_once '../assets/custom/address_top.php';				
			}

			if (file_exists('../assets/custom/hero.php')) {
					require_once '../assets/custom/hero.php';
			}
	
			if (file_exists('../assets/custom/header.php')) {
					require_once('../assets/custom/header.php');
			}

	?>

  
	<div class="container-fulid pt-3">
		<?php if (file_exists('faq.php')) {
			require_once 'faq.php';
		} ?>
	</div>

	<?php 
			if (file_exists('../assets/custom/footer.php')) {
				require_once '../assets/custom/footer.php';
			}
		?>
	  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/lightbox/lightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
</body>
</html>