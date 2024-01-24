
<style type="text/css">
	/*--------------------------------------------------------------
# Frequently Asked Questions
--------------------------------------------------------------*/
.faq .faq-list {
  padding: 0 50px;
}

.faq .faq-list ul {
  padding: 0;
  list-style: none;
}

.faq .faq-list li+li {
  margin-top: 15px;
}

.faq .faq-list li {
  padding: 20px;
  background: #fff;
  border-radius: 4px;
  position: relative;
}

.faq .faq-list a {
  display: block;
  position: relative;
  font-family: "Poppins", sans-serif;
  font-size: 16px;
  line-height: 24px;
  font-weight: 500;
  padding: 0 30px;
  outline: none;
  cursor: pointer;
}

.faq .faq-list .icon-help {
  font-size: 24px;
  position: absolute;
  right: 0;
  left: 20px;
  color: #75bdfa;
}

.faq .faq-list .icon-show,
.faq .faq-list .icon-close {
  font-size: 24px;
  position: absolute;
  right: 0;
  top: 0;
}

.faq .faq-list p {
  margin-bottom: 0;
  padding: 10px 0 0 0;
}

.faq .faq-list .icon-show {
  display: none;
}

.faq .faq-list a.collapsed {
  color: #343a40;
}

.faq .faq-list a.collapsed:hover {
  color: #0880e8;
}

.faq .faq-list a.collapsed .icon-show {
  display: inline-block;
}

.faq .faq-list a.collapsed .icon-close {
  display: none;
}

@media (max-width: 1200px) {
  .faq .faq-list {
    padding: 0;
  }
}



</style>
<div class="row">
	<div class="col-md-9 ">
		<div class="box_short mb-2">
			
		



   	 <!-- End F.A.Q Section -->
        <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
        </div>

        <div class="faq-list">
          <ul>
          	  <?php $row_si=0;
       
                    $faq_s=mysqli_query($con,"SELECT * FROM `faq`");
                    while($faq_r=mysqli_fetch_assoc($faq_s)){
                    $row_si++;
                ?>
            <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
               <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"data-bs-target="#faq-list-1<?= $row_si;?>" class="collapsed"><?= $faq_r['ask'];?><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1<?= $row_si;?>" class="collapse" data-bs-parent=".faq-list">
                <p>
                 <?= $faq_r['ans'];?>
                </p>
              </div>
            </li>
		<?php } ?>
          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    </div>
    	</div>
	<?php 
		require_once '../assets/custom/sidebar.php';
	 ?>
	
</div>