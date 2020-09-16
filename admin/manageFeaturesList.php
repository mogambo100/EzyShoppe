<?php
include "../common/dl.php";
$featuresLists=getFeaturesList();

 ?>
 


<?php include 'admin-header.php'; ?>

<div id="page-wrapper">
    <div id="page-inner">

                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">MANAGE Features List</h1>
                        <h1 class="page-subhead-line"><a href="addFeaturesList.php">ADD Features</a> </h1>

                    </div>
                </div>
                <!-- /. ROW  -->


<table class="table table-striped table-bordered table-hover">
 			<tr>
 				<td>ID</td>
 				<td>CATEGORY</td>
 				<td>NAME</td>
 				
 			</tr>
 			<?php foreach($featuresLists as $featuresList) {  ?>
 			<tr>
 				<td><?php echo $featuresList['id'];?></td>
 				<td><?php
 							$category=getCategory($featuresList['cid']);

 				 echo $category['name']?></td>
 				<td><?php echo $featuresList['name']?></td>
 				<td><a href="deleteFeaturesList.php?id=<?php echo $featuresList['id']; ?>">Delete </a>| <a href="updateFeaturesList.php?id=<?php echo $featuresList['id']?>">Update</a></td>
 			</tr>
 			<?php } ?>
 		</table>

</div>
</div>

 <?php include 'admin-footer.php'; ?>