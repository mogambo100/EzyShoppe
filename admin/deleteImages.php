<?php
include "../common/dl.php";
$id=$_GET['id'];
deleteImages($id);
header("location:manageImages.php");
 ?>
