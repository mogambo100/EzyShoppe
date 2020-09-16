<?php

include '../common/dl.php';

$id=$_GET['id'];
deleteFeaturesValues($id);
header('location:manageFeaturesValues.php');

?>