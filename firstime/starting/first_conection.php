<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>This is Some crateion for nessary</title>
	
	<?php require_once '../../conection/index.php'; ?>

</head>
<body>
	<?php 
		if(isset($_POST['submit']) or isset($_GET['type'])){



//used
// notice
			$create_notice=mysqli_query($con,"CREATE TABLE IF NOT EXISTS `notice`(id int(15) NOT NULL AUTO_INCREMENT, name varchar(250),  file varchar(1000), type varchar(150), user_type varchar(1500), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY key(id))");


//used
// logo fiture
			$con->query("CREATE TABLE IF NOT EXISTS `logo`(id int not null AUTO_INCREMENT, file varchar(1000), type varchar(250), user_type varchar(1500), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY key(id))");

//used
// website name
			$con->query("CREATE TABLE IF NOT EXISTS `web_title`(id int not null AUTO_INCREMENT, title varchar(1500), type varchar(150), user_type varchar(1500), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY key(id))");


//used
// contact information
			$con->query("CREATE TABLE IF NOT EXISTS `information`(id int not null AUTO_INCREMENT, name varchar(200), phone varchar(150), facebook varchar(350), email varchar(350), twitter varchar(350), whatsapp varchar(305), location varchar(1500), website varchar(1500), area varchar(1500), maps varchar(1500), user_type varchar(1500), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY key(id))");


// used
// important link
			$create_footer=mysqli_query($con,"CREATE TABLE IF NOT EXISTS `important_link`(id int(15) NOT NULL AUTO_INCREMENT, name varchar(250), description varchar(5000), type varchar(1500), user_type varchar(1500), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY key(id))");
// used
// faq
			// faq
			$create_faq=$con->query('CREATE TABLE IF NOT EXISTS `faq`(id int not null AUTO_INCREMENT, ask varchar(1500), ans varchar(5000), user_type varchar(1500), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY key(id))');



// used
// teacher info
			$create_teacher_info=mysqli_query($con,"CREATE TABLE IF NOT EXISTS `teacher_info`(id int(15) NOT NULL AUTO_INCREMENT, name varchar(250), email varchar(150),phone varchar(15), catagory varchar(100), tech varchar(150), top varchar(150), file varchar(1000), describ varchar(5000), user_type varchar(1500), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY key(id))");


// used
// catagory
			$create_catagory=$con->query("CREATE TABLE IF NOT EXISTS `catagory`(`id` int not null AUTO_INCREMENT, name varchar(150), display varchar(150), file varchar(1000), user_type varchar(1500), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY key(id))");

			$create_instraction=mysqli_query($con,"CREATE TABLE IF NOT EXISTS `instraction`(id int(15) NOT NULL AUTO_INCREMENT, name varchar(250), description varchar(5000), user_type varchar(1500), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY key(id))");




//used
// photo glary
			$create_photo_galary=mysqli_query($con,"CREATE TABLE IF NOT EXISTS `photo_galary`(id int(15) NOT NULL AUTO_INCREMENT, name varchar(250), type varchar(150), link varchar(2000), file varchar(5000), user_type varchar(1500), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY key(id))");


			$create_developer=mysqli_query($con,"CREATE TABLE IF NOT EXISTS `developer`(id int(15) NOT NULL AUTO_INCREMENT, name varchar(250), email varchar(100), phone varchar(15), technology varchar(15), shift varchar(25), facebook varchar(200), file varchar(5000), user_type varchar(1500), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY key(id))");

		}

// used
// institution & vision
		$con->query("CREATE TABLE IF NOT EXISTS `institution_vision`(id int not null AUTO_INCREMENT, content varchar(5000), type varchar(50), user_type varchar(1500), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY key(id))");


// used
// tech_title
		$create_tetech_title=$con->query("CREATE TABLE IF NOT EXISTS `tech_title`(id int not null AUTO_INCREMENT, tech_title varchar(1500), user_type varchar(1500), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY key(id))");

//used
//session
		$create_session=mysqli_query($con, "CREATE TABLE IF NOT EXISTS `session`(id int not null AUTO_INCREMENT, session varchar(50), user_type varchar(1500), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY key(id))");



//used
// technology
		$create_technology=mysqli_query($con, "CREATE TABLE IF NOT EXISTS `technology`(id int not null AUTO_INCREMENT, technology varchar(50), file varchar(1000),  user_type varchar(1500), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,  PRIMARY key(id))");


// used
// student information
		$create_information=mysqli_query($con, "CREATE TABLE IF NOT EXISTS `information_student`(id int not null AUTO_INCREMENT, name varchar(50), phone varchar(15), session varchar(20), technology varchar(20), shift varchar(20), poin varchar(20), reasion varchar(500), description varchar(5000), semister varchar(20),roll varchar(20), registration varchar(20), status varchar(15), user_type varchar(1500), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY key(id))");

// used
// suscribe
		$create_suscribe=$con->query("CREATE TABLE IF NOT EXISTS `suscribe`(id int not null AUTO_INCREMENT, name varchar(1500), email varchar(1500), status varchar(150), user_type varchar(1500), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY key(id))");

// used
// admin
		$create_admin_user=mysqli_query($con,"CREATE TABLE IF NOT EXISTS `admin_user`(id int not null AUTO_INCREMENT, name varchar(200), email varchar(100), phone varchar(50), control varchar(50), description varchar(5000), password varchar(1000), file varchar(1500), user_type varchar(1500), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY key(id))");
		
		if (mysqli_num_rows($con->query("SELECT * FROM `admin_user`"))==0) {
			$pass=md5('123456');
			$con->query("INSERT INTO `admin_user`(`email`, `control`,`password`) VALUES ('admin@gmail.com','full','$pass')");
		}
		

		
	 ?>
	<div class="container">
		<br>
		<form method="post" action="">
			<div class="row justify-content-md-center">
				<div class="col-md-4 col-sm-12">
					<h1 class="text-center text-italic">Information</h1>
					<p>We are some create dynamicy table. You can click button <span class="text-danger bg-light">create new first time</span> Thank you. </p>
					<button class="btn btn-primary w-100" type="submit" name="submit">Create New first time</button>
					<br>
					<br>
					<a class="link" href="/mug/">Go to your home page thank?</a>
				</div>
			</div>
		</form>
	</div>
</body>
</html>