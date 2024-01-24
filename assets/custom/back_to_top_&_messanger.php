<?php 	
	if (!defined('main')) {
		 echo "<script>window.location.href='/index.php'</script>";
	 	exit();
	 } ;
?>

<style type="text/css">
	/*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
.back-to-top {
  position: fixed;
  visibility: hidden;
  opacity: 0;
  right: 15px;
  bottom: 80px;
  z-index: 996;
  background: #199EB8;
  width: 40px;
  height: 40px;
  border-radius: 50px;
  transition: all 0.4s;
}

.back-to-top i {
  font-size: 28px;
  color: #fff;
  line-height: 0;
}

.back-to-top:hover {
  background: #1ebddc;
  color: #fff;
}

.back-to-top.active {
  visibility: visible;
  opacity: 1;
}


/*--------------------------------------------------------------
# Back to Messanger
--------------------------------------------------------------*/
.back-to-messanger {
  position: fixed;
  opacity: 1;
  right: 15px;
  bottom: 15px;
  z-index: 996;
  background: #FFF;
  width: 40px;
  height: 40px;
  border-radius: 50px;
  transition: all 0.4s;
}

.back-to-messanger i {
  font-size: 45px;
  color: #007aff;
  line-height: 0;
}

.back-to-messanger:hover {
  /*background: #1ebddc;
  color: #fff;*/
  opacity: .5;
}

.back-to-messanger.active {
  visibility: visible;
  opacity: 1;
}
</style>




<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
 <a target="_blank" href="https://www.messenger.com/t/100020335989905" class="back-to-messanger d-flex align-items-center justify-content-center"><i class="bi bi-messenger"></i></a>

 <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/63c38456c2f1ac1e202d878e/1gmprpt7d';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->