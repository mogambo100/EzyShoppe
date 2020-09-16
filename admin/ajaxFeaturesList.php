<?php
$pid=$_GET['pid'];
include "../common/dl.php";
$product=getProduct($pid);
$cid=$product['cid'];
$data=getProductFeaturesList($cid);
echo json_encode($data);
 ?>