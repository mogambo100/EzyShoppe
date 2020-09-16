<?php

include '../common/dl.php';

$id=$_GET['id'];
deleteFeaturesList($id);
header('location:manageFeaturesList.php');

?>