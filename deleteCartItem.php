<?php 
include "common/dl.php";
$id=$_GET['id'];
$record=deleteCart($id);
if($record>0)
{
	header("location:cart.php");
}

?>