
<?php 
	if (file_exists('../../conection/index.php')) {
		require_once '../../conection/index.php';
	}
	if (isset($_POST['id'])) {
		$id=$_POST['id'];
		$select_teacher=$con->query("SELECT * FROM `teacher_info` WHERE `id`='$id'");
		while($r_teacher=$select_teacher->fetch_assoc()){



 ?>

     <div class="row">
                  <div class="col-md-6">
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                             <label class="input-group-text" for="form2Example1"><i class="bi bi-justify-left mr-2"></i> Name</label>
                          </div>
                           <input value="<?=$r_teacher['name'];?>" required placeholder="Type Teacher Name" type="text" id="form2Example1" class="form-control" name="name" />
                        </div>


                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                             <label class="input-group-text" class="form-label" for="form2Example2"><i class="bi bi-phone mr-2"></i>Mobile</label>
                          </div>
                           <input value="<?=$r_teacher['phone'];?>" required type="text" placeholder="Type phone number" id="form2Example2" class="form-control" name="phone" />
                        </div>


                         <div class="input-group mb-3">
                          <div class="input-group-prepend">
                             <label class="input-group-text" class="form-label" for="form2Example3"><i class="bi bi-envelope mr-2"></i> Email</label>
                            
                          </div>
                          <input value="<?=$r_teacher['email'];?>" required placeholder="Type Email address" type="text" id="form2Example3" class="form-control" name="email" />
                        </div>
                  </div>
                  <div class="col-md-6">

                      
                      <div class="input-group">
                          <div class="input-group-prepend">
                            <label class="input-group-text" class="form-label" for="form2Example4"><i class="bi bi-justify-left mr-2"></i> Teacher Title</label>
                          </div>
                         <select required id="form2Example4" class="form-control" name="catagory">
                                <option value="<?=$r_teacher['catagory'];?>"><?=$r_teacher['catagory'];?></option>
                                <?php  $select_slider=mysqli_query($con,"SELECT * FROM `tech_title`  ORDER BY `id` DESC");
                                    while($row_slider=mysqli_fetch_assoc($select_slider)){
                                      ?>
                                        <option value="<?= $row_slider['tech_title']; ?>"><?= $row_slider['tech_title']; ?></option>
                                    <?php } ?>
                            </select>
                        </div>
                        <a class="btn btn-sm btn-primary float-right btn-icon-split  mb-3" href="/mug/tech_title/">
                            <span class="icon text-white-50">+</span>
                            <span class="text">Add Title</span>
                        </a>


                         
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <label class="input-group-text" class="form-label" for="form2Example5"><i class="bi bi-fonts mr-2"></i>Technology</label>
                          </div>
                         <select required  id="form2Example5" class="form-control" name="tech">
                            <option value="<?=$r_teacher['tech'];?>"><?=$r_teacher['tech'];?></option>
                            <?php
                                $select_technology=$con->query("SELECT * FROM `technology`");
                                while($row_tech=$select_technology->fetch_assoc()){

                            ?>
                            <option value="<?=$row_tech['technology']; ?>">
                                <?=$row_tech['technology']; ?>
                            </option>
                            <?php } ?>    
                        </select>
                        </div>
                        <a class="btn btn-sm btn-primary float-right  mb-3 btn-icon-split" href="/mug/technlogy/">
                            <span class="icon text-white-50">+</span>
                            <span class="text">Add Technology</span> 
                        </a>
                       
                  </div>
              </div>
              <input type="text"value="<?=$id;?>" hidden name="id">
               <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="form83"><i class="bi bi-info-circle mr-2"></i>About</label>
                </div>
                <textarea required id="form83" name="describe" placeholder="Describe about you" class="form-control" rows="6"><?=$r_teacher['describ'];?></textarea>
            </div>
<?php 	} } ?>