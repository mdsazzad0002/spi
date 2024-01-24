<?php   
  if (!defined('main')) {
     echo "<script>window.location.href='../'</script>";
    exit();
   } ;
?>
<?php echo mysqli_fetch_assoc($con->query("SELECT * FROM `web_title` WHERE `type`='full'"))['title']; ?>