<?php 
	require_once '../../conection/index.php';
	if(isset($_POST['id'])){
		$id=$_POST['id'];
		$catagory=$_POST['catagory'];

	  	$select_slider=mysqli_query($con,"SELECT * FROM `$catagory` WHERE `id`='$id'");
            while($row_slider=mysqli_fetch_assoc($select_slider)){
	

 ?>
             	<div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Catagory Name</span>
                      </div>
                      <input value="<?= $row_slider['display'];?>" type="text" name="cata_name" class="form-control" placeholder="Enter your Catagory" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <input hidden placeholder="Type notice Title" type="text" value="<?= $id;?>" id="form2Example1" class="form-control" name="id" />
                      <input hidden placeholder="Type notice Title" type="text" value="<?= $catagory;?>" id="form2Example1" class="form-control" name="catagory" />
<?php }} ?>