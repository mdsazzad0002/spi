
<?php 
	require_once '../../conection/index.php';
	if(isset($_POST['id'])){
		$id=$_POST['id'];
	  	$select_slider=mysqli_query($con,"SELECT * FROM `notice` WHERE `id`='$id'");
            while($row_slider=mysqli_fetch_assoc($select_slider)){
	

 ?>

   			<div class="input-group mb-3">
                  <div class="input-group-prepend">
                   <label class="input-group-text"  for="form2Example1"><i class="bi bi-bell mr-2"></i>  Notice Name</label>
                  </div>
                  <input placeholder="Type notice Title" value="<?= $row_slider['name'];?>" type="text" id="form2Example1" class="form-control" name="name" />
                </div>

                <input hidden placeholder="Type notice Title" type="text" value="<?= $id;?>" id="form2Example1" class="form-control" name="id" />


                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                   <label class="input-group-text" for="form2Example132"><i class="bi bi-fonts mr-2"></i>  Notice Type</label>
                  </div>
                  <select name="type" class="form-control" id="form2Example132">
                  	<option><?= $row_slider['type'];?></option>
                      <option>General</option>
                      <option>Result</option>
                  </select>
                </div>
<?php } }?>