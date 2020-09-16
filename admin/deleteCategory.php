<?php
include "../common/dl.php";
$id=$_GET['id'];
deleteCategory($id);
header("location:manageCategory.php");
 ?>
