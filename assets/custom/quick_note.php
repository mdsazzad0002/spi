<?php if (!defined('main')) {exit();} ?>
<style type="text/css">
	.quick_note{
		padding: 5px 15px;
		font-style: italic;
		overflow: auto;
		white-space: nowrap;
	}
	.quick_note span{
		font-size: 20px;
		font-weight: bold;

	}
	.quick_note h4{
		font-size: 20px;
	}
	.quick_note span:hover{
		cursor: pointer;

	}
</style>
<?php 
	$s_notification=$con->query("SELECT * FROM `notification` ORDER BY `id` DESC");
	while($row_notification=$s_notification->fetch_assoc()){

 ?>
<div class="quick_note quick_note<?= $row_notification['id']; ?>">
	<h4><a href="<?php echo $row_notification['link']; ?>"><i class="bi bi-exclamation-circle-fill text-warning"></i> Notification: <?php echo $row_notification['name']; ?></a>	<span class="float-end text-danger" onclick="quick_note<?= $row_notification['id']; ?>()">x</span></h4>
</div>
<script type="text/javascript">
	function quick_note<?= $row_notification['id']; ?>() {
		document.querySelector('.quick_note<?= $row_notification['id']; ?>').style.display='none';
	}
</script>
<?php } ?>
