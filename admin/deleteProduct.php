<?php

include '../common/dl.php';

$id=$_GET['id'];
deleteProduct($id);
header('location:manageProduct.php');

?>