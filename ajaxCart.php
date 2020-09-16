<?php
include "common/dl.php";
$id=$_GET['id'];
$product=getProduct($id);
session_start();
$uid=$_SESSION['id'];
$record=addCart($uid,$product['id'],$product['price']);
echo "success";

 ?>