<?php
include "../common/dl.php";
$featuresValues=getFeaturesValues();

 ?>
 


<?php include 'admin-header.php'; ?>

<div id="page-wrapper">
    <div id="page-inner">

                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">MANAGE Features Values</h1>
                        <h1 class="page-subhead-line"><a href="addFeaturesValues.php">ADD Features Values</a> </h1>

                    </div>
                </div>
                <!-- /. ROW  -->


<table class="table table-striped table-bordered table-hover">
 			<tr>
 				<td>ID</td>
 				<td>PRODUCT NAME</td>
 				<td>Feature Name</td>
 				<td>VALUE</td>
 				
 			</tr>
 			<?php foreach($featuresValues as $featuresValue) {  ?>
 			<tr>
 				<td><?php echo $featuresValue['id'];?></td>
 				<td><?php
 							$product=getProduct($featuresValue['pid']);

 				 echo $product['name']?></td>
 				 <td><?php
 							$feature=getFeaturesListId($featuresValue['fid']);

 				 echo $feature['name']?></td>
 				<td><?php echo $featuresValue['value']?></td>
 				<td><a href="deleteFeaturesValues.php?id=<?php echo $featuresValue['id']; ?>">Delete </a>| <a href="updateFeaturesValues.php?id=<?php echo $featuresValue['id']?>">Update</a></td>
 			</tr>
 			<?php } ?>
 		</table>

</div>
</div>

 <?php include 'admin-footer.php'; ?>