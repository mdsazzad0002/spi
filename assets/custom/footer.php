<?php   
  if (!defined('main')) {
     echo "<script>window.location.href='/index.php'</script>";
    exit();
   } ;
?>

<style type="text/css">
  /*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
#footer {
  background: black;
  padding: 0 0 30px 0;
  color: #fff;
  font-size: 14px;
}

#footer .footer-top {
  background: #151515;
  border-bottom: 1px solid #222222;
  padding: 60px 0 30px 0;
}

#footer .footer-top .footer-info {
  margin-bottom: 30px;
}

#footer .footer-top .footer-info h3 {
  font-size: 28px;
  margin: 0 0 20px 0;
  padding: 2px 0 2px 0;
  line-height: 1;
  font-weight: 700;
  text-transform: uppercase;
}

#footer .footer-top .footer-info h3 span {
  color: #ffc451;
}

#footer .footer-top .footer-info p {
  font-size: 14px;
  line-height: 24px;
  margin-bottom: 0;
  font-family: "Raleway", sans-serif;
  color: #fff;
}

#footer .footer-top .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #292929;
  color: #fff;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 4px;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
}

#footer .footer-top .social-links a:hover {
  background: #ffc451;
  color: #151515;
  text-decoration: none;
}

#footer .footer-top h4 {
  font-size: 16px;
  font-weight: 600;
  color: #fff;
  position: relative;
  padding-bottom: 12px;
}

#footer .footer-top .footer-links {
  margin-bottom: 30px;
}

#footer .footer-top .footer-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

#footer .footer-top .footer-links ul i {
  padding-right: 2px;
  color: #ffc451;
  font-size: 18px;
  line-height: 1;
}

#footer .footer-top .footer-links ul li {
  padding: 10px 0;
  display: flex;
  align-items: center;
}

#footer .footer-top .footer-links ul li:first-child {
  padding-top: 0;
}

#footer .footer-top .footer-links ul a {
  color: #fff;
  transition: 0.3s;
  display: inline-block;
  line-height: 1;
}

#footer .footer-top .footer-links ul a:hover {
  color: #ffc451;
}

#footer .footer-top .footer-newsletter form {
  margin-top: 30px;
  background: #fff;
  padding: 6px 10px;
  position: relative;
  border-radius: 4px;
}

#footer .footer-top .footer-newsletter form input[type=email] {
  border: 0;
  padding: 4px;
  width: calc(100% - 110px);
}

#footer .footer-top .footer-newsletter form input[type=submit] {
  position: absolute;
  top: 0;
  right: -2px;
  bottom: 0;
  border: 0;
  background: none;
  font-size: 16px;
  padding: 0 20px;
  background: #ffc451;
  color: #151515;
  transition: 0.3s;
  border-radius: 0 4px 4px 0;
}

#footer .footer-top .footer-newsletter form input[type=submit]:hover {
  background: #ffcd6b;
}

#footer .copyright {
  text-align: center;
  padding-top: 30px;
}

#footer .credits {
  padding-top: 10px;
  text-align: center;
  font-size: 13px;
  color: #fff;
}








</style>


  <!-- ======= Footer ======= -->
 
  <footer id="footer">
    <div class="container">
      <?php $s_information=$con->query("SELECT * FROM `web_title` WHERE `type`= 'title'");
      while($r_info=$s_information->fetch_assoc()){ ?>
      <div class="copyright">
        &copy; Copyright <strong><span><?php echo $r_info['title']; ?></span></strong>. All Rights Reserved
      </div>
    <?php }
      $r_info=mysqli_fetch_assoc($con->query("SELECT * FROM `information`"));
     ?>
      <div class="credits">
        Designed by <a href="<?php echo $r_info['facebook']; ?>">
          MD. SAZZAD SARKAR
        </a>
      </div>
    
    </div>
  </footer><!-- End Footer -->
