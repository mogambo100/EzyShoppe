<?php

include '../common/dl.php';

$id=$_GET['id'];
deleteBrand($id);
header('location:manageBrand.php');

?>