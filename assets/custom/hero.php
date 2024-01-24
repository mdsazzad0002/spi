<?php 	
	if (!defined('main')) {
		header('location:/index.php');
	 	exit();
	 } ;
?>










<style type="text/css">
  /*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#hero {
  width: 100%;
  height: 70vh;
  background-color: rgba(9, 9, 9, 0.8);
  overflow: hidden;
  position: relative;
}


#hero .carousel,
#hero .carousel-inner,
#hero .carousel-item,
#hero .carousel-item::before {
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
}

#hero .carousel-item::before {
  content: "";
  background-color: rgba(45, 124, 227, 0.5);
}

#hero .carousel-container {
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  bottom: 20%;
  top: 80%;
  left: 50px;
  right: 50px;

}

#hero .container {
  text-align: center;
}

#hero h2 {
  color: #fff;
  margin-bottom: 20px;
  font-size: 35px;
  font-weight: 700;
  font-family: 'Tiro Bangla', serif;
}

#hero p {
  -webkit-animation-delay: 0.4s;
  animation-delay: 0.4s;
  margin: 0 auto 30px auto;
  color: #fff;
}

#hero .carousel-inner .carousel-item {
  transition-property: opacity;
  background-position: center top;
}

#hero .carousel-inner .carousel-item,
#hero .carousel-inner .active.carousel-item-start,
#hero .carousel-inner .active.carousel-item-end {
  opacity: 0;
}

#hero .carousel-inner .active,
#hero .carousel-inner .carousel-item-next.carousel-item-start,
#hero .carousel-inner .carousel-item-prev.carousel-item-end {
  opacity: 1;
  transition: 0.5s;
}

#hero .carousel-control-next-icon,
#hero .carousel-control-prev-icon {
  background: none;
  font-size: 30px;
  line-height: 0;
  width: auto;
  height: auto;
  background: rgba(255, 255, 255, 0.2);
  border-radius: 50px;
  transition: 0.3s;
  color: rgba(255, 255, 255, 0.5);
  width: 54px;
  height: 54px;
  display: flex;
  align-items: center;
  justify-content: center;
}

#hero .carousel-control-next-icon:hover,
#hero .carousel-control-prev-icon:hover {
  background: rgba(255, 255, 255, 0.3);
  color: rgba(255, 255, 255, 0.8);
}

#hero .carousel-indicators li {
  cursor: pointer;
  background: #fff;
  overflow: hidden;
  border: 0;
  width: 12px;
  height: 12px;
  border-radius: 50px;
  opacity: 0.6;
  transition: 0.3s;
}

#hero .carousel-indicators li.active {
  opacity: 1;
  background: #5cb874;
}

#hero .btn-get-started {
  font-family: "Raleway", sans-serif;
  font-weight: 500;
  font-size: 14px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 14px 32px;
  border-radius: 4px;
  transition: 0.5s;
  line-height: 1;
  color: #fff;
  -webkit-animation-delay: 0.8s;
  animation-delay: 0.8s;
  background: #5cb874;
}

#hero .btn-get-started:hover {
  background: #6ec083;
}

@media (max-width: 992px) {
  #hero {
/*    height: 100vh;*/
  }

  #hero .carousel-container {
    top: 80%;
  }
}

@media (max-width: 768px) {
  #hero h2 {
    font-size: 20px;
  }
}

@media (min-width: 1024px) {

  #hero .carousel-control-prev,
  #hero .carousel-control-next {
    width: 5%;
  }
}

@media (max-height: 500px) {
  #hero {
/*    height: 120vh;*/
  }
}


.techedu-name-stretch{    
    color: #333;
    line-height: 24px;
    font-weight: normal;
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    font-size: 100%;
    vertical-align: baseline;
    background: transparent;
    position: absolute;
    display: block !important;
    z-index: 101;
    font-family: 'SolaimanLipi', 'Roboto', sans-serif;
    bottom: 70%;
    left: 10%;
    top: 30%;
    }
.techedu-name-stretch h1{
      font-size: 30px;
      color: white;
      text-shadow: #000000 1px -5px 9px;
      position: relative;
      width: 100%;
     left: 80px;
     font-family: 'Tiro Bangla', serif;
    }
@media screen and (max-width: 600px){
        .techedu-name-stretch h1{
          font-size: 20px;
        }
        .techedu-name-stretch h1 span{
          font-size: 10px;
        }
    }
.techedu-name-stretch h1 span{
      font-size: 20px;
    }
.bd-logo{
      
      width: 65px;
      height: 65px;
      position: absolute;
      top: 50%;
      bottom: 50%;
    }
  </style>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
       <?php 
            $i=0;
            $select_slider=mysqli_query($con,"SELECT * FROM `photo_galary` WHERE `type`='slider'");
            while($row_slider=mysqli_fetch_assoc($select_slider)){
         ?>
        <div class="carousel-item <?php if ($i==0) { echo "active"; $i++;} ?>" style="background-image:url(/image/notice/<?= $row_slider['file'];?>)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown text-left"><?= $row_slider['name'];?></h2>
             
             
            </div>
          </div>
        </div>
      <?php } ?>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
    <!-- logo and institute name upon start-->

      <div class="techedu-name-stretch animate__animated animate__fadeInDown">
        <?php $s_logo=mysqli_fetch_assoc($con->query("SELECT * FROM `logo` WHERE `type`='logo'")) ?>

          <a href="/index.php"><img class="bd-logo" src="/image/logo/<?php echo $s_logo['file']; ?>" alt=""></a>

          <h1>শরীয়তপুর পলিটেকনিক ইনস্টিটিউট<br><span>বুড়িরহাট,শরীয়তপুর</span></h1>
    </div>
  <!-- logo and institute name upon  end-->

  </section><!-- End Hero -->



