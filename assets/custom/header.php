

<?php   
  if (!defined('main')) {
     echo "<script>window.location.href='/index.php'</script>";
    exit();
   } ;
?>
<!-- <link href="https://fonts.googleapis.com/css2?family=Tiro+Bangla:ital@1&display=swap" rel="stylesheet"> -->

<style type="text/css">
  /*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/

#header {
  background: #007bff;
  height: 70px;
}

#header #logo h1 {
  font-size: 32px;
  margin: 0;
  line-height: 0;
  font-family: "Raleway", Helvetica, Arial, sans-serif;
  font-weight: 700;
  letter-spacing: 3px;
  text-transform: uppercase;
}

#header #logo h1 a,
#header #logo h1 a:hover {
  color: #fff;
}
#header li a{
  font-family: 'Tiro Bangla', serif;
}

#header #logo img {
  padding: 0;
  margin: 0;
  max-height: 40px;
}

.scrolled-offset {
  margin-top: 70px;
}

/*--------------------------------------------------------------
# Header Social Links
--------------------------------------------------------------*/
.header-social-links {
  margin: 0 0 0 30px;
}

.header-social-links a {
  color: rgba(255, 255, 255, 0.8);
  padding-left: 8px;
  display: inline-block;
  line-height: 0px;
  transition: 0.3s;
}

.header-social-links a i {
  line-height: 0;
  font-size: 24px;
}

.header-social-links a:hover {
  color: #fff;
}

@media (max-width: 768px) {
  .header-social-links {
    margin: 0 15px 0 0;
  }
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/**
* Desktop Navigation 
*/
.navbar {
  padding: 0;
}

.navbar ul {
  margin: 0;
  padding: 0;
  display: flex;
  list-style: none;
  align-items: center;
}

.navbar li {
  position: relative;
}

.navbar a,
.navbar a:focus {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 0 10px 30px;
  font-family: "Raleway", Helvetica, Arial, sans-serif;
  font-size: 15px;
  font-weight: 600;
/*  color: rgba(255, 255, 255, 0.8);*/
  color: #c5c5c5;
  white-space: nowrap;
  transition: 0.3s;
}

.navbar a i,
.navbar a:focus i {
  font-size: 12px;
  line-height: 0;
  margin-left: 5px;
}

.navbar a:hover,
.navbar .active,
.navbar .active:focus,
.navbar li:hover>a {
  color: #fff;
}

.navbar .dropdown ul {
  display: block;
  position: absolute;
  left: 30px;
  top: calc(100% + 30px);
  margin: 0;
  padding: 10px 0;
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: 0.3s;
  border-radius: 4px;
}

.navbar .dropdown ul li {
  min-width: 200px;
}

.navbar .dropdown ul a {
  padding: 10px 20px;
  color: #555;
}
ul li a{
  font-family: 'Tiro Bangla', serif;
}
.navbar .dropdown ul a i {
  font-size: 12px;
}

.navbar .dropdown ul a:hover,
.navbar .dropdown ul .active:hover,
.navbar .dropdown ul li:hover>a {
  color: #199EB8;
}

.navbar .dropdown:hover>ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}

.navbar .dropdown .dropdown ul {
  top: 0;
  left: calc(100% - 30px);
  visibility: hidden;
}

.navbar .dropdown .dropdown:hover>ul {
  opacity: 1;
  top: 0;
  left: 100%;
  visibility: visible;
}

@media (max-width: 1366px) {
  .navbar .dropdown .dropdown ul {
    left: -90%;
  }

  .navbar .dropdown .dropdown:hover>ul {
    left: -100%;
  }
}

/**
* Mobile Navigation 
*/
.mobile-nav-toggle {
  color: #fff;
  font-size: 28px;
  cursor: pointer;
  display: none;
  line-height: 0;
  transition: 0.5s;
}

@media (max-width: 991px) {
  .mobile-nav-toggle {
    display: block;
  }

  .navbar ul {
    display: none;
  }
}

.navbar-mobile {
  position: fixed;
  overflow: hidden;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  background: rgba(34, 34, 34, 0.9);
  transition: 0.3s;
  z-index: 999;
}

.navbar-mobile .mobile-nav-toggle {
  position: absolute;
  top: 15px;
  right: 15px;
}

.navbar-mobile ul {
  display: block;
  position: absolute;
  top: 55px;
  right: 15px;
  bottom: 15px;
  left: 15px;
  padding: 10px 0;
  border-radius: 8px;
  background-color: #fff;
  overflow-y: auto;
  transition: 0.3s;
}

.navbar-mobile a,
.navbar-mobile a:focus {
  padding: 10px 20px;
  font-size: 15px;
  color: #555;
}

.navbar-mobile a:hover,
.navbar-mobile .active,
.navbar-mobile li:hover>a {
  color: #199EB8;
}

.navbar-mobile .getstarted,
.navbar-mobile .getstarted:focus {
  margin: 15px;
}

.navbar-mobile .dropdown ul {
  position: static;
  display: none;
  margin: 10px 20px;
  padding: 10px 0;
  z-index: 99;
  opacity: 1;
  visibility: visible;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
}

.navbar-mobile .dropdown ul li {
  min-width: 200px;
}

.navbar-mobile .dropdown ul a {
  padding: 10px 20px;
}

.navbar-mobile .dropdown ul a i {
  font-size: 12px;
}

.navbar-mobile .dropdown ul a:hover,
.navbar-mobile .dropdown ul .active:hover,
.navbar-mobile .dropdown ul li:hover>a {
  color: #199EB8;
}

.navbar-mobile .dropdown>.dropdown-active {
  display: block;
}
</style>


  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">
       <div id="logo" class="me-auto">
        <?php $s_logo=mysqli_fetch_assoc($con->query("SELECT * FROM `logo` WHERE `type`='logo'")) ?>
        <a href="../home/"><img src="../image/logo/<?php echo $s_logo['file']; ?>" alt=""></a>
      </div>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link active" href="../home/"><i class="bi bi-house-door-fill"></i>  হোম</a></li>
         
 
          <li class="dropdown"><a href="#"><span>আমাদের সম্পর্কে</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/institute_vision/?type=ins">প্রতিষ্ঠান পরিচিতি</a></li>
              <li><a href="/institute_vision/?type=vis">মিশন ও ভিষন</a></li>
              <li><a href="/teacher/">কর্মকর্তা কর্মচারী</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>শিক্ষকদের তথ্য</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <?php 
                  $s_tech=$con->query("SELECT * FROM `technology`");
                  while($r_technology=$s_tech->fetch_assoc()){
               ?>
              <li><a href="/teacher?tech=<?php echo $r_technology['technology']; ?>"><?php echo $r_technology['technology']; ?></a></li>
            <?php } ?>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="../result/">রেজাল্ট</a></li>
          <li><a class="nav-link scrollto" href="../photo_galary/">ফটো গ্যালারি</a></li>
           <li class="dropdown"><a href="#"><span>তথ্য সংগ্রহ</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/student/">শিক্ষার্থী</a></li>
              <!-- <li><a href="#">শিক্ষক</a></li>
              <li><a href="#">চাকরি প্রাপ্র শিক্ষার্থী</a></li> -->
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="../faq/">সচারাচর জিঙ্গাসা</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


